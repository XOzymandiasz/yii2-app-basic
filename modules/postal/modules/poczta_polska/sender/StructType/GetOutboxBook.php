<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getOutboxBook StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOutboxBook extends AbstractStructBase
{
    /**
     * The idEnvelope
     * @var int|null
     */
    protected ?int $idEnvelope = null;
    /**
     * The includeNierejestrowane
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $includeNierejestrowane = null;
    /**
     * Constructor method for getOutboxBook
     * @uses GetOutboxBook::setIdEnvelope()
     * @uses GetOutboxBook::setIncludeNierejestrowane()
     * @param int $idEnvelope
     * @param bool $includeNierejestrowane
     */
    public function __construct(?int $idEnvelope = null, ?bool $includeNierejestrowane = null)
    {
        $this
            ->setIdEnvelope($idEnvelope)
            ->setIncludeNierejestrowane($includeNierejestrowane);
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
     * @return \app\modules\postal\sender\StructType\GetOutboxBook
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
    /**
     * Get includeNierejestrowane value
     * @return bool|null
     */
    public function getIncludeNierejestrowane(): ?bool
    {
        return $this->includeNierejestrowane;
    }
    /**
     * Set includeNierejestrowane value
     * @param bool $includeNierejestrowane
     * @return \app\modules\postal\sender\StructType\GetOutboxBook
     */
    public function setIncludeNierejestrowane(?bool $includeNierejestrowane = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeNierejestrowane) && !is_bool($includeNierejestrowane)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeNierejestrowane, true), gettype($includeNierejestrowane)), __LINE__);
        }
        $this->includeNierejestrowane = $includeNierejestrowane;
        
        return $this;
    }
}
