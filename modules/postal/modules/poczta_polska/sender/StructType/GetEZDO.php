<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEZDO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEZDO extends AbstractStructBase
{
    /**
     * The idEZDOPakiet
     * @var int|null
     */
    protected ?int $idEZDOPakiet = null;
    /**
     * Constructor method for getEZDO
     * @uses GetEZDO::setIdEZDOPakiet()
     * @param int $idEZDOPakiet
     */
    public function __construct(?int $idEZDOPakiet = null)
    {
        $this
            ->setIdEZDOPakiet($idEZDOPakiet);
    }
    /**
     * Get idEZDOPakiet value
     * @return int|null
     */
    public function getIdEZDOPakiet(): ?int
    {
        return $this->idEZDOPakiet;
    }
    /**
     * Set idEZDOPakiet value
     * @param int $idEZDOPakiet
     * @return \app\modules\postal\sender\StructType\GetEZDO
     */
    public function setIdEZDOPakiet(?int $idEZDOPakiet = null): self
    {
        // validation for constraint: int
        if (!is_null($idEZDOPakiet) && !(is_int($idEZDOPakiet) || ctype_digit($idEZDOPakiet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEZDOPakiet, true), gettype($idEZDOPakiet)), __LINE__);
        }
        $this->idEZDOPakiet = $idEZDOPakiet;
        
        return $this;
    }
}
