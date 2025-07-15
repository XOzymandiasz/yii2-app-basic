<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetShopEZwrotyListResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ShopEZwrotyInfoType>
     */
    private array $shops;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\ShopEZwrotyInfoType>
     */
    public function getShops() : array
    {
        return $this->shops;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\ShopEZwrotyInfoType> $shops
     * @return static
     */
    public function withShops(array $shops) : static
    {
        $new = clone $this;
        $new->shops = $shops;

        return $new;
    }
}

