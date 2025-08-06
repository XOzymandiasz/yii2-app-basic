<?php

namespace app\modules\postal\modules\poczta_polska\components;

interface ShipmentInterface
{
    public function getShipmentNumber(): string;

    public function getFinishedAt(): ?string;
}
