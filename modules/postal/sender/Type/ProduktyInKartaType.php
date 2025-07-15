<?php

namespace app\modules\postal\sender\Type;

class ProduktyInKartaType
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ProduktInKartaType>
     */
    private array $produktInKarta;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\ProduktInKartaType>
     */
    public function getProduktInKarta() : array
    {
        return $this->produktInKarta;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\ProduktInKartaType> $produktInKarta
     * @return static
     */
    public function withProduktInKarta(array $produktInKarta) : static
    {
        $new = clone $this;
        $new->produktInKarta = $produktInKarta;

        return $new;
    }
}

