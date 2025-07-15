<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetKartyResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\KartaType>
     */
    private array $karta;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\KartaType>
     */
    public function getKarta() : array
    {
        return $this->karta;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\KartaType> $karta
     * @return static
     */
    public function withKarta(array $karta) : static
    {
        $new = clone $this;
        $new->karta = $karta;

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

