<?php

namespace app\modules\postal\tests\fixtures;

use app\modules\postal\models\ShipmentAddressLink;
use yii\test\ActiveFixture;

class ShipmentAddressLinkFixture extends ActiveFixture
{
    public $modelClass = ShipmentAddressLink::class;
    public $depends = [ShipmentFixture::class, ShipmentAddressFixture::class];

    public $dataFile = __DIR__ . '/data/shipment_address_link.php';
}