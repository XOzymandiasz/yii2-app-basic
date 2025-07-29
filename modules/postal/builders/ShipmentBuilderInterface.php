<?php

namespace app\modules\postal\components;

use app\modules\postal\sender\StructType\PrzesylkaType;

interface ShipmentBuilderInterface
{
    public function build(): PrzesylkaType;
}