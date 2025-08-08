<?php

namespace app\modules\postal\modules\poczta_polska\builders;

use app\modules\postal\Module;
use app\modules\postal\modules\poczta_polska\forms\ShipmentForm;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType;
use InvalidArgumentException;

class PocztaPolskaCreateShipmentFactory
{
    public static function create(ShipmentForm $form): PrzesylkaType
    {
        return match ($form->isRegistered) {
            true => (new PoleconaKrajowaBuilder($form))->build(),

            default => throw new InvalidArgumentException(
                Module::t('poczta-polska', "Unsupported shipment type: {$form->shipmentType}")
            ),
        };
    }
}
