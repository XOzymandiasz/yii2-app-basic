<?php

namespace app\modules\postal\sender\Type;

class SzczegolyDeklaracjiCelnejType
{
    /**
     * @var null | string
     */
    private ?string $zawartosc = null;

    /**
     * @var null | float
     */
    private ?float $ilosc = null;

    /**
     * @var null | int
     */
    private ?int $masa = null;

    /**
     * @var null | int
     */
    private ?int $wartosc = null;

    /**
     * @var null | string
     */
    private ?string $numerTaryfowy = null;

    /**
     * @var null | string
     */
    private ?string $krajPochodzenia = null;

    /**
     * @return null | string
     */
    public function getZawartosc() : ?string
    {
        return $this->zawartosc;
    }

    /**
     * @param null | string $zawartosc
     * @return static
     */
    public function withZawartosc(?string $zawartosc) : static
    {
        $new = clone $this;
        $new->zawartosc = $zawartosc;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getIlosc() : ?float
    {
        return $this->ilosc;
    }

    /**
     * @param null | float $ilosc
     * @return static
     */
    public function withIlosc(?float $ilosc) : static
    {
        $new = clone $this;
        $new->ilosc = $ilosc;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getMasa() : ?int
    {
        return $this->masa;
    }

    /**
     * @param null | int $masa
     * @return static
     */
    public function withMasa(?int $masa) : static
    {
        $new = clone $this;
        $new->masa = $masa;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getWartosc() : ?int
    {
        return $this->wartosc;
    }

    /**
     * @param null | int $wartosc
     * @return static
     */
    public function withWartosc(?int $wartosc) : static
    {
        $new = clone $this;
        $new->wartosc = $wartosc;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerTaryfowy() : ?string
    {
        return $this->numerTaryfowy;
    }

    /**
     * @param null | string $numerTaryfowy
     * @return static
     */
    public function withNumerTaryfowy(?string $numerTaryfowy) : static
    {
        $new = clone $this;
        $new->numerTaryfowy = $numerTaryfowy;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getKrajPochodzenia() : ?string
    {
        return $this->krajPochodzenia;
    }

    /**
     * @param null | string $krajPochodzenia
     * @return static
     */
    public function withKrajPochodzenia(?string $krajPochodzenia) : static
    {
        $new = clone $this;
        $new->krajPochodzenia = $krajPochodzenia;

        return $new;
    }
}

