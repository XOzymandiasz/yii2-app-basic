<?php

namespace app\modules\postal\sender\Type;

class PotwierdzenieOdbioruPocztex2021Type
{
    /**
     * @var int
     */
    private int $ilosc;

    /**
     * @var \app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum
     */
    private \app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum $sposobPotwierdzeniaOdbioru;

    /**
     * @return int
     */
    public function getIlosc() : int
    {
        return $this->ilosc;
    }

    /**
     * @param int $ilosc
     * @return static
     */
    public function withIlosc(int $ilosc) : static
    {
        $new = clone $this;
        $new->ilosc = $ilosc;

        return $new;
    }

    /**
     * @return \app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum
     */
    public function getSposobPotwierdzeniaOdbioru() : \app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum
    {
        return $this->sposobPotwierdzeniaOdbioru;
    }

    /**
     * @param \app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum $sposobPotwierdzeniaOdbioru
     * @return static
     */
    public function withSposobPotwierdzeniaOdbioru(\app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum $sposobPotwierdzeniaOdbioru) : static
    {
        $new = clone $this;
        $new->sposobPotwierdzeniaOdbioru = $sposobPotwierdzeniaOdbioru;

        return $new;
    }
}

