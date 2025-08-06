<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdditionalActivitiesListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAdditionalActivitiesListResponse extends AbstractStructBase
{
    /**
     * The additionalActivity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\AdditionalActivityType[]
     */
    protected ?array $additionalActivity = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getAdditionalActivitiesListResponse
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AdditionalActivityType[] $additionalActivity
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[] $error
     * @uses GetAdditionalActivitiesListResponse::setAdditionalActivity()
     * @uses GetAdditionalActivitiesListResponse::setError()
     */
    public function __construct(?array $additionalActivity = null, ?array $error = null)
    {
        $this
            ->setAdditionalActivity($additionalActivity)
            ->setError($error);
    }
    /**
     * Get additionalActivity value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\AdditionalActivityType[]
     */
    public function getAdditionalActivity(): ?array
    {
        return $this->additionalActivity;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAdditionalActivity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalActivity method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalActivityForArrayConstraintFromSetAdditionalActivity(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdditionalActivitiesListResponseAdditionalActivityItem) {
            // validation for constraint: itemType
            if (!$getAdditionalActivitiesListResponseAdditionalActivityItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\AdditionalActivityType) {
                $invalidValues[] = is_object($getAdditionalActivitiesListResponseAdditionalActivityItem) ? get_class($getAdditionalActivitiesListResponseAdditionalActivityItem) : sprintf('%s(%s)', gettype($getAdditionalActivitiesListResponseAdditionalActivityItem), var_export($getAdditionalActivitiesListResponseAdditionalActivityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The additionalActivity property can only contain items of type \app\modules\postal\sender\StructType\AdditionalActivityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set additionalActivity value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AdditionalActivityType[] $additionalActivity
     * @return \app\modules\postal\sender\StructType\GetAdditionalActivitiesListResponse
     *@throws InvalidArgumentException
     */
    public function setAdditionalActivity(?array $additionalActivity = null): self
    {
        // validation for constraint: array
        if ('' !== ($additionalActivityArrayErrorMessage = self::validateAdditionalActivityForArrayConstraintFromSetAdditionalActivity($additionalActivity))) {
            throw new InvalidArgumentException($additionalActivityArrayErrorMessage, __LINE__);
        }
        $this->additionalActivity = $additionalActivity;
        
        return $this;
    }
    /**
     * Add item to additionalActivity value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AdditionalActivityType $item
     * @return \app\modules\postal\sender\StructType\GetAdditionalActivitiesListResponse
     *@throws InvalidArgumentException
     */
    public function addToAdditionalActivity(\app\modules\postal\modules\poczta_polska\sender\StructType\AdditionalActivityType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\AdditionalActivityType) {
            throw new InvalidArgumentException(sprintf('The additionalActivity property can only contain items of type \app\modules\postal\sender\StructType\AdditionalActivityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->additionalActivity[] = $item;
        
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
        foreach ($values as $getAdditionalActivitiesListResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getAdditionalActivitiesListResponseErrorItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($getAdditionalActivitiesListResponseErrorItem) ? get_class($getAdditionalActivitiesListResponseErrorItem) : sprintf('%s(%s)', gettype($getAdditionalActivitiesListResponseErrorItem), var_export($getAdditionalActivitiesListResponseErrorItem, true));
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
     * @return \app\modules\postal\sender\StructType\GetAdditionalActivitiesListResponse
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
     * @return \app\modules\postal\sender\StructType\GetAdditionalActivitiesListResponse
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
