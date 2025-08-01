<?php

namespace app\modules\postal\builders;

use app\modules\postal\sender\StructType\PrzesylkaType;

interface ShipmentBuilderInterface
{
    public function build(): PrzesylkaType;
}