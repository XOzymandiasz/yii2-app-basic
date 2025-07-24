<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createEnvelopeBuforResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateEnvelopeBuforResponse extends AbstractStructBase
{
    /**
     * The createdBufor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\BuforType[]
     */
    protected ?array $createdBufor = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for createEnvelopeBuforResponse
     * @uses CreateEnvelopeBuforResponse::setCreatedBufor()
     * @uses CreateEnvelopeBuforResponse::setError()
     * @param \app\modules\postal\sender\StructType\BuforType[] $createdBufor
     * @param \app\modules\postal\sender\StructType\ErrorType[] $error
     */
    public function __construct(?array $createdBufor = null, ?array $error = null)
    {
        $this
            ->setCreatedBufor($createdBufor)
            ->setError($error);
    }
    /**
     * Get createdBufor value
     * @return \app\modules\postal\sender\StructType\BuforType[]
     */
    public function getCreatedBufor(): ?array
    {
        return $this->createdBufor;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCreatedBufor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreatedBufor method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCreatedBuforForArrayConstraintFromSetCreatedBufor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createEnvelopeBuforResponseCreatedBuforItem) {
            // validation for constraint: itemType
            if (!$createEnvelopeBuforResponseCreatedBuforItem instanceof \app\modules\postal\sender\StructType\BuforType) {
                $invalidValues[] = is_object($createEnvelopeBuforResponseCreatedBuforItem) ? get_class($createEnvelopeBuforResponseCreatedBuforItem) : sprintf('%s(%s)', gettype($createEnvelopeBuforResponseCreatedBuforItem), var_export($createEnvelopeBuforResponseCreatedBuforItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The createdBufor property can only contain items of type \app\modules\postal\sender\StructType\BuforType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set createdBufor value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\BuforType[] $createdBufor
     * @return \app\modules\postal\sender\StructType\CreateEnvelopeBuforResponse
     */
    public function setCreatedBufor(?array $createdBufor = null): self
    {
        // validation for constraint: array
        if ('' !== ($createdBuforArrayErrorMessage = self::validateCreatedBuforForArrayConstraintFromSetCreatedBufor($createdBufor))) {
            throw new InvalidArgumentException($createdBuforArrayErrorMessage, __LINE__);
        }
        $this->createdBufor = $createdBufor;
        
        return $this;
    }
    /**
     * Add item to createdBufor value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\BuforType $item
     * @return \app\modules\postal\sender\StructType\CreateEnvelopeBuforResponse
     */
    public function addToCreatedBufor(\app\modules\postal\sender\StructType\BuforType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\sender\StructType\BuforType) {
            throw new InvalidArgumentException(sprintf('The createdBufor property can only contain items of type \app\modules\postal\sender\StructType\BuforType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->createdBufor[] = $item;
        
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
        foreach ($values as $createEnvelopeBuforResponseErrorItem) {
            // validation for constraint: itemType
            if (!$createEnvelopeBuforResponseErrorItem instanceof \app\modules\postal\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($createEnvelopeBuforResponseErrorItem) ? get_class($createEnvelopeBuforResponseErrorItem) : sprintf('%s(%s)', gettype($createEnvelopeBuforResponseErrorItem), var_export($createEnvelopeBuforResponseErrorItem, true));
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
     * @return \app\modules\postal\sender\StructType\CreateEnvelopeBuforResponse
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
     * @return \app\modules\postal\sender\StructType\CreateEnvelopeBuforResponse
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
