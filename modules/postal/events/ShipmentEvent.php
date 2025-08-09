<?php

namespace app\modules\postal\events;

use app\modules\postal\models\Shipment;
use yii\base\Event;

class ShipmentEvent extends Event
{

    public Shipment $model;
}
