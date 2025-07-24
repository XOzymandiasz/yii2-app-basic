<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeStatus StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeStatus extends AbstractStructBase
{
    /**
     * The idEnvelope
     * @var int|null
     */
    protected ?int $idEnvelope = null;
    /**
     * Constructor method for getEnvelopeStatus
     * @uses GetEnvelopeStatus::setIdEnvelope()
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
     * @return \app\modules\postal\sender\StructType\GetEnvelopeStatus
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
