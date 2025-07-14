<?php

namespace app\modules\postal\components;

interface ShipmentTrackerInterface
{
    public function checkShipment(string $number): ?ShipmentInterface;
}
