<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetEPOStatus implements RequestInterface
{
    /**
     * @var non-empty-array<int<0,499>, mixed>
     */
    private array $guid;

    /**
     * @var bool
     */
    private bool $endedOnly;

    /**
     * @var int
     */
    private int $idEnvelope;

    /**
     * Element służy do przekazania żądania
     *  uzupełnienia statusu EPO dla wskazanych przesyłek o dane
     *  dotyczące podpisu odbiorcy przesyłki. W
     *  zalezności od urządzenia
     *  wykorzystanego do utrwalenia podpisu, w odpowiedzi na wywołanie
     *  metody może zostać zwrócony sam obraz podpisu lub obraz podpisu
     *  uzupełniony o jego dane biometryczne.
     *
     * @var null | bool
     */
    private ?bool $withBioepo = null;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,499>, mixed> $guid
     * @param bool $endedOnly
     * @param int $idEnvelope
     * @param null | bool $withBioepo
     */
    public function __construct(array $guid, bool $endedOnly, int $idEnvelope, ?bool $withBioepo)
    {
        $this->guid = $guid;
        $this->endedOnly = $endedOnly;
        $this->idEnvelope = $idEnvelope;
        $this->withBioepo = $withBioepo;
    }

    /**
     * @return non-empty-array<int<0,499>, mixed>
     */
    public function getGuid() : array
    {
        return $this->guid;
    }

    /**
     * @param non-empty-array<int<0,499>, mixed> $guid
     * @return static
     */
    public function withGuid(array $guid) : static
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEndedOnly() : bool
    {
        return $this->endedOnly;
    }

    /**
     * @param bool $endedOnly
     * @return static
     */
    public function withEndedOnly(bool $endedOnly) : static
    {
        $new = clone $this;
        $new->endedOnly = $endedOnly;

        return $new;
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
    public function getWithBioepo() : ?bool
    {
        return $this->withBioepo;
    }

    /**
     * @param null | bool $withBioepo
     * @return static
     */
    public function withWithBioepo(?bool $withBioepo) : static
    {
        $new = clone $this;
        $new->withBioepo = $withBioepo;

        return $new;
    }
}

