<?php

namespace app\modules\postal\sender\Type;

class Pocztex2021NaDzisType extends Pocztex2021Type
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\SubPocztex2021NaDzisType>
     */
    private array $subPrzesylka;

    /**
     * @var null | int
     */
    private ?int $odleglosc = null;

    /**
     * @var null | \app\modules\postal\sender\Type\ObszarType
     */
    private ?\app\modules\postal\sender\Type\ObszarType $obszar = null;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\SubPocztex2021NaDzisType>
     */
    public function getSubPrzesylka() : array
    {
        return $this->subPrzesylka;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\SubPocztex2021NaDzisType> $subPrzesylka
     * @return static
     */
    public function withSubPrzesylka(array $subPrzesylka) : static
    {
        $new = clone $this;
        $new->subPrzesylka = $subPrzesylka;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getOdleglosc() : ?int
    {
        return $this->odleglosc;
    }

    /**
     * @param null | int $odleglosc
     * @return static
     */
    public function withOdleglosc(?int $odleglosc) : static
    {
        $new = clone $this;
        $new->odleglosc = $odleglosc;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\ObszarType
     */
    public function getObszar() : ?\app\modules\postal\sender\Type\ObszarType
    {
        return $this->obszar;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ObszarType $obszar
     * @return static
     */
    public function withObszar(?\app\modules\postal\sender\Type\ObszarType $obszar) : static
    {
        $new = clone $this;
        $new->obszar = $obszar;

        return $new;
    }
}

