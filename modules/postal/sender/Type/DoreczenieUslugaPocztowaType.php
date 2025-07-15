<?php

namespace app\modules\postal\sender\Type;

class DoreczenieUslugaPocztowaType
{
    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $oczekiwanyTerminDoreczenia = null;

    /**
     * @var null | \app\modules\postal\sender\Type\OczekiwanaGodzinaDoreczeniaUslugiType
     */
    private ?\app\modules\postal\sender\Type\OczekiwanaGodzinaDoreczeniaUslugiType $oczekiwanaGodzinaDoreczenia = null;

    /**
     * @var null | bool
     */
    private ?bool $wSobote = null;

    /**
     * @var null | bool
     */
    private ?bool $doRakWlasnych = null;

    /**
     * @return null | \DateTimeInterface
     */
    public function getOczekiwanyTerminDoreczenia() : ?\DateTimeInterface
    {
        return $this->oczekiwanyTerminDoreczenia;
    }

    /**
     * @param null | \DateTimeInterface $oczekiwanyTerminDoreczenia
     * @return static
     */
    public function withOczekiwanyTerminDoreczenia(?\DateTimeInterface $oczekiwanyTerminDoreczenia) : static
    {
        $new = clone $this;
        $new->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\OczekiwanaGodzinaDoreczeniaUslugiType
     */
    public function getOczekiwanaGodzinaDoreczenia() : ?\app\modules\postal\sender\Type\OczekiwanaGodzinaDoreczeniaUslugiType
    {
        return $this->oczekiwanaGodzinaDoreczenia;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\OczekiwanaGodzinaDoreczeniaUslugiType $oczekiwanaGodzinaDoreczenia
     * @return static
     */
    public function withOczekiwanaGodzinaDoreczenia(?\app\modules\postal\sender\Type\OczekiwanaGodzinaDoreczeniaUslugiType $oczekiwanaGodzinaDoreczenia) : static
    {
        $new = clone $this;
        $new->oczekiwanaGodzinaDoreczenia = $oczekiwanaGodzinaDoreczenia;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getWSobote() : ?bool
    {
        return $this->wSobote;
    }

    /**
     * @param null | bool $wSobote
     * @return static
     */
    public function withWSobote(?bool $wSobote) : static
    {
        $new = clone $this;
        $new->wSobote = $wSobote;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getDoRakWlasnych() : ?bool
    {
        return $this->doRakWlasnych;
    }

    /**
     * @param null | bool $doRakWlasnych
     * @return static
     */
    public function withDoRakWlasnych(?bool $doRakWlasnych) : static
    {
        $new = clone $this;
        $new->doRakWlasnych = $doRakWlasnych;

        return $new;
    }
}

