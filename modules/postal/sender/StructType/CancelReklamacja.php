<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelReklamacja StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CancelReklamacja extends AbstractStructBase
{
    /**
     * The idRelkamacja
     * @var int|null
     */
    protected ?int $idRelkamacja = null;
    /**
     * Constructor method for cancelReklamacja
     * @uses CancelReklamacja::setIdRelkamacja()
     * @param int $idRelkamacja
     */
    public function __construct(?int $idRelkamacja = null)
    {
        $this
            ->setIdRelkamacja($idRelkamacja);
    }
    /**
     * Get idRelkamacja value
     * @return int|null
     */
    public function getIdRelkamacja(): ?int
    {
        return $this->idRelkamacja;
    }
    /**
     * Set idRelkamacja value
     * @param int $idRelkamacja
     * @return \app\modules\postal\sender\StructType\CancelReklamacja
     */
    public function setIdRelkamacja(?int $idRelkamacja = null): self
    {
        // validation for constraint: int
        if (!is_null($idRelkamacja) && !(is_int($idRelkamacja) || ctype_digit($idRelkamacja))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idRelkamacja, true), gettype($idRelkamacja)), __LINE__);
        }
        $this->idRelkamacja = $idRelkamacja;
        
        return $this;
    }
}
