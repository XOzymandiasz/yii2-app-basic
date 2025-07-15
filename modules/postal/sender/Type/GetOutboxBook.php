<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetOutboxBook implements RequestInterface
{
    /**
     * @var int
     */
    private int $idEnvelope;

    /**
     * @var null | bool
     */
    private ?bool $includeNierejestrowane = null;

    /**
     * Constructor
     *
     * @param int $idEnvelope
     * @param null | bool $includeNierejestrowane
     */
    public function __construct(int $idEnvelope, ?bool $includeNierejestrowane)
    {
        $this->idEnvelope = $idEnvelope;
        $this->includeNierejestrowane = $includeNierejestrowane;
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

    /**
     * @return null | bool
     */
    public function getIncludeNierejestrowane() : ?bool
    {
        return $this->includeNierejestrowane;
    }

    /**
     * @param null | bool $includeNierejestrowane
     * @return static
     */
    public function withIncludeNierejestrowane(?bool $includeNierejestrowane) : static
    {
        $new = clone $this;
        $new->includeNierejestrowane = $includeNierejestrowane;

        return $new;
    }
}

