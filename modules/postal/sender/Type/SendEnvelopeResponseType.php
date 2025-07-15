<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendEnvelopeResponseType implements ResultInterface
{
    /**
     * @var null | int
     */
    private ?int $idEnvelope = null;

    /**
     * @var null | \app\modules\postal\sender\Type\EnvelopeStatusType
     */
    private ?\app\modules\postal\sender\Type\EnvelopeStatusType $envelopeStatus = null;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @var null | string
     */
    private ?string $envelopeFilename = null;

    /**
     * @return null | int
     */
    public function getIdEnvelope() : ?int
    {
        return $this->idEnvelope;
    }

    /**
     * @param null | int $idEnvelope
     * @return static
     */
    public function withIdEnvelope(?int $idEnvelope) : static
    {
        $new = clone $this;
        $new->idEnvelope = $idEnvelope;

        return $new;
    }

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

    /**
     * @return null | string
     */
    public function getEnvelopeFilename() : ?string
    {
        return $this->envelopeFilename;
    }

    /**
     * @param null | string $envelopeFilename
     * @return static
     */
    public function withEnvelopeFilename(?string $envelopeFilename) : static
    {
        $new = clone $this;
        $new->envelopeFilename = $envelopeFilename;

        return $new;
    }
}

