<?php

class PocztaPolskaPrzesylkaFactory
{
    public static function create(ShipmentForm $form): PrzesylkaType
    {
        return match ($form->shipmentType) {
            ShipmentType::PRZESYLKA_POLECONA_KRAJOWA => (new PoleconaKrajowaBuilder($form))->build(),
            ShipmentType::PRZESYLKA_BIZNESOWA        => (new BiznesowaBuilder($form))->build(),
            ShipmentType::LIST_WARTOSCIOWY_KRAJOWY   => (new ListWartosciowyBuilder($form))->build(),
            ShipmentType::LIST_ZWYKLY_FIRMOWY        => (new ListZwyklyFirmowyBuilder($form))->build(),
            default => throw new InvalidArgumentException("Unsupported shipment type: {$form->shipmentType}"),
        };
    }
}