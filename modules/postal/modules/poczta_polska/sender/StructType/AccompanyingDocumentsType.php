<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccompanyingDocumentsType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AccompanyingDocumentsType extends AbstractStructBase
{
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The number
     * @var string|null
     */
    protected ?string $number = null;
    /**
     * Constructor method for AccompanyingDocumentsType
     * @uses AccompanyingDocumentsType::setType()
     * @uses AccompanyingDocumentsType::setNumber()
     * @param string $type
     * @param string $number
     */
    public function __construct(?string $type = null, ?string $number = null)
    {
        $this
            ->setType($type)
            ->setNumber($number);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \app\modules\postal\sender\StructType\AccompanyingDocumentsType
     *@throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\AccompanyingDocumentsEnum::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\AccompanyingDocumentsEnum::valueIsValid()
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\AccompanyingDocumentsEnum::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\AccompanyingDocumentsEnum', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\AccompanyingDocumentsEnum::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \app\modules\postal\sender\StructType\AccompanyingDocumentsType
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
        
        return $this;
    }
}
