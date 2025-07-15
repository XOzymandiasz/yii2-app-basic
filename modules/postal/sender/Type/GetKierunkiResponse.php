<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetKierunkiResponse implements ResultInterface
{
    /**
     * @var array<int<0,999>, \app\modules\postal\sender\Type\KierunekType>
     */
    private array $kierunek;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return array<int<0,999>, \app\modules\postal\sender\Type\KierunekType>
     */
    public function getKierunek() : array
    {
        return $this->kierunek;
    }

    /**
     * @param array<int<0,999>, \app\modules\postal\sender\Type\KierunekType> $kierunek
     * @return static
     */
    public function withKierunek(array $kierunek) : static
    {
        $new = clone $this;
        $new->kierunek = $kierunek;

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

