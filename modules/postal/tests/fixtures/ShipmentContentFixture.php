<?php

namespace app\modules\postal\tests\fixtures;

use app\modules\postal\models\ShipmentContent;
use yii\test\ActiveFixture;

class ShipmentContentFixture extends ActiveFixture
{
    public $modelClass = ShipmentContent::class;

    public $dataFile = __DIR__ . '/data/shipment_content.php';
}