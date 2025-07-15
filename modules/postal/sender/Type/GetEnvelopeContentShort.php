<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetEnvelopeContentShort implements RequestInterface
{
    /**
     * @var int
     */
    private int $idEnvelope;

    /**
     * Constructor
     *
     * @param int $idEnvelope
     */
    public function __construct(int $idEnvelope)
    {
        $this->idEnvelope = $idEnvelope;
    }

    /**
     * @return int
     */
    public function getIdEnvelope() : int
    {
        return $this->idEnvelope;
    }

    /**
     * @param int $idEnvelope
     * @return static
     */
    public function withIdEnvelope(int $idEnvelope) : static
    {
        $new = clone $this;
        $new->idEnvelope = $idEnvelope;

        return $new;
    }
}

