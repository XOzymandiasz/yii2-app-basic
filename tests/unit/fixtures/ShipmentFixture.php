<?php

namespace unit\fixtures;

use yii\test\ActiveFixture;


class ShipmentFixture extends ActiveFixture
{
    public $modelClass = 'app\modules\postal\models\Shipment';

    public $depends = ['unit\fixtures\ShipmentContentFixture'];
}