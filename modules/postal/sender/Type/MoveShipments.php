<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MoveShipments implements RequestInterface
{
    /**
     * @var int
     */
    private int $idBuforFrom;

    /**
     * @var int
     */
    private int $idBuforTo;

    /**
     * @var non-empty-array<int<0,max>, mixed>
     */
    private array $guid;

    /**
     * Constructor
     *
     * @param int $idBuforFrom
     * @param int $idBuforTo
     * @param non-empty-array<int<0,max>, mixed> $guid
     */
    public function __construct(int $idBuforFrom, int $idBuforTo, array $guid)
    {
        $this->idBuforFrom = $idBuforFrom;
        $this->idBuforTo = $idBuforTo;
        $this->guid = $guid;
    }

    /**
     * @return int
     */
    public function getIdBuforFrom() : int
    {
        return $this->idBuforFrom;
    }

    /**
     * @param int $idBuforFrom
     * @return static
     */
    public function withIdBuforFrom(int $idBuforFrom) : static
    {
        $new = clone $this;
        $new->idBuforFrom = $idBuforFrom;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdBuforTo() : int
    {
        return $this->idBuforTo;
    }

    /**
     * @param int $idBuforTo
     * @return static
     */
    public function withIdBuforTo(int $idBuforTo) : static
    {
        $new = clone $this;
        $new->idBuforTo = $idBuforTo;

        return $new;
    }

    /**
     * @return non-empty-array<int<0,max>, mixed>
     */
    public function getGuid() : array
    {
        return $this->guid;
    }

    /**
     * @param non-empty-array<int<0,max>, mixed> $guid
     * @return static
     */
    public function withGuid(array $guid) : static
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }
}

