<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getParcelContentList StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetParcelContentList extends AbstractStructBase
{
    /**
     * The idKarta
     * @var int|null
     */
    protected ?int $idKarta = null;
    /**
     * Constructor method for getParcelContentList
     * @uses GetParcelContentList::setIdKarta()
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
     * @return \app\modules\postal\sender\StructType\GetParcelContentList
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
