<?php

namespace app\modules\postal\sender\Type;

class PotwierdzenieOdbioruType
{
    /**
     * @var null | int
     */
    private ?int $ilosc = null;

    /**
     * @var null | \app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaOdbioruType
     */
    private ?\app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaOdbioruType $sposob = null;

    /**
     * @return null | int
     */
    public function getIlosc() : ?int
    {
        return $this->ilosc;
    }

    /**
     * @param null | int $ilosc
     * @return static
     */
    public function withIlosc(?int $ilosc) : static
    {
        $new = clone $this;
        $new->ilosc = $ilosc;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaOdbioruType
     */
    public function getSposob() : ?\app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaOdbioruType
    {
        return $this->sposob;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaOdbioruType $sposob
     * @return static
     */
    public function withSposob(?\app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaOdbioruType $sposob) : static
    {
        $new = clone $this;
        $new->sposob = $sposob;

        return $new;
    }
}

