<?php

namespace app\modules\postal\modules\poczta_polska\components;

interface ShipmentTrackerInterface
{
    public function checkShipment(string $number): ?ShipmentInterface;
}
