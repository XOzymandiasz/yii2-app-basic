<?php

use app\modules\postal\forms\ElektronicznyNadawcaShipmentForm;
use app\modules\postal\sender\EnumType\ShipmentType;
use app\modules\postal\sender\StructType\PrzesylkaType;

class PocztaPolskaCreateShipmentFactory
{
    public static function create(ElektronicznyNadawcaShipmentForm $form): PrzesylkaType
    {
        return match ($form->shipmentType) {
            ShipmentType::VALUE_PRZESYLKA_POLECONA_KRAJOWA => (new PoleconaKrajowaBuilder($form))->build(),
            //ShipmentType::VALUE_PRZESYLKA_BIZNESOWA        => (new BiznesowaBuilder($form))->build(),
            //ShipmentType::VALUE_LIST_WARTOSCIOWY_KRAJOWY   => (new ListWartosciowyBuilder($form))->build(),
            //ShipmentType::VALUE_LIST_ZWYKLY_FIRMOWY        => (new ListZwyklyFirmowyBuilder($form))->build(),
            default => throw new InvalidArgumentException("Unsupported shipment type: {$form->shipmentType}"),
        };
    }
}