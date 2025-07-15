<?php

namespace app\modules\postal\sender\Type;

class DokumentyTowarzyszaceType
{
    /**
     * @var \app\modules\postal\sender\Type\DokumentTowarzyszacyRodzajEnum
     */
    private \app\modules\postal\sender\Type\DokumentTowarzyszacyRodzajEnum $rodzaj;

    /**
     * @var string
     */
    private string $numer;

    /**
     * @return \app\modules\postal\sender\Type\DokumentTowarzyszacyRodzajEnum
     */
    public function getRodzaj() : \app\modules\postal\sender\Type\DokumentTowarzyszacyRodzajEnum
    {
        return $this->rodzaj;
    }

    /**
     * @param \app\modules\postal\sender\Type\DokumentTowarzyszacyRodzajEnum $rodzaj
     * @return static
     */
    public function withRodzaj(\app\modules\postal\sender\Type\DokumentTowarzyszacyRodzajEnum $rodzaj) : static
    {
        $new = clone $this;
        $new->rodzaj = $rodzaj;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumer() : string
    {
        return $this->numer;
    }

    /**
     * @param string $numer
     * @return static
     */
    public function withNumer(string $numer) : static
    {
        $new = clone $this;
        $new->numer = $numer;

        return $new;
    }
}

