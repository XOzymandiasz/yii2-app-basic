<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetReklamacjeResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ReklamacjaRozpatrzonaType>
     */
    private array $reklamacja;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\ReklamacjaRozpatrzonaType>
     */
    public function getReklamacja() : array
    {
        return $this->reklamacja;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\ReklamacjaRozpatrzonaType> $reklamacja
     * @return static
     */
    public function withReklamacja(array $reklamacja) : static
    {
        $new = clone $this;
        $new->reklamacja = $reklamacja;

        return $new;
    }
}

