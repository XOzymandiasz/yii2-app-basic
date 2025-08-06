<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getFirmowaPocztaBook StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetFirmowaPocztaBook extends AbstractStructBase
{
    /**
     * The idEnvelope
     * @var int|null
     */
    protected ?int $idEnvelope = null;
    /**
     * Constructor method for getFirmowaPocztaBook
     * @uses GetFirmowaPocztaBook::setIdEnvelope()
     * @param int $idEnvelope
     */
    public function __construct(?int $idEnvelope = null)
    {
        $this
            ->setIdEnvelope($idEnvelope);
    }
    /**
     * Get idEnvelope value
     * @return int|null
     */
    public function getIdEnvelope(): ?int
    {
        return $this->idEnvelope;
    }
    /**
     * Set idEnvelope value
     * @param int $idEnvelope
     * @return \app\modules\postal\sender\StructType\GetFirmowaPocztaBook
     */
    public function setIdEnvelope(?int $idEnvelope = null): self
    {
        // validation for constraint: int
        if (!is_null($idEnvelope) && !(is_int($idEnvelope) || ctype_digit($idEnvelope))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEnvelope, true), gettype($idEnvelope)), __LINE__);
        }
        $this->idEnvelope = $idEnvelope;
        
        return $this;
    }
}
