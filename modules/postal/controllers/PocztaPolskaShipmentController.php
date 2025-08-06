<?php

namespace app\modules\postal\controllers;

use app\modules\postal\forms\PocztaPolskaShipmentForm;
use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentProviderInterface;
use app\modules\postal\Module;
use Throwable;
use Yii;
use yii\db\StaleObjectException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\RangeNotSatisfiableHttpException;
use yii\web\Response;

/**
 * @property Module $module
 */
class PocztaPolskaShipmentController extends Controller
{

    /**
     * @throws Throwable
     * @throws StaleObjectException
     * @throws NotFoundHttpException
     */
    public function actionCreateFromShipment(int $id): string|Response
    {
        $shipment = $this->findModel($id);
        $model = new PocztaPolskaShipmentForm(['model' => $shipment]);


        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->addShipment()) {
            Yii::warning("Shipment created", __METHOD__);
        }

        return $this->render('create-from-shipment', [
            'model' => $model,
        ]);
    }

    /**
     * @throws NotFoundHttpException
     * @throws RangeNotSatisfiableHttpException
     */
    public function actionDownloadLabel(int $id): Response
    {
        $model = $this->findModel($id);
        $repository = $this->module->getRepositoriesFactory()->getShipmentRepository();
        $label = $repository->getLabel($model->guid, $repository->createPrintType());

        $filename = 'label' . $model->guid . '.pdf';
        return Yii::$app->response->sendContentAsFile($label, $filename, [
            'mimeType' => 'application/pdf',
            'inline' => true,
        ]);
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

}
