<?php

namespace app\modules\postal\sender\Type;

class PaletaType
{
    /**
     * @var null | \app\modules\postal\sender\Type\RodzajPaletyType
     */
    private ?\app\modules\postal\sender\Type\RodzajPaletyType $rodzajPalety = null;

    /**
     * @var null | int
     */
    private ?int $szerokosc = null;

    /**
     * @var null | string
     */
    private ?string $dlugosc = null;

    /**
     * @var null | string
     */
    private ?string $wysokosc = null;

    /**
     * @return null | \app\modules\postal\sender\Type\RodzajPaletyType
     */
    public function getRodzajPalety() : ?\app\modules\postal\sender\Type\RodzajPaletyType
    {
        return $this->rodzajPalety;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\RodzajPaletyType $rodzajPalety
     * @return static
     */
    public function withRodzajPalety(?\app\modules\postal\sender\Type\RodzajPaletyType $rodzajPalety) : static
    {
        $new = clone $this;
        $new->rodzajPalety = $rodzajPalety;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getSzerokosc() : ?int
    {
        return $this->szerokosc;
    }

    /**
     * @param null | int $szerokosc
     * @return static
     */
    public function withSzerokosc(?int $szerokosc) : static
    {
        $new = clone $this;
        $new->szerokosc = $szerokosc;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDlugosc() : ?string
    {
        return $this->dlugosc;
    }

    /**
     * @param null | string $dlugosc
     * @return static
     */
    public function withDlugosc(?string $dlugosc) : static
    {
        $new = clone $this;
        $new->dlugosc = $dlugosc;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWysokosc() : ?string
    {
        return $this->wysokosc;
    }

    /**
     * @param null | string $wysokosc
     * @return static
     */
    public function withWysokosc(?string $wysokosc) : static
    {
        $new = clone $this;
        $new->wysokosc = $wysokosc;

        return $new;
    }
}

