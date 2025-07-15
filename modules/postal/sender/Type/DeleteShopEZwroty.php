<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteShopEZwroty implements RequestInterface
{
    /**
     * @var int
     */
    private int $idShop;

    /**
     * Constructor
     *
     * @param int $idShop
     */
    public function __construct(int $idShop)
    {
        $this->idShop = $idShop;
    }

    /**
     * @return int
     */
    public function getIdShop() : int
    {
        return $this->idShop;
    }

    /**
     * @param int $idShop
     * @return static
     */
    public function withIdShop(int $idShop) : static
    {
        $new = clone $this;
        $new->idShop = $idShop;

        return $new;
    }
}

