<?php

namespace app\modules\postal\sender\Type;

class ZwrotDokumentowType
{
    /**
     * @var null | \app\modules\postal\sender\Type\TerminRodzajType
     */
    private ?\app\modules\postal\sender\Type\TerminRodzajType $rodzajPocztex = null;

    /**
     * @var null | \app\modules\postal\sender\Type\RodzajListType
     */
    private ?\app\modules\postal\sender\Type\RodzajListType $rodzajList = null;

    /**
     * @var null | int
     */
    private ?int $odleglosc = null;

    /**
     * @return null | \app\modules\postal\sender\Type\TerminRodzajType
     */
    public function getRodzajPocztex() : ?\app\modules\postal\sender\Type\TerminRodzajType
    {
        return $this->rodzajPocztex;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\TerminRodzajType $rodzajPocztex
     * @return static
     */
    public function withRodzajPocztex(?\app\modules\postal\sender\Type\TerminRodzajType $rodzajPocztex) : static
    {
        $new = clone $this;
        $new->rodzajPocztex = $rodzajPocztex;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\RodzajListType
     */
    public function getRodzajList() : ?\app\modules\postal\sender\Type\RodzajListType
    {
        return $this->rodzajList;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\RodzajListType $rodzajList
     * @return static
     */
    public function withRodzajList(?\app\modules\postal\sender\Type\RodzajListType $rodzajList) : static
    {
        $new = clone $this;
        $new->rodzajList = $rodzajList;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getOdleglosc() : ?int
    {
        return $this->odleglosc;
    }

    /**
     * @param null | int $odleglosc
     * @return static
     */
    public function withOdleglosc(?int $odleglosc) : static
    {
        $new = clone $this;
        $new->odleglosc = $odleglosc;

        return $new;
    }
}

