<?php

namespace app\modules\postal\sender\Type;

enum ShipmentChannelPocztex2021Enum: string {
    case PP = 'PP';
    case APM = 'APM';
    case COURIER = 'COURIER';
    case PARTNER_SHIPMENT_POINT = 'PARTNER_SHIPMENT_POINT';
}
