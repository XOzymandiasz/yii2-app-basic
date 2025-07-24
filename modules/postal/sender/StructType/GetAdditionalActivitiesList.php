<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdditionalActivitiesList StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAdditionalActivitiesList extends AbstractStructBase
{
    /**
     * The idKarta
     * @var int|null
     */
    protected ?int $idKarta = null;
    /**
     * Constructor method for getAdditionalActivitiesList
     * @uses GetAdditionalActivitiesList::setIdKarta()
     * @param int $idKarta
     */
    public function __construct(?int $idKarta = null)
    {
        $this
            ->setIdKarta($idKarta);
    }
    /**
     * Get idKarta value
     * @return int|null
     */
    public function getIdKarta(): ?int
    {
        return $this->idKarta;
    }
    /**
     * Set idKarta value
     * @param int $idKarta
     * @return \app\modules\postal\sender\StructType\GetAdditionalActivitiesList
     */
    public function setIdKarta(?int $idKarta = null): self
    {
        // validation for constraint: int
        if (!is_null($idKarta) && !(is_int($idKarta) || ctype_digit($idKarta))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idKarta, true), gettype($idKarta)), __LINE__);
        }
        $this->idKarta = $idKarta;
        
        return $this;
    }
}
