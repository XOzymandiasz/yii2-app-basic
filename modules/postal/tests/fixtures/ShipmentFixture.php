<?php

namespace app\modules\postal\tests\fixtures;

use app\modules\postal\models\Shipment;
use yii\test\ActiveFixture;


class ShipmentFixture extends ActiveFixture
{
    public $modelClass = Shipment::class;

    public $depends = [ShipmentContentFixture::class, UserFixture::class];

}