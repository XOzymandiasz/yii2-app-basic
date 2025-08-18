<?php

namespace app\modules\postal\modules\poczta_polska\controllers;

use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentProviderInterface;
use app\modules\postal\modules\poczta_polska\forms\ShipmentForm;
use app\modules\postal\modules\poczta_polska\Module;
use app\modules\postal\Module as PostalModule;
use app\modules\postal\modules\poczta_polska\repositories\EnvelopeRepository;
use app\modules\postal\modules\poczta_polska\repositories\ShipmentRepository;
use Throwable;
use Yii;
use yii\base\InvalidConfigException;
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

    public ?ShipmentRepository $shipmentRepository = null;
    public ?EnvelopeRepository $bufferRepository = null;

    public function init(): void
    {
        parent::init();
        if ($this->shipmentRepository === null) {
            $this->shipmentRepository = $this->module
                ->getRepositoryFactory()
                ->getShipmentRepository();
        }

        if ($this->bufferRepository === null) {
            $this->bufferRepository = $this->module
                ->getRepositoryFactory()
                ->getBufferRepository();
        }
    }

    /**
     * @throws InvalidConfigException
     */
    public function actionIndex(int $bufferId, bool $refresh = false): string|Response
    {
        $shipments = $this->shipmentRepository->getList($bufferId, $refresh);

        $dataProvider = new ArrayDataProvider([
            'allModels' => $shipments,
            'key' => static function ($shipment) {
                return $shipment->getGuid();
            },

            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'bufferId' => $bufferId,
        ]);
    }

    /**
     * @throws InvalidConfigException|NotFoundHttpException
     */
    public function actionView(int $bufferId, string $guid): string
    {
        $model = $this->shipmentRepository->getOne($bufferId,$guid);

        if (!$model) {
            throw new NotFoundHttpException();
        }

        return $this->render('view', [
            'model' => $model,
            'bufferId' => $bufferId,
        ]);
    }


    /**
     * @throws Throwable
     * @throws StaleObjectException
     * @throws NotFoundHttpException
     */
    public function actionCreateFromShipment(int $id, ?string $returnUrl = null): string|Response
    {
        $model = new ShipmentForm();
        $model->setModel($this->findModel($id));
        $model->buffers = $this->bufferRepository->getBuffersList();

        if (empty($model->buffers)) {
            Yii::$app->session->setFlash(
                'danger', PostalModule::t('poczta-polska', 'Not found buffor. Create before Add Shipment attemp'));
            return $this->redirect(['buffer/create']);
        }

        if ($model->load(Yii::$app->request->post())
            && $model->validate()
            && $model->add($this->shipmentRepository)
        ) {

            if ($returnUrl) {
                return $this->redirect($returnUrl);
            }
            return $this->redirect(['index', 'bufferId' => $model->bufferId]);
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
        $label = $this->shipmentRepository->getLabel($guid);

        $filename = 'label' . $guid . '.pdf';

        return Yii::$app->response->sendContentAsFile($label, $filename, [
            'mimeType' => 'application/pdf',
            'inline' => true,
        ]);
    }


    public function actionSend(int $bufferId): Response
    {
        $model = new ShipmentForm();

        if ($model->send($bufferId, $this->bufferRepository)) {
            return $this->redirect(['buffer/index']);
        }

        return $this->redirect(['index', 'bufferId' => $bufferId]);
    }

    /**
     * @throws Throwable
     * @throws InvalidConfigException
     * @throws StaleObjectException
     * @throws NotFoundHttpException
     */
    public function actionDelete(int $bufferId, string $guid): Response
    {
        $model = $this->findModelByGuid($guid);
        if ($this->shipmentRepository->clear($bufferId, $guid)) {
            $model->delete();
        }

        return $this->redirect(['index', 'idBuffer' => $bufferId]);
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
