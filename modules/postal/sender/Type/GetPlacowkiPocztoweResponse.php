<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPlacowkiPocztoweResponse implements ResultInterface
{
    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\PlacowkaPocztowaType>
     */
    private array $placowka;

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\PlacowkaPocztowaType>
     */
    public function getPlacowka() : array
    {
        return $this->placowka;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\PlacowkaPocztowaType> $placowka
     * @return static
     */
    public function withPlacowka(array $placowka) : static
    {
        $new = clone $this;
        $new->placowka = $placowka;

        return $new;
    }
}

