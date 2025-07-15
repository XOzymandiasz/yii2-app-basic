<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateShopEZwroty implements RequestInterface
{
    /**
     * @var \app\modules\postal\sender\Type\ShopEZwrotyType
     */
    private \app\modules\postal\sender\Type\ShopEZwrotyType $shop;

    /**
     * Constructor
     *
     * @param \app\modules\postal\sender\Type\ShopEZwrotyType $shop
     */
    public function __construct(\app\modules\postal\sender\Type\ShopEZwrotyType $shop)
    {
        $this->shop = $shop;
    }

    /**
     * @return \app\modules\postal\sender\Type\ShopEZwrotyType
     */
    public function getShop() : \app\modules\postal\sender\Type\ShopEZwrotyType
    {
        return $this->shop;
    }

    /**
     * @param \app\modules\postal\sender\Type\ShopEZwrotyType $shop
     * @return static
     */
    public function withShop(\app\modules\postal\sender\Type\ShopEZwrotyType $shop) : static
    {
        $new = clone $this;
        $new->shop = $shop;

        return $new;
    }
}

