<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAddressLabelResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAddressLabelResponse extends AbstractStructBase
{
    /**
     * The content
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\AddressLabelContent[]
     */
    protected ?array $content = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getAddressLabelResponse
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AddressLabelContent[] $content
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[] $error
     *@uses GetAddressLabelResponse::setContent()
     * @uses GetAddressLabelResponse::setError()
     */
    public function __construct(?array $content = null, ?array $error = null)
    {
        $this
            ->setContent($content)
            ->setError($error);
    }
    /**
     * Get content value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\AddressLabelContent[]
     */
    public function getContent(): ?array
    {
        return $this->content;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setContent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContent method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContentForArrayConstraintFromSetContent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAddressLabelResponseContentItem) {
            // validation for constraint: itemType
            if (!$getAddressLabelResponseContentItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\AddressLabelContent) {
                $invalidValues[] = is_object($getAddressLabelResponseContentItem) ? get_class($getAddressLabelResponseContentItem) : sprintf('%s(%s)', gettype($getAddressLabelResponseContentItem), var_export($getAddressLabelResponseContentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The content property can only contain items of type \app\modules\postal\sender\StructType\AddressLabelContent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set content value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AddressLabelContent[] $content
     * @return \app\modules\postal\sender\StructType\GetAddressLabelResponse
     *@throws InvalidArgumentException
     */
    public function setContent(?array $content = null): self
    {
        // validation for constraint: array
        if ('' !== ($contentArrayErrorMessage = self::validateContentForArrayConstraintFromSetContent($content))) {
            throw new InvalidArgumentException($contentArrayErrorMessage, __LINE__);
        }
        $this->content = $content;
        
        return $this;
    }
    /**
     * Add item to content value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AddressLabelContent $item
     * @return \app\modules\postal\sender\StructType\GetAddressLabelResponse
     *@throws InvalidArgumentException
     */
    public function addToContent(\app\modules\postal\modules\poczta_polska\sender\StructType\AddressLabelContent $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\AddressLabelContent) {
            throw new InvalidArgumentException(sprintf('The content property can only contain items of type \app\modules\postal\sender\StructType\AddressLabelContent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->content[] = $item;
        
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
        foreach ($values as $getAddressLabelResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getAddressLabelResponseErrorItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($getAddressLabelResponseErrorItem) ? get_class($getAddressLabelResponseErrorItem) : sprintf('%s(%s)', gettype($getAddressLabelResponseErrorItem), var_export($getAddressLabelResponseErrorItem, true));
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
     * @return \app\modules\postal\sender\StructType\GetAddressLabelResponse
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
     * @return \app\modules\postal\sender\StructType\GetAddressLabelResponse
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
