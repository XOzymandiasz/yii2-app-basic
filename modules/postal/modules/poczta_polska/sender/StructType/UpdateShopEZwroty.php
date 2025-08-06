<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateShopEZwroty StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateShopEZwroty extends AbstractStructBase
{
    /**
     * The shop
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType $shop = null;
    /**
     * Constructor method for updateShopEZwroty
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType $shop
     * @uses UpdateShopEZwroty::setShop()
     */
    public function __construct(?\app\modules\postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType $shop = null)
    {
        $this
            ->setShop($shop);
    }
    /**
     * Get shop value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType|null
     */
    public function getShop(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType
    {
        return $this->shop;
    }
    /**
     * Set shop value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType $shop
     * @return \app\modules\postal\sender\StructType\UpdateShopEZwroty
     */
    public function setShop(?\app\modules\postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType $shop = null): self
    {
        $this->shop = $shop;
        
        return $this;
    }
}
