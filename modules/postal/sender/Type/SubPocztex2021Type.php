<?php

namespace app\modules\postal\sender\Type;

abstract class SubPocztex2021Type extends PrzesylkaType
{
    /**
     * @var null | \app\modules\postal\sender\Type\PobranieType
     */
    private ?\app\modules\postal\sender\Type\PobranieType $pobranie = null;

    /**
     * @var null | \app\modules\postal\sender\Type\UbezpieczenieType
     */
    private ?\app\modules\postal\sender\Type\UbezpieczenieType $ubezpieczenie = null;

    /**
     * @var null | string
     */
    private ?string $numerNadania = null;

    /**
     * masa przesyłki podana w gramach
     *
     * @var null | int
     */
    private ?int $masa = null;

    /**
     * zadeklarowana wartość przesyłki w groszach
     *
     * @var null | int
     */
    private ?int $wartosc = null;

    /**
     * @var null | bool
     */
    private ?bool $ostroznie = null;

    /**
     * @var null | bool
     */
    private ?bool $ponadgabaryt = null;

    /**
     * Format przesyłki:
     *  S -
     *  M -
     *  L -
     *  XL -
     *  2XL -
     *
     * @var null | \app\modules\postal\sender\Type\FormatPocztex2021Type
     */
    private ?\app\modules\postal\sender\Type\FormatPocztex2021Type $format = null;

    /**
     * @var null | string
     */
    private ?string $numerPrzesylkiKlienta = null;

    /**
     * @return null | \app\modules\postal\sender\Type\PobranieType
     */
    public function getPobranie() : ?\app\modules\postal\sender\Type\PobranieType
    {
        return $this->pobranie;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PobranieType $pobranie
     * @return static
     */
    public function withPobranie(?\app\modules\postal\sender\Type\PobranieType $pobranie) : static
    {
        $new = clone $this;
        $new->pobranie = $pobranie;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\UbezpieczenieType
     */
    public function getUbezpieczenie() : ?\app\modules\postal\sender\Type\UbezpieczenieType
    {
        return $this->ubezpieczenie;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\UbezpieczenieType $ubezpieczenie
     * @return static
     */
    public function withUbezpieczenie(?\app\modules\postal\sender\Type\UbezpieczenieType $ubezpieczenie) : static
    {
        $new = clone $this;
        $new->ubezpieczenie = $ubezpieczenie;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerNadania() : ?string
    {
        return $this->numerNadania;
    }

    /**
     * @param null | string $numerNadania
     * @return static
     */
    public function withNumerNadania(?string $numerNadania) : static
    {
        $new = clone $this;
        $new->numerNadania = $numerNadania;

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
     * @return null | bool
     */
    public function getOstroznie() : ?bool
    {
        return $this->ostroznie;
    }

    /**
     * @param null | bool $ostroznie
     * @return static
     */
    public function withOstroznie(?bool $ostroznie) : static
    {
        $new = clone $this;
        $new->ostroznie = $ostroznie;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPonadgabaryt() : ?bool
    {
        return $this->ponadgabaryt;
    }

    /**
     * @param null | bool $ponadgabaryt
     * @return static
     */
    public function withPonadgabaryt(?bool $ponadgabaryt) : static
    {
        $new = clone $this;
        $new->ponadgabaryt = $ponadgabaryt;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\FormatPocztex2021Type
     */
    public function getFormat() : ?\app\modules\postal\sender\Type\FormatPocztex2021Type
    {
        return $this->format;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\FormatPocztex2021Type $format
     * @return static
     */
    public function withFormat(?\app\modules\postal\sender\Type\FormatPocztex2021Type $format) : static
    {
        $new = clone $this;
        $new->format = $format;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerPrzesylkiKlienta() : ?string
    {
        return $this->numerPrzesylkiKlienta;
    }

    /**
     * @param null | string $numerPrzesylkiKlienta
     * @return static
     */
    public function withNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta) : static
    {
        $new = clone $this;
        $new->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;

        return $new;
    }
}

