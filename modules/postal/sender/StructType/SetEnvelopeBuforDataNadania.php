<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setEnvelopeBuforDataNadania StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetEnvelopeBuforDataNadania extends AbstractStructBase
{
    /**
     * The dataNadania
     * @var string|null
     */
    protected ?string $dataNadania = null;
    /**
     * Constructor method for setEnvelopeBuforDataNadania
     * @uses SetEnvelopeBuforDataNadania::setDataNadania()
     * @param string $dataNadania
     */
    public function __construct(?string $dataNadania = null)
    {
        $this
            ->setDataNadania($dataNadania);
    }
    /**
     * Get dataNadania value
     * @return string|null
     */
    public function getDataNadania(): ?string
    {
        return $this->dataNadania;
    }
    /**
     * Set dataNadania value
     * @param string $dataNadania
     * @return \app\modules\postal\sender\StructType\SetEnvelopeBuforDataNadania
     */
    public function setDataNadania(?string $dataNadania = null): self
    {
        // validation for constraint: string
        if (!is_null($dataNadania) && !is_string($dataNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataNadania, true), gettype($dataNadania)), __LINE__);
        }
        $this->dataNadania = $dataNadania;
        
        return $this;
    }
}
