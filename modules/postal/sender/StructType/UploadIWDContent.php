<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for uploadIWDContent StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UploadIWDContent extends AbstractStructBase
{
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $urzadNadania = null;
    /**
     * The IWDContent
     * @var string|null
     */
    protected ?string $IWDContent = null;
    /**
     * Constructor method for uploadIWDContent
     * @uses UploadIWDContent::setUrzadNadania()
     * @uses UploadIWDContent::setIWDContent()
     * @param int $urzadNadania
     * @param string $iWDContent
     */
    public function __construct(?int $urzadNadania = null, ?string $iWDContent = null)
    {
        $this
            ->setUrzadNadania($urzadNadania)
            ->setIWDContent($iWDContent);
    }
    /**
     * Get urzadNadania value
     * @return int|null
     */
    public function getUrzadNadania(): ?int
    {
        return $this->urzadNadania;
    }
    /**
     * Set urzadNadania value
     * @param int $urzadNadania
     * @return \app\modules\postal\sender\StructType\UploadIWDContent
     */
    public function setUrzadNadania(?int $urzadNadania = null): self
    {
        // validation for constraint: int
        if (!is_null($urzadNadania) && !(is_int($urzadNadania) || ctype_digit($urzadNadania))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($urzadNadania, true), gettype($urzadNadania)), __LINE__);
        }
        $this->urzadNadania = $urzadNadania;
        
        return $this;
    }
    /**
     * Get IWDContent value
     * @return string|null
     */
    public function getIWDContent(): ?string
    {
        return $this->IWDContent;
    }
    /**
     * Set IWDContent value
     * @param string $iWDContent
     * @return \app\modules\postal\sender\StructType\UploadIWDContent
     */
    public function setIWDContent(?string $iWDContent = null): self
    {
        // validation for constraint: string
        if (!is_null($iWDContent) && !is_string($iWDContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iWDContent, true), gettype($iWDContent)), __LINE__);
        }
        $this->IWDContent = $iWDContent;
        
        return $this;
    }
}
