<?php

namespace app\modules\postal\models;

interface ShipmentDirectionInterface
{
    public const DIRECTION_IN = 'IN';
    public const DIRECTION_OUT = 'OUT';

    public function getDirection(): string;

    public function getDirectionName(): string;

    public static function getDirectionsNames();
}
