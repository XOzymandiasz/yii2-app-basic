<?php

namespace app\modules\postal\sender\Type;

class DoreczenieType
{
    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $oczekiwanyTerminDoreczenia = null;

    /**
     * @var null | \app\modules\postal\sender\Type\OczekiwanaGodzinaDoreczeniaType
     */
    private ?\app\modules\postal\sender\Type\OczekiwanaGodzinaDoreczeniaType $oczekiwanaGodzinaDoreczenia = null;

    /**
     * @var null | bool
     */
    private ?bool $wSobote = null;

    /**
     * @var null | bool
     */
    private ?bool $w90Minut = null;

    /**
     * @var null | bool
     */
    private ?bool $wNiedzieleLubSwieto = null;

    /**
     * @var null | bool
     */
    private ?bool $doRakWlasnych = null;

    /**
     * @var null | bool
     */
    private ?bool $wGodzinachOd20Do7 = null;

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
     * @return null | \app\modules\postal\sender\Type\OczekiwanaGodzinaDoreczeniaType
     */
    public function getOczekiwanaGodzinaDoreczenia() : ?\app\modules\postal\sender\Type\OczekiwanaGodzinaDoreczeniaType
    {
        return $this->oczekiwanaGodzinaDoreczenia;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\OczekiwanaGodzinaDoreczeniaType $oczekiwanaGodzinaDoreczenia
     * @return static
     */
    public function withOczekiwanaGodzinaDoreczenia(?\app\modules\postal\sender\Type\OczekiwanaGodzinaDoreczeniaType $oczekiwanaGodzinaDoreczenia) : static
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
    public function getW90Minut() : ?bool
    {
        return $this->w90Minut;
    }

    /**
     * @param null | bool $w90Minut
     * @return static
     */
    public function withW90Minut(?bool $w90Minut) : static
    {
        $new = clone $this;
        $new->w90Minut = $w90Minut;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getWNiedzieleLubSwieto() : ?bool
    {
        return $this->wNiedzieleLubSwieto;
    }

    /**
     * @param null | bool $wNiedzieleLubSwieto
     * @return static
     */
    public function withWNiedzieleLubSwieto(?bool $wNiedzieleLubSwieto) : static
    {
        $new = clone $this;
        $new->wNiedzieleLubSwieto = $wNiedzieleLubSwieto;

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

    /**
     * @return null | bool
     */
    public function getWGodzinachOd20Do7() : ?bool
    {
        return $this->wGodzinachOd20Do7;
    }

    /**
     * @param null | bool $wGodzinachOd20Do7
     * @return static
     */
    public function withWGodzinachOd20Do7(?bool $wGodzinachOd20Do7) : static
    {
        $new = clone $this;
        $new->wGodzinachOd20Do7 = $wGodzinachOd20Do7;

        return $new;
    }
}

