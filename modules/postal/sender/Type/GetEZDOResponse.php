<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEZDOResponse implements ResultInterface
{
    /**
     * @var \app\modules\postal\sender\Type\AdresType
     */
    private \app\modules\postal\sender\Type\AdresType $adres;

    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\EZDOPrzesylkaType>
     */
    private array $przesylka;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @var null | string
     */
    private ?string $numerKD = null;

    /**
     * @var null | string
     */
    private ?string $numerEZDO = null;

    /**
     * @return \app\modules\postal\sender\Type\AdresType
     */
    public function getAdres() : \app\modules\postal\sender\Type\AdresType
    {
        return $this->adres;
    }

    /**
     * @param \app\modules\postal\sender\Type\AdresType $adres
     * @return static
     */
    public function withAdres(\app\modules\postal\sender\Type\AdresType $adres) : static
    {
        $new = clone $this;
        $new->adres = $adres;

        return $new;
    }

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\EZDOPrzesylkaType>
     */
    public function getPrzesylka() : array
    {
        return $this->przesylka;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\EZDOPrzesylkaType> $przesylka
     * @return static
     */
    public function withPrzesylka(array $przesylka) : static
    {
        $new = clone $this;
        $new->przesylka = $przesylka;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    public function getError() : array
    {
        return $this->error;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\ErrorType> $error
     * @return static
     */
    public function withError(array $error) : static
    {
        $new = clone $this;
        $new->error = $error;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerKD() : ?string
    {
        return $this->numerKD;
    }

    /**
     * @param null | string $numerKD
     * @return static
     */
    public function withNumerKD(?string $numerKD) : static
    {
        $new = clone $this;
        $new->numerKD = $numerKD;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerEZDO() : ?string
    {
        return $this->numerEZDO;
    }

    /**
     * @param null | string $numerEZDO
     * @return static
     */
    public function withNumerEZDO(?string $numerEZDO) : static
    {
        $new = clone $this;
        $new->numerEZDO = $numerEZDO;

        return $new;
    }
}

