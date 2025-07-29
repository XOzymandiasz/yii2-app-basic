<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getKierunkiResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetKierunkiResponse extends AbstractStructBase
{
    /**
     * The kierunek
     * Meta information extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\KierunekType[]
     */
    protected ?array $kierunek = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getKierunkiResponse
     * @uses GetKierunkiResponse::setKierunek()
     * @uses GetKierunkiResponse::setError()
     * @param \app\modules\postal\sender\StructType\KierunekType[] $kierunek
     * @param \app\modules\postal\sender\StructType\ErrorType[] $error
     */
    public function __construct(?array $kierunek = null, ?array $error = null)
    {
        $this
            ->setKierunek($kierunek)
            ->setError($error);
    }
    /**
     * Get kierunek value
     * @return \app\modules\postal\sender\StructType\KierunekType[]
     */
    public function getKierunek(): ?array
    {
        return $this->kierunek;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setKierunek method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKierunek method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKierunekForArrayConstraintFromSetKierunek(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getKierunkiResponseKierunekItem) {
            // validation for constraint: itemType
            if (!$getKierunkiResponseKierunekItem instanceof \app\modules\postal\sender\StructType\KierunekType) {
                $invalidValues[] = is_object($getKierunkiResponseKierunekItem) ? get_class($getKierunkiResponseKierunekItem) : sprintf('%s(%s)', gettype($getKierunkiResponseKierunekItem), var_export($getKierunkiResponseKierunekItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The kierunek property can only contain items of type \app\modules\postal\sender\StructType\KierunekType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set kierunek value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\KierunekType[] $kierunek
     * @return \app\modules\postal\sender\StructType\GetKierunkiResponse
     */
    public function setKierunek(?array $kierunek = null): self
    {
        // validation for constraint: array
        if ('' !== ($kierunekArrayErrorMessage = self::validateKierunekForArrayConstraintFromSetKierunek($kierunek))) {
            throw new InvalidArgumentException($kierunekArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($kierunek) && count($kierunek) > 1000) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1000', count($kierunek)), __LINE__);
        }
        $this->kierunek = $kierunek;
        
        return $this;
    }
    /**
     * Add item to kierunek value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\KierunekType $item
     * @return \app\modules\postal\sender\StructType\GetKierunkiResponse
     */
    public function addToKierunek(\app\modules\postal\sender\StructType\KierunekType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\sender\StructType\KierunekType) {
            throw new InvalidArgumentException(sprintf('The kierunek property can only contain items of type \app\modules\postal\sender\StructType\KierunekType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($this->kierunek) && count($this->kierunek) >= 1000) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1000', count($this->kierunek)), __LINE__);
        }
        $this->kierunek[] = $item;
        
        return $this;
    }
    /**
     * Get error value
     * @return \app\modules\postal\sender\StructType\ErrorType[]
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
        foreach ($values as $getKierunkiResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getKierunkiResponseErrorItem instanceof \app\modules\postal\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($getKierunkiResponseErrorItem) ? get_class($getKierunkiResponseErrorItem) : sprintf('%s(%s)', gettype($getKierunkiResponseErrorItem), var_export($getKierunkiResponseErrorItem, true));
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
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\ErrorType[] $error
     * @return \app\modules\postal\sender\StructType\GetKierunkiResponse
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
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\ErrorType $item
     * @return \app\modules\postal\sender\StructType\GetKierunkiResponse
     */
    public function addToError(\app\modules\postal\sender\StructType\ErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\sender\StructType\ErrorType) {
            throw new InvalidArgumentException(sprintf('The error property can only contain items of type \app\modules\postal\sender\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->error[] = $item;
        
        return $this;
    }
}
