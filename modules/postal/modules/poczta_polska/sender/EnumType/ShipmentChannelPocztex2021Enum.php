<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for shipmentChannelPocztex2021Enum EnumType
 * @subpackage Enumerations
 */
class ShipmentChannelPocztex2021Enum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PP'
     * @return string 'PP'
     */
    const VALUE_PP = 'PP';
    /**
     * Constant for value 'APM'
     * @return string 'APM'
     */
    const VALUE_APM = 'APM';
    /**
     * Constant for value 'COURIER'
     * @return string 'COURIER'
     */
    const VALUE_COURIER = 'COURIER';
    /**
     * Constant for value 'PARTNER_SHIPMENT_POINT'
     * @return string 'PARTNER_SHIPMENT_POINT'
     */
    const VALUE_PARTNER_SHIPMENT_POINT = 'PARTNER_SHIPMENT_POINT';
    /**
     * Return allowed values
     * @uses self::VALUE_PP
     * @uses self::VALUE_APM
     * @uses self::VALUE_COURIER
     * @uses self::VALUE_PARTNER_SHIPMENT_POINT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PP,
            self::VALUE_APM,
            self::VALUE_COURIER,
            self::VALUE_PARTNER_SHIPMENT_POINT,
        ];
    }
}
