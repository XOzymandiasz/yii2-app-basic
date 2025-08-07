<?php

namespace unit\fixtures;

use yii\test\ActiveFixture;

class ShipmentAddressLinkFixture extends ActiveFixture
{
    public $modelClass = 'app\modules\postal\models\ShipmentAddressLink';
    public $depends = ['unit\fixtures\ShipmentFixture', 'unit\fixtures\ShipmentAddressFixture'];
}