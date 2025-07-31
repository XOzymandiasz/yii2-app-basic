<?php

namespace app\modules\postal\controllers;

use Yii;
use yii\web\Controller;
use app\modules\postal\models\ShipmentAddressLink;

class TmpController extends Controller
{
    public function actionIndex()
    {
        $models = ShipmentAddressLink::find()
            ->with(['address', 'shipment']) // eager loading
            ->all();

        return $this->render('index', [
            'models' => $models,
        ]);
    }
}
