<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class IsMiejscowaResponse implements ResultInterface
{
    /**
     * @var non-empty-array<int<0,499>, \app\modules\postal\sender\Type\TrasaResponseType>
     */
    private array $trasaResponse;

    /**
     * @return non-empty-array<int<0,499>, \app\modules\postal\sender\Type\TrasaResponseType>
     */
    public function getTrasaResponse() : array
    {
        return $this->trasaResponse;
    }

    /**
     * @param non-empty-array<int<0,499>, \app\modules\postal\sender\Type\TrasaResponseType> $trasaResponse
     * @return static
     */
    public function withTrasaResponse(array $trasaResponse) : static
    {
        $new = clone $this;
        $new->trasaResponse = $trasaResponse;

        return $new;
    }
}

