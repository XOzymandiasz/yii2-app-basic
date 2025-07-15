<?php

namespace app\modules\postal\sender\Type;

class PobranieType
{
    /**
     * @var null | \app\modules\postal\sender\Type\SposobPobraniaType
     */
    private ?\app\modules\postal\sender\Type\SposobPobraniaType $sposobPobrania = null;

    /**
     * @var null | int
     */
    private ?int $kwotaPobrania = null;

    /**
     * @var null | string
     */
    private ?string $nrb = null;

    /**
     * @var null | string
     */
    private ?string $tytulem = null;

    /**
     * @var null | bool
     */
    private ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;

    /**
     * @return null | \app\modules\postal\sender\Type\SposobPobraniaType
     */
    public function getSposobPobrania() : ?\app\modules\postal\sender\Type\SposobPobraniaType
    {
        return $this->sposobPobrania;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\SposobPobraniaType $sposobPobrania
     * @return static
     */
    public function withSposobPobrania(?\app\modules\postal\sender\Type\SposobPobraniaType $sposobPobrania) : static
    {
        $new = clone $this;
        $new->sposobPobrania = $sposobPobrania;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getKwotaPobrania() : ?int
    {
        return $this->kwotaPobrania;
    }

    /**
     * @param null | int $kwotaPobrania
     * @return static
     */
    public function withKwotaPobrania(?int $kwotaPobrania) : static
    {
        $new = clone $this;
        $new->kwotaPobrania = $kwotaPobrania;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNrb() : ?string
    {
        return $this->nrb;
    }

    /**
     * @param null | string $nrb
     * @return static
     */
    public function withNrb(?string $nrb) : static
    {
        $new = clone $this;
        $new->nrb = $nrb;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTytulem() : ?string
    {
        return $this->tytulem;
    }

    /**
     * @param null | string $tytulem
     * @return static
     */
    public function withTytulem(?string $tytulem) : static
    {
        $new = clone $this;
        $new->tytulem = $tytulem;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce() : ?bool
    {
        return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * @param null | bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @return static
     */
    public function withSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce) : static
    {
        $new = clone $this;
        $new->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;

        return $new;
    }
}

