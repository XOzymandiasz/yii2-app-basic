<?php

namespace app\modules\postal\sender\Type;

class EZDOPrzesylkaType
{
    /**
     * @var null | string
     */
    private ?string $numerNadania = null;

    /**
     * @var null | string
     */
    private ?string $rodzaj = null;

    /**
     * @var null | \app\modules\postal\sender\Type\KategoriaType
     */
    private ?\app\modules\postal\sender\Type\KategoriaType $kategoria = null;

    /**
     * @var null | int
     */
    private ?int $masa = null;

    /**
     * @var null | int
     */
    private ?int $wartosc = null;

    /**
     * @var null | int
     */
    private ?int $kwotaPobrania = null;

    /**
     * @var null | string
     */
    private ?string $numerWewnetrznyPrzesylki = null;

    /**
     * @var null | string
     */
    private ?string $zwrot = null;

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
     * @return null | string
     */
    public function getRodzaj() : ?string
    {
        return $this->rodzaj;
    }

    /**
     * @param null | string $rodzaj
     * @return static
     */
    public function withRodzaj(?string $rodzaj) : static
    {
        $new = clone $this;
        $new->rodzaj = $rodzaj;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\KategoriaType
     */
    public function getKategoria() : ?\app\modules\postal\sender\Type\KategoriaType
    {
        return $this->kategoria;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\KategoriaType $kategoria
     * @return static
     */
    public function withKategoria(?\app\modules\postal\sender\Type\KategoriaType $kategoria) : static
    {
        $new = clone $this;
        $new->kategoria = $kategoria;

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
    public function getNumerWewnetrznyPrzesylki() : ?string
    {
        return $this->numerWewnetrznyPrzesylki;
    }

    /**
     * @param null | string $numerWewnetrznyPrzesylki
     * @return static
     */
    public function withNumerWewnetrznyPrzesylki(?string $numerWewnetrznyPrzesylki) : static
    {
        $new = clone $this;
        $new->numerWewnetrznyPrzesylki = $numerWewnetrznyPrzesylki;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getZwrot() : ?string
    {
        return $this->zwrot;
    }

    /**
     * @param null | string $zwrot
     * @return static
     */
    public function withZwrot(?string $zwrot) : static
    {
        $new = clone $this;
        $new->zwrot = $zwrot;

        return $new;
    }
}

