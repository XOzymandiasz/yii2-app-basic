<?php

namespace app\modules\postal\tests\fixtures;

use app\modules\postal\models\ShipmentAddress;
use yii\test\ActiveFixture;

class ShipmentAddressFixture extends ActiveFixture
{
    public $modelClass = ShipmentAddress::class;
    public $dataFile = __DIR__ . '/data/shipment_address.php';
}