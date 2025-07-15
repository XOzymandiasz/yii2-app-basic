<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetListaZgodEZwrotow implements RequestInterface
{
    /**
     * @var null | \app\modules\postal\sender\Type\StatusZgodyEZwrotNameType
     */
    private ?\app\modules\postal\sender\Type\StatusZgodyEZwrotNameType $status = null;

    /**
     * @var null | int
     */
    private ?int $idShop = null;

    /**
     * Constructor
     *
     * @param null | \app\modules\postal\sender\Type\StatusZgodyEZwrotNameType $status
     * @param null | int $idShop
     */
    public function __construct(?\app\modules\postal\sender\Type\StatusZgodyEZwrotNameType $status, ?int $idShop)
    {
        $this->status = $status;
        $this->idShop = $idShop;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\StatusZgodyEZwrotNameType
     */
    public function getStatus() : ?\app\modules\postal\sender\Type\StatusZgodyEZwrotNameType
    {
        return $this->status;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\StatusZgodyEZwrotNameType $status
     * @return static
     */
    public function withStatus(?\app\modules\postal\sender\Type\StatusZgodyEZwrotNameType $status) : static
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdShop() : ?int
    {
        return $this->idShop;
    }

    /**
     * @param null | int $idShop
     * @return static
     */
    public function withIdShop(?int $idShop) : static
    {
        $new = clone $this;
        $new->idShop = $idShop;

        return $new;
    }
}

