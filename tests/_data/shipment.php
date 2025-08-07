<?php

use app\modules\postal\models\ShipmentDirectionInterface;
use app\modules\postal\models\ShipmentProviderInterface;

return [
    'shipment_1' => [
        'id' => 1,
        'number' => 'RR123456789PL',
        'guid' => 'guid-abc-123',
        'provider' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
        'direction' => ShipmentDirectionInterface::DIRECTION_IN,
        'content_id' => 1,
        'creator_id' => 1,
        'created_at' =>'2025-07-01 10:00:00',
        'updated_at' =>'2025-07-01 10:00:00',
        'finished_at' => '2025-08-01 10:00:00',
        'shipment_at' => '2025-08-01 12:00:00',
        'api_data' => null,
    ]
];