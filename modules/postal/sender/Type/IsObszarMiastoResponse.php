<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class IsObszarMiastoResponse implements ResultInterface
{
    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ObszarAdresowyResponseType>
     */
    private array $obszarAdresowy;

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ObszarAdresowyResponseType>
     */
    public function getObszarAdresowy() : array
    {
        return $this->obszarAdresowy;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ObszarAdresowyResponseType> $obszarAdresowy
     * @return static
     */
    public function withObszarAdresowy(array $obszarAdresowy) : static
    {
        $new = clone $this;
        $new->obszarAdresowy = $obszarAdresowy;

        return $new;
    }
}

