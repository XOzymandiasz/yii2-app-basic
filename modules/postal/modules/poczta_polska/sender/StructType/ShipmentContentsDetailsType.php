<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentContentsDetailsType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShipmentContentsDetailsType extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The quantity
     * @var int|null
     */
    protected ?int $quantity = null;
    /**
     * The netWeight
     * Meta information extracted from the WSDL
     * - documentation: Net weight [g].
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $netWeight = null;
    /**
     * The declaredValue
     * Meta information extracted from the WSDL
     * - documentation: Declared value of a given type of goods, without the decimal point, e.g. 20000 cents.
     * @var int|null
     */
    protected ?int $declaredValue = null;
    /**
     * The harmonizedSystemCode
     * Meta information extracted from the WSDL
     * - documentation: Harmonized System (HS) Code.
     * - base: xsd:string
     * - minOccurs: 0
     * - pattern: \d{1,10}
     * @var string|null
     */
    protected ?string $harmonizedSystemCode = null;
    /**
     * The originLocationCode
     * Meta information extracted from the WSDL
     * - documentation: Code (ISO 3166) of the country of origin of the described content. example: US
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $originLocationCode = null;
    /**
     * Constructor method for ShipmentContentsDetailsType
     * @uses ShipmentContentsDetailsType::setDescription()
     * @uses ShipmentContentsDetailsType::setQuantity()
     * @uses ShipmentContentsDetailsType::setNetWeight()
     * @uses ShipmentContentsDetailsType::setDeclaredValue()
     * @uses ShipmentContentsDetailsType::setHarmonizedSystemCode()
     * @uses ShipmentContentsDetailsType::setOriginLocationCode()
     * @param string $description
     * @param int $quantity
     * @param int $netWeight
     * @param int $declaredValue
     * @param string $harmonizedSystemCode
     * @param string $originLocationCode
     */
    public function __construct(?string $description = null, ?int $quantity = null, ?int $netWeight = null, ?int $declaredValue = null, ?string $harmonizedSystemCode = null, ?string $originLocationCode = null)
    {
        $this
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setNetWeight($netWeight)
            ->setDeclaredValue($declaredValue)
            ->setHarmonizedSystemCode($harmonizedSystemCode)
            ->setOriginLocationCode($originLocationCode);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \app\modules\postal\sender\StructType\ShipmentContentsDetailsType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \app\modules\postal\sender\StructType\ShipmentContentsDetailsType
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        
        return $this;
    }
    /**
     * Get netWeight value
     * @return int|null
     */
    public function getNetWeight(): ?int
    {
        return $this->netWeight;
    }
    /**
     * Set netWeight value
     * @param int $netWeight
     * @return \app\modules\postal\sender\StructType\ShipmentContentsDetailsType
     */
    public function setNetWeight(?int $netWeight = null): self
    {
        // validation for constraint: int
        if (!is_null($netWeight) && !(is_int($netWeight) || ctype_digit($netWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($netWeight, true), gettype($netWeight)), __LINE__);
        }
        $this->netWeight = $netWeight;
        
        return $this;
    }
    /**
     * Get declaredValue value
     * @return int|null
     */
    public function getDeclaredValue(): ?int
    {
        return $this->declaredValue;
    }
    /**
     * Set declaredValue value
     * @param int $declaredValue
     * @return \app\modules\postal\sender\StructType\ShipmentContentsDetailsType
     */
    public function setDeclaredValue(?int $declaredValue = null): self
    {
        // validation for constraint: int
        if (!is_null($declaredValue) && !(is_int($declaredValue) || ctype_digit($declaredValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($declaredValue, true), gettype($declaredValue)), __LINE__);
        }
        $this->declaredValue = $declaredValue;
        
        return $this;
    }
    /**
     * Get harmonizedSystemCode value
     * @return string|null
     */
    public function getHarmonizedSystemCode(): ?string
    {
        return $this->harmonizedSystemCode;
    }
    /**
     * Set harmonizedSystemCode value
     * @param string $harmonizedSystemCode
     * @return \app\modules\postal\sender\StructType\ShipmentContentsDetailsType
     */
    public function setHarmonizedSystemCode(?string $harmonizedSystemCode = null): self
    {
        // validation for constraint: string
        if (!is_null($harmonizedSystemCode) && !is_string($harmonizedSystemCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($harmonizedSystemCode, true), gettype($harmonizedSystemCode)), __LINE__);
        }
        // validation for constraint: pattern(\d{1,10})
        if (!is_null($harmonizedSystemCode) && !preg_match('/\\d{1,10}/', (string) $harmonizedSystemCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\d{1,10}/', var_export($harmonizedSystemCode, true)), __LINE__);
        }
        $this->harmonizedSystemCode = $harmonizedSystemCode;
        
        return $this;
    }
    /**
     * Get originLocationCode value
     * @return string|null
     */
    public function getOriginLocationCode(): ?string
    {
        return $this->originLocationCode;
    }
    /**
     * Set originLocationCode value
     * @param string $originLocationCode
     * @return \app\modules\postal\sender\StructType\ShipmentContentsDetailsType
     */
    public function setOriginLocationCode(?string $originLocationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($originLocationCode) && !is_string($originLocationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originLocationCode, true), gettype($originLocationCode)), __LINE__);
        }
        $this->originLocationCode = $originLocationCode;
        
        return $this;
    }
}
