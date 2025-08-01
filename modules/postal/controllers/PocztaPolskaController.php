<?php

namespace app\modules\postal\controllers;

use app\modules\postal\forms\PocztaPolskaShipmentForm;
use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentProviderInterface;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class PocztaPolskaController extends Controller
{

    public function actionCreateFromShipment(int $id): string
    {
        $shipment = $this->findModel($id);
        $model = new PocztaPolskaShipmentForm(['model' => $shipment]);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->session->setFlash('success', 'Wysłano przesyłkę.');

        }

        return $this->render('create-from-shipment', [
            'model' => $model,
        ]);
    }

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
