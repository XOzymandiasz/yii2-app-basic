<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEnvelopeStatusResponse implements ResultInterface
{
    /**
     * @var null | \app\modules\postal\sender\Type\EnvelopeStatusType
     */
    private ?\app\modules\postal\sender\Type\EnvelopeStatusType $envelopeStatus = null;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return null | \app\modules\postal\sender\Type\EnvelopeStatusType
     */
    public function getEnvelopeStatus() : ?\app\modules\postal\sender\Type\EnvelopeStatusType
    {
        return $this->envelopeStatus;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\EnvelopeStatusType $envelopeStatus
     * @return static
     */
    public function withEnvelopeStatus(?\app\modules\postal\sender\Type\EnvelopeStatusType $envelopeStatus) : static
    {
        $new = clone $this;
        $new->envelopeStatus = $envelopeStatus;

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

