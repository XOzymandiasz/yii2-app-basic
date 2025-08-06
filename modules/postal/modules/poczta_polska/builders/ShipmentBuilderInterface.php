<?php

namespace app\modules\postal\modules\poczta_polska\builders;

use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType;

interface ShipmentBuilderInterface
{
    public function build(): PrzesylkaType;
}