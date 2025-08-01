<?php

namespace app\modules\postal\builders;

use app\modules\postal\forms\PocztaPolskaShipmentForm;
use app\modules\postal\Module;
use app\modules\postal\sender\StructType\PrzesylkaType;
use InvalidArgumentException;

class PocztaPolskaCreateShipmentFactory
{
    public static function create(PocztaPolskaShipmentForm $form): PrzesylkaType
    {
        return match ($form->isRegistered) {
            true => (new PoleconaKrajowaBuilder($form))->build(),

            default => throw new InvalidArgumentException(
                Module::t('poczta-polska', "Unsupported shipment type: {$form->shipmentType}")
            ),
        };
    }
}
