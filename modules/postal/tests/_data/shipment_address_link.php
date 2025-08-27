<?php

use app\modules\postal\models\ShipmentDirectionInterface;

return [
    'sender_link' => [
        'shipment_id' => 1,
        'address_id' => 1,
        'type' => ShipmentDirectionInterface::DIRECTION_IN,
    ],
    'receiver_link' => [
        'shipment_id' => 1,
        'address_id' => 2,
        'type' => ShipmentDirectionInterface::DIRECTION_OUT,
    ],
];