<?php
namespace app\modules\postal\sender\EnumType;


use WsdlToPhp\PackageBase\AbstractStructEnumBase;

class ShipmentType extends AbstractStructEnumBase
{
    public const VALUE_PRZESYLKA_POLECONA_KRAJOWA = "przesylkaPoleconaKrajowa";

    public const VALUE_LIST_WARTOSCIOWY_KRAJOWY = "listWartosciowyKrajowy";

    public const VALUE_LIST_ZWYKLY_FIRMOWY = "listZwyklyFirmowy";

    public const VALUE_PRZESYLKA_BIZNESOWA = "przesylkaBiznesowa";

    /**
     * Return allowed values
     * @return string[]
     * @uses self::VALUE_PRZESYLKA_POLECONA_KRAJOWA
     * @uses self::VALUE_LIST_WARTOSCIOWY_KRAJOWY
     * @uses self::VALUE_LIST_ZWYKLY_FIRMOWY
     * @uses self::VALUE_PRZESYLKA_BIZNESOWA
    */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PRZESYLKA_POLECONA_KRAJOWA,
            self::VALUE_LIST_WARTOSCIOWY_KRAJOWY,
            self::VALUE_LIST_ZWYKLY_FIRMOWY,
            self::VALUE_PRZESYLKA_BIZNESOWA
        ];
    }
}
