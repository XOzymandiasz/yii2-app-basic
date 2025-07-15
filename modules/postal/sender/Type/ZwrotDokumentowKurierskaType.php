<?php

namespace app\modules\postal\sender\Type;

class ZwrotDokumentowKurierskaType
{
    /**
     * @var null | \app\modules\postal\sender\Type\TerminZwrotDokumentowKurierskaType
     */
    private ?\app\modules\postal\sender\Type\TerminZwrotDokumentowKurierskaType $rodzajPocztex = null;

    /**
     * @var null | \app\modules\postal\sender\Type\RodzajListType
     */
    private ?\app\modules\postal\sender\Type\RodzajListType $rodzajList = null;

    /**
     * @return null | \app\modules\postal\sender\Type\TerminZwrotDokumentowKurierskaType
     */
    public function getRodzajPocztex() : ?\app\modules\postal\sender\Type\TerminZwrotDokumentowKurierskaType
    {
        return $this->rodzajPocztex;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\TerminZwrotDokumentowKurierskaType $rodzajPocztex
     * @return static
     */
    public function withRodzajPocztex(?\app\modules\postal\sender\Type\TerminZwrotDokumentowKurierskaType $rodzajPocztex) : static
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
}

