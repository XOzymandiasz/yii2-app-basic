<?php

namespace app\modules\postal\components;

interface ShipmentInterface
{
    public function getShipmentNumber(): string;

    public function getFinishedAt(): ?string;
}
