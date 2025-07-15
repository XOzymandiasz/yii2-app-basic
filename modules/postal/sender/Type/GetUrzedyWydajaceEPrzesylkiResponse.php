<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUrzedyWydajaceEPrzesylkiResponse implements ResultInterface
{
    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\UrzadWydaniaEPrzesylkiType>
     */
    private array $urzadWydaniaEPrzesylki;

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\UrzadWydaniaEPrzesylkiType>
     */
    public function getUrzadWydaniaEPrzesylki() : array
    {
        return $this->urzadWydaniaEPrzesylki;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\UrzadWydaniaEPrzesylkiType> $urzadWydaniaEPrzesylki
     * @return static
     */
    public function withUrzadWydaniaEPrzesylki(array $urzadWydaniaEPrzesylki) : static
    {
        $new = clone $this;
        $new->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;

        return $new;
    }
}

