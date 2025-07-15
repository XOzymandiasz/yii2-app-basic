<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetAddresLabelByGuid implements RequestInterface
{
    /**
     * @var non-empty-array<int<0,max>, mixed>
     */
    private array $guid;

    /**
     * @var null | int
     */
    private ?int $idBufor = null;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,max>, mixed> $guid
     * @param null | int $idBufor
     */
    public function __construct(array $guid, ?int $idBufor)
    {
        $this->guid = $guid;
        $this->idBufor = $idBufor;
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

    /**
     * @return null | int
     */
    public function getIdBufor() : ?int
    {
        return $this->idBufor;
    }

    /**
     * @param null | int $idBufor
     * @return static
     */
    public function withIdBufor(?int $idBufor) : static
    {
        $new = clone $this;
        $new->idBufor = $idBufor;

        return $new;
    }
}

