<?php

namespace app\modules\postal\sender\Type;

class PotwierdzenieOdbioruBiznesowaType
{
    /**
     * @var null | int
     */
    private ?int $ilosc = null;

    /**
     * @var \app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaBiznesowaType
     */
    private \app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaBiznesowaType $sposob;

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
     * @return \app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaBiznesowaType
     */
    public function getSposob() : \app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaBiznesowaType
    {
        return $this->sposob;
    }

    /**
     * @param \app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaBiznesowaType $sposob
     * @return static
     */
    public function withSposob(\app\modules\postal\sender\Type\SposobPrzekazaniaPotwierdzeniaBiznesowaType $sposob) : static
    {
        $new = clone $this;
        $new->sposob = $sposob;

        return $new;
    }
}

