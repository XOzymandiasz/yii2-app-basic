<?php

namespace app\modules\postal\sender\Type;

class ZwrotDokumentowBiznesowaType
{
    /**
     * @var \app\modules\postal\sender\Type\TerminZwrotDokumentowBiznesowaType
     */
    private \app\modules\postal\sender\Type\TerminZwrotDokumentowBiznesowaType $rodzaj;

    /**
     * @var null | int
     */
    private ?int $idDokumentyZwrotneAdresy = null;

    /**
     * @return \app\modules\postal\sender\Type\TerminZwrotDokumentowBiznesowaType
     */
    public function getRodzaj() : \app\modules\postal\sender\Type\TerminZwrotDokumentowBiznesowaType
    {
        return $this->rodzaj;
    }

    /**
     * @param \app\modules\postal\sender\Type\TerminZwrotDokumentowBiznesowaType $rodzaj
     * @return static
     */
    public function withRodzaj(\app\modules\postal\sender\Type\TerminZwrotDokumentowBiznesowaType $rodzaj) : static
    {
        $new = clone $this;
        $new->rodzaj = $rodzaj;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdDokumentyZwrotneAdresy() : ?int
    {
        return $this->idDokumentyZwrotneAdresy;
    }

    /**
     * @param null | int $idDokumentyZwrotneAdresy
     * @return static
     */
    public function withIdDokumentyZwrotneAdresy(?int $idDokumentyZwrotneAdresy) : static
    {
        $new = clone $this;
        $new->idDokumentyZwrotneAdresy = $idDokumentyZwrotneAdresy;

        return $new;
    }
}

