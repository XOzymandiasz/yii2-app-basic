<?php

namespace app\modules\postal\sender\Type;

class EnvelopeInfoType
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @var array<int<0,max>, string>
     */
    private array $envelopeFilename;

    /**
     * @var null | int
     */
    private ?int $idKarta = null;

    /**
     * @var null | int
     */
    private ?int $idEnvelope = null;

    /**
     * @var null | \app\modules\postal\sender\Type\EnvelopeStatusType
     */
    private ?\app\modules\postal\sender\Type\EnvelopeStatusType $envelopeStatus = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dataTransmisji = null;

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
     * @return array<int<0,max>, string>
     */
    public function getEnvelopeFilename() : array
    {
        return $this->envelopeFilename;
    }

    /**
     * @param array<int<0,max>, string> $envelopeFilename
     * @return static
     */
    public function withEnvelopeFilename(array $envelopeFilename) : static
    {
        $new = clone $this;
        $new->envelopeFilename = $envelopeFilename;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdKarta() : ?int
    {
        return $this->idKarta;
    }

    /**
     * @param null | int $idKarta
     * @return static
     */
    public function withIdKarta(?int $idKarta) : static
    {
        $new = clone $this;
        $new->idKarta = $idKarta;

        return $new;
    }

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
     * @return null | \DateTimeInterface
     */
    public function getDataTransmisji() : ?\DateTimeInterface
    {
        return $this->dataTransmisji;
    }

    /**
     * @param null | \DateTimeInterface $dataTransmisji
     * @return static
     */
    public function withDataTransmisji(?\DateTimeInterface $dataTransmisji) : static
    {
        $new = clone $this;
        $new->dataTransmisji = $dataTransmisji;

        return $new;
    }
}

