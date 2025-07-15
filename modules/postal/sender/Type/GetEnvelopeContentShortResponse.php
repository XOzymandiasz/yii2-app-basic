<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEnvelopeContentShortResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\PrzesylkaShortType>
     */
    private array $przesylka;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\PrzesylkaShortType>
     */
    public function getPrzesylka() : array
    {
        return $this->przesylka;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\PrzesylkaShortType> $przesylka
     * @return static
     */
    public function withPrzesylka(array $przesylka) : static
    {
        $new = clone $this;
        $new->przesylka = $przesylka;

        return $new;
    }
}

