<?php

namespace app\modules\postal\modules\poczta_polska\controllers;

use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentProviderInterface;
use app\modules\postal\modules\poczta_polska\forms\ShipmentForm;
use app\modules\postal\modules\poczta_polska\Module;
use app\modules\postal\Module as PostalModule;
use Throwable;
use Yii;
use yii\data\ArrayDataProvider;
use yii\db\StaleObjectException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\RangeNotSatisfiableHttpException;
use yii\web\Response;

/**
 * @property Module $module
 */
class ShipmentController extends Controller
{


    /**
     * @throws Throwable
     * @throws StaleObjectException
     * @throws NotFoundHttpException
     */
    public function actionCreateFromShipment(int $id): string|Response
    {
        $shipment = $this->findModel($id);
        $model = new ShipmentForm(['model' => $shipment]);
        $model->buffors = $this->module
            ->getRepositoriesFactory()
            ->getBufforRepository()
            ->getAll();

        if (empty($model->buffors)) {
            Yii::$app->session->setFlash(
                'danger', PostalModule::t('poczta-polska', 'Not found buffor. Create before Add Shipment'));
            return $this->redirect(['buffer/create']);
        }

        if ($model->load(Yii::$app->request->post())
            && $model->validate()
            && $model->addShipment($this->module->getRepositoriesFactory()->getShipmentRepository())) {
            if($returnUrl){
                return $this->redirect($returnUrl);
            }
            return $this->redirect(['index', 'idBuffer' => $model->idBuffer]);
        }

        return $this->render('create-from-shipment', [
            'model' => $model,
        ]);
    }

    /**
     * @throws RangeNotSatisfiableHttpException
     */
    public function actionDownloadLabel(string $guid): Response
    {
        $repository = $this->module->getRepositoriesFactory()->getShipmentRepository();
        $label = $repository->getLabel($guid);

        $filename = 'label' . $guid . '.pdf';
        return Yii::$app->response->sendContentAsFile($label, $filename, [
            'mimeType' => 'application/pdf',
            'inline' => true,
        ]);
    }

    public function actionIndex(int $idBuffer): string|Response
    {
        $repository = $this->module->getRepositoriesFactory()->getShipmentRepository();
        $shipments = $repository->getList($idBuffer);

        $dataProvider = new ArrayDataProvider([
            'allModels' => $shipments,
            'key' => function($shipments) {
                return $shipments->getGuid();
            },
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'idBuffer' => $idBuffer,
        ]);
    }

    public function actionSend(int $idBuffer): Response
    {
        $model = new ShipmentForm();

        if ($model->send($idBuffer, $this->module->getRepositoriesFactory()->getBufforRepository())) {
            return $this->redirect(['buffer/index']);
        }

        return $this->redirect(['index', 'idBuffer' => $idBuffer]);
    }

    /**
     * @throws NotFoundHttpException
     */
    private function findModel(int $id): Shipment
    {
        $model = Shipment::find()
            ->andWhere([
                'provider' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
                'id' => $id
            ])->one();
        if (!$model) {
            throw new NotFoundHttpException();
        }
        return $model;
    }

    /**
     * @throws NotFoundHttpException
     */
    private function findModelByGuid(string $guid): Shipment
    {
        $model = Shipment::find()
            ->andWhere([
                'provider' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
                'guid' => $guid
            ])->one();
        if (!$model) {
            throw new NotFoundHttpException();
        }
        return $model;
    }

}
