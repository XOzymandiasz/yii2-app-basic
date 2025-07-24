<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteShopEZwroty StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteShopEZwroty extends AbstractStructBase
{
    /**
     * The idShop
     * @var int|null
     */
    protected ?int $idShop = null;
    /**
     * Constructor method for deleteShopEZwroty
     * @uses DeleteShopEZwroty::setIdShop()
     * @param int $idShop
     */
    public function __construct(?int $idShop = null)
    {
        $this
            ->setIdShop($idShop);
    }
    /**
     * Get idShop value
     * @return int|null
     */
    public function getIdShop(): ?int
    {
        return $this->idShop;
    }
    /**
     * Set idShop value
     * @param int $idShop
     * @return \app\modules\postal\sender\StructType\DeleteShopEZwroty
     */
    public function setIdShop(?int $idShop = null): self
    {
        // validation for constraint: int
        if (!is_null($idShop) && !(is_int($idShop) || ctype_digit($idShop))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idShop, true), gettype($idShop)), __LINE__);
        }
        $this->idShop = $idShop;
        
        return $this;
    }
}
