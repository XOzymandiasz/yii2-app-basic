<?php

namespace app\modules\postal\sender\Type;

class GodzinyPracyType
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    private array $poniedzialek;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    private array $wtorek;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    private array $sroda;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    private array $czwartek;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    private array $piatek;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    private array $sobota;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    private array $niedziela;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    private array $robocze;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    private array $swieta;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    public function getPoniedzialek() : array
    {
        return $this->poniedzialek;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType> $poniedzialek
     * @return static
     */
    public function withPoniedzialek(array $poniedzialek) : static
    {
        $new = clone $this;
        $new->poniedzialek = $poniedzialek;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    public function getWtorek() : array
    {
        return $this->wtorek;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType> $wtorek
     * @return static
     */
    public function withWtorek(array $wtorek) : static
    {
        $new = clone $this;
        $new->wtorek = $wtorek;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    public function getSroda() : array
    {
        return $this->sroda;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType> $sroda
     * @return static
     */
    public function withSroda(array $sroda) : static
    {
        $new = clone $this;
        $new->sroda = $sroda;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    public function getCzwartek() : array
    {
        return $this->czwartek;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType> $czwartek
     * @return static
     */
    public function withCzwartek(array $czwartek) : static
    {
        $new = clone $this;
        $new->czwartek = $czwartek;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    public function getPiatek() : array
    {
        return $this->piatek;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType> $piatek
     * @return static
     */
    public function withPiatek(array $piatek) : static
    {
        $new = clone $this;
        $new->piatek = $piatek;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    public function getSobota() : array
    {
        return $this->sobota;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType> $sobota
     * @return static
     */
    public function withSobota(array $sobota) : static
    {
        $new = clone $this;
        $new->sobota = $sobota;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    public function getNiedziela() : array
    {
        return $this->niedziela;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType> $niedziela
     * @return static
     */
    public function withNiedziela(array $niedziela) : static
    {
        $new = clone $this;
        $new->niedziela = $niedziela;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    public function getRobocze() : array
    {
        return $this->robocze;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType> $robocze
     * @return static
     */
    public function withRobocze(array $robocze) : static
    {
        $new = clone $this;
        $new->robocze = $robocze;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType>
     */
    public function getSwieta() : array
    {
        return $this->swieta;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\GodzinyPracyOdDoType> $swieta
     * @return static
     */
    public function withSwieta(array $swieta) : static
    {
        $new = clone $this;
        $new->swieta = $swieta;

        return $new;
    }
}

