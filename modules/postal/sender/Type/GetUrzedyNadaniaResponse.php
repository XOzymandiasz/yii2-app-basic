<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUrzedyNadaniaResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\UrzadNadaniaFullType>
     */
    private array $urzedyNadania;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\UrzadNadaniaFullType>
     */
    public function getUrzedyNadania() : array
    {
        return $this->urzedyNadania;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\UrzadNadaniaFullType> $urzedyNadania
     * @return static
     */
    public function withUrzedyNadania(array $urzedyNadania) : static
    {
        $new = clone $this;
        $new->urzedyNadania = $urzedyNadania;

        return $new;
    }
}

