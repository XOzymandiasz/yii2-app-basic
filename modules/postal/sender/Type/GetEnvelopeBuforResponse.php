<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEnvelopeBuforResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\PrzesylkaType>
     */
    private array $przesylka;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\PrzesylkaType>
     */
    public function getPrzesylka() : array
    {
        return $this->przesylka;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\PrzesylkaType> $przesylka
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
}

