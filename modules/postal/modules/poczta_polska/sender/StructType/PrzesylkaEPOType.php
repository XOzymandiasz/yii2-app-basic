<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaEPOType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaEPOType extends AbstractStructBase
{
    /**
     * The EPOInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\EPOInfoType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\EPOInfoType $EPOInfo = null;
    /**
     * The biometricSignatureContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $biometricSignatureContent = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - documentation: 10: First version (to September 2019) 20: Second version (since October 2019)
     * - base: xsd:int
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $version = null;
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $guid = null;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * @var string|null
     */
    protected ?string $numerNadania = null;
    /**
     * The statusEPO
     * @var string|null
     */
    protected ?string $statusEPO = null;
    /**
     * Constructor method for przesylkaEPOType
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\EPOInfoType $ePOInfo
     * @param string $biometricSignatureContent
     * @param int $version
     * @param string $guid
     * @param string $numerNadania
     * @param string $statusEPO
     *@uses PrzesylkaEPOType::setEPOInfo()
     * @uses PrzesylkaEPOType::setBiometricSignatureContent()
     * @uses PrzesylkaEPOType::setVersion()
     * @uses PrzesylkaEPOType::setGuid()
     * @uses PrzesylkaEPOType::setNumerNadania()
     * @uses PrzesylkaEPOType::setStatusEPO()
     */
    public function __construct(?\app\modules\postal\modules\poczta_polska\sender\StructType\EPOInfoType $ePOInfo = null, ?string $biometricSignatureContent = null, ?int $version = null, ?string $guid = null, ?string $numerNadania = null, ?string $statusEPO = null)
    {
        $this
            ->setEPOInfo($ePOInfo)
            ->setBiometricSignatureContent($biometricSignatureContent)
            ->setVersion($version)
            ->setGuid($guid)
            ->setNumerNadania($numerNadania)
            ->setStatusEPO($statusEPO);
    }
    /**
     * Get EPOInfo value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\EPOInfoType|null
     */
    public function getEPOInfo(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\EPOInfoType
    {
        return $this->EPOInfo;
    }
    /**
     * Set EPOInfo value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\EPOInfoType $ePOInfo
     * @return \app\modules\postal\sender\StructType\PrzesylkaEPOType
     */
    public function setEPOInfo(?\app\modules\postal\modules\poczta_polska\sender\StructType\EPOInfoType $ePOInfo = null): self
    {
        $this->EPOInfo = $ePOInfo;
        
        return $this;
    }
    /**
     * Get biometricSignatureContent value
     * @return string|null
     */
    public function getBiometricSignatureContent(): ?string
    {
        return $this->biometricSignatureContent;
    }
    /**
     * Set biometricSignatureContent value
     * @param string $biometricSignatureContent
     * @return \app\modules\postal\sender\StructType\PrzesylkaEPOType
     */
    public function setBiometricSignatureContent(?string $biometricSignatureContent = null): self
    {
        // validation for constraint: string
        if (!is_null($biometricSignatureContent) && !is_string($biometricSignatureContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($biometricSignatureContent, true), gettype($biometricSignatureContent)), __LINE__);
        }
        $this->biometricSignatureContent = $biometricSignatureContent;
        
        return $this;
    }
    /**
     * Get version value
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param int $version
     * @return \app\modules\postal\sender\StructType\PrzesylkaEPOType
     */
    public function setVersion(?int $version = null): self
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \app\modules\postal\sender\StructType\PrzesylkaEPOType
     */
    public function setGuid(?string $guid = null): self
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guid) && mb_strlen((string) $guid) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $guid)), __LINE__);
        }
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Get numerNadania value
     * @return string|null
     */
    public function getNumerNadania(): ?string
    {
        return $this->numerNadania;
    }
    /**
     * Set numerNadania value
     * @param string $numerNadania
     * @return \app\modules\postal\sender\StructType\PrzesylkaEPOType
     */
    public function setNumerNadania(?string $numerNadania = null): self
    {
        // validation for constraint: string
        if (!is_null($numerNadania) && !is_string($numerNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadania, true), gettype($numerNadania)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $numerNadania)), __LINE__);
        }
        // validation for constraint: minLength(10)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) < 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 10', mb_strlen((string) $numerNadania)), __LINE__);
        }
        $this->numerNadania = $numerNadania;
        
        return $this;
    }
    /**
     * Get statusEPO value
     * @return string|null
     */
    public function getStatusEPO(): ?string
    {
        return $this->statusEPO;
    }
    /**
     * Set statusEPO value
     * @param string $statusEPO
     * @return \app\modules\postal\sender\StructType\PrzesylkaEPOType
     * @throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\StatusEPOEnum::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\StatusEPOEnum::valueIsValid()
     */
    public function setStatusEPO(?string $statusEPO = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\StatusEPOEnum::valueIsValid($statusEPO)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\StatusEPOEnum', is_array($statusEPO) ? implode(', ', $statusEPO) : var_export($statusEPO, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\StatusEPOEnum::getValidValues())), __LINE__);
        }
        $this->statusEPO = $statusEPO;
        
        return $this;
    }
}
