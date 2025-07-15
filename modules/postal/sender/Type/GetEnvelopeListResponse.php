<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEnvelopeListResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\EnvelopeInfoType>
     */
    private array $envelopes;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\EnvelopeInfoType>
     */
    public function getEnvelopes() : array
    {
        return $this->envelopes;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\EnvelopeInfoType> $envelopes
     * @return static
     */
    public function withEnvelopes(array $envelopes) : static
    {
        $new = clone $this;
        $new->envelopes = $envelopes;

        return $new;
    }
}

