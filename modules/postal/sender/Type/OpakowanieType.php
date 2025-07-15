<?php

namespace app\modules\postal\sender\Type;

class OpakowanieType
{
    /**
     * @var null | string
     */
    private ?string $opakowanieGuid = null;

    /**
     * @var null | \app\modules\postal\sender\Type\TypOpakowanieType
     */
    private ?\app\modules\postal\sender\Type\TypOpakowanieType $typ = null;

    /**
     * @var null | string
     */
    private ?string $sygnatura = null;

    /**
     * @var null | int
     */
    private ?int $ilosc = null;

    /**
     * @var null | string
     */
    private ?string $numerOpakowaniaZbiorczego = null;

    /**
     * @return null | string
     */
    public function getOpakowanieGuid() : ?string
    {
        return $this->opakowanieGuid;
    }

    /**
     * @param null | string $opakowanieGuid
     * @return static
     */
    public function withOpakowanieGuid(?string $opakowanieGuid) : static
    {
        $new = clone $this;
        $new->opakowanieGuid = $opakowanieGuid;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\TypOpakowanieType
     */
    public function getTyp() : ?\app\modules\postal\sender\Type\TypOpakowanieType
    {
        return $this->typ;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\TypOpakowanieType $typ
     * @return static
     */
    public function withTyp(?\app\modules\postal\sender\Type\TypOpakowanieType $typ) : static
    {
        $new = clone $this;
        $new->typ = $typ;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSygnatura() : ?string
    {
        return $this->sygnatura;
    }

    /**
     * @param null | string $sygnatura
     * @return static
     */
    public function withSygnatura(?string $sygnatura) : static
    {
        $new = clone $this;
        $new->sygnatura = $sygnatura;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIlosc() : ?int
    {
        return $this->ilosc;
    }

    /**
     * @param null | int $ilosc
     * @return static
     */
    public function withIlosc(?int $ilosc) : static
    {
        $new = clone $this;
        $new->ilosc = $ilosc;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerOpakowaniaZbiorczego() : ?string
    {
        return $this->numerOpakowaniaZbiorczego;
    }

    /**
     * @param null | string $numerOpakowaniaZbiorczego
     * @return static
     */
    public function withNumerOpakowaniaZbiorczego(?string $numerOpakowaniaZbiorczego) : static
    {
        $new = clone $this;
        $new->numerOpakowaniaZbiorczego = $numerOpakowaniaZbiorczego;

        return $new;
    }
}

