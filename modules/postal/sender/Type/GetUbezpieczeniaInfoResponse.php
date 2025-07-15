<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUbezpieczeniaInfoResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\UbezpieczeniaInfoType>
     */
    private array $poziomyUbezpieczenia;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\UbezpieczeniaInfoType>
     */
    public function getPoziomyUbezpieczenia() : array
    {
        return $this->poziomyUbezpieczenia;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\UbezpieczeniaInfoType> $poziomyUbezpieczenia
     * @return static
     */
    public function withPoziomyUbezpieczenia(array $poziomyUbezpieczenia) : static
    {
        $new = clone $this;
        $new->poziomyUbezpieczenia = $poziomyUbezpieczenia;

        return $new;
    }
}

