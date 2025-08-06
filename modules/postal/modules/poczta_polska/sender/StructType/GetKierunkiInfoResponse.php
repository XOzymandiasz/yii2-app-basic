<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKierunkiInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetKierunkiInfoResponse extends AbstractStructBase
{
    /**
     * The lastUpdate
     * @var string|null
     */
    protected ?string $lastUpdate = null;
    /**
     * The usluga
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\UslugiType[]
     */
    protected ?array $usluga = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getKierunkiInfoResponse
     * @param string $lastUpdate
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UslugiType[] $usluga
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[] $error
     *@uses  GetKierunkiInfoResponse::setLastUpdate()
     * @uses GetKierunkiInfoResponse::setUsluga()
     * @uses GetKierunkiInfoResponse::setError()
     */
    public function __construct(?string $lastUpdate = null, ?array $usluga = null, ?array $error = null)
    {
        $this
            ->setLastUpdate($lastUpdate)
            ->setUsluga($usluga)
            ->setError($error);
    }
    /**
     * Get lastUpdate value
     * @return string|null
     */
    public function getLastUpdate(): ?string
    {
        return $this->lastUpdate;
    }
    /**
     * Set lastUpdate value
     * @param string $lastUpdate
     * @return \app\modules\postal\sender\StructType\GetKierunkiInfoResponse
     */
    public function setLastUpdate(?string $lastUpdate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastUpdate) && !is_string($lastUpdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdate, true), gettype($lastUpdate)), __LINE__);
        }
        $this->lastUpdate = $lastUpdate;
        
        return $this;
    }
    /**
     * Get usluga value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\UslugiType[]
     */
    public function getUsluga(): ?array
    {
        return $this->usluga;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUsluga method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUsluga method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUslugaForArrayConstraintFromSetUsluga(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getKierunkiInfoResponseUslugaItem) {
            // validation for constraint: itemType
            if (!$getKierunkiInfoResponseUslugaItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\UslugiType) {
                $invalidValues[] = is_object($getKierunkiInfoResponseUslugaItem) ? get_class($getKierunkiInfoResponseUslugaItem) : sprintf('%s(%s)', gettype($getKierunkiInfoResponseUslugaItem), var_export($getKierunkiInfoResponseUslugaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The usluga property can only contain items of type \app\modules\postal\sender\StructType\UslugiType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set usluga value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UslugiType[] $usluga
     * @return \app\modules\postal\sender\StructType\GetKierunkiInfoResponse
     *@throws InvalidArgumentException
     */
    public function setUsluga(?array $usluga = null): self
    {
        // validation for constraint: array
        if ('' !== ($uslugaArrayErrorMessage = self::validateUslugaForArrayConstraintFromSetUsluga($usluga))) {
            throw new InvalidArgumentException($uslugaArrayErrorMessage, __LINE__);
        }
        $this->usluga = $usluga;
        
        return $this;
    }
    /**
     * Add item to usluga value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UslugiType $item
     * @return \app\modules\postal\sender\StructType\GetKierunkiInfoResponse
     *@throws InvalidArgumentException
     */
    public function addToUsluga(\app\modules\postal\modules\poczta_polska\sender\StructType\UslugiType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\UslugiType) {
            throw new InvalidArgumentException(sprintf('The usluga property can only contain items of type \app\modules\postal\sender\StructType\UslugiType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->usluga[] = $item;
        
        return $this;
    }
    /**
     * Get error value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintFromSetError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getKierunkiInfoResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getKierunkiInfoResponseErrorItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($getKierunkiInfoResponseErrorItem) ? get_class($getKierunkiInfoResponseErrorItem) : sprintf('%s(%s)', gettype($getKierunkiInfoResponseErrorItem), var_export($getKierunkiInfoResponseErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The error property can only contain items of type \app\modules\postal\sender\StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set error value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[] $error
     * @return \app\modules\postal\sender\StructType\GetKierunkiInfoResponse
     *@throws InvalidArgumentException
     */
    public function setError(?array $error = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintFromSetError($error))) {
            throw new InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Add item to error value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType $item
     * @return \app\modules\postal\sender\StructType\GetKierunkiInfoResponse
     *@throws InvalidArgumentException
     */
    public function addToError(\app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType) {
            throw new InvalidArgumentException(sprintf('The error property can only contain items of type \app\modules\postal\sender\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->error[] = $item;
        
        return $this;
    }
}
