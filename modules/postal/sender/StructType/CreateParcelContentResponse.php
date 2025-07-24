<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createParcelContentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateParcelContentResponse extends AbstractStructBase
{
    /**
     * The parcelContent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\ParcelContentType[]
     */
    protected ?array $parcelContent = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for createParcelContentResponse
     * @uses CreateParcelContentResponse::setParcelContent()
     * @uses CreateParcelContentResponse::setError()
     * @param \app\modules\postal\sender\StructType\ParcelContentType[] $parcelContent
     * @param \app\modules\postal\sender\StructType\ErrorType[] $error
     */
    public function __construct(?array $parcelContent = null, ?array $error = null)
    {
        $this
            ->setParcelContent($parcelContent)
            ->setError($error);
    }
    /**
     * Get parcelContent value
     * @return \app\modules\postal\sender\StructType\ParcelContentType[]
     */
    public function getParcelContent(): ?array
    {
        return $this->parcelContent;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setParcelContent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelContent method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelContentForArrayConstraintFromSetParcelContent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createParcelContentResponseParcelContentItem) {
            // validation for constraint: itemType
            if (!$createParcelContentResponseParcelContentItem instanceof \app\modules\postal\sender\StructType\ParcelContentType) {
                $invalidValues[] = is_object($createParcelContentResponseParcelContentItem) ? get_class($createParcelContentResponseParcelContentItem) : sprintf('%s(%s)', gettype($createParcelContentResponseParcelContentItem), var_export($createParcelContentResponseParcelContentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The parcelContent property can only contain items of type \app\modules\postal\sender\StructType\ParcelContentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set parcelContent value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\ParcelContentType[] $parcelContent
     * @return \app\modules\postal\sender\StructType\CreateParcelContentResponse
     */
    public function setParcelContent(?array $parcelContent = null): self
    {
        // validation for constraint: array
        if ('' !== ($parcelContentArrayErrorMessage = self::validateParcelContentForArrayConstraintFromSetParcelContent($parcelContent))) {
            throw new InvalidArgumentException($parcelContentArrayErrorMessage, __LINE__);
        }
        $this->parcelContent = $parcelContent;
        
        return $this;
    }
    /**
     * Add item to parcelContent value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\ParcelContentType $item
     * @return \app\modules\postal\sender\StructType\CreateParcelContentResponse
     */
    public function addToParcelContent(\app\modules\postal\sender\StructType\ParcelContentType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\sender\StructType\ParcelContentType) {
            throw new InvalidArgumentException(sprintf('The parcelContent property can only contain items of type \app\modules\postal\sender\StructType\ParcelContentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->parcelContent[] = $item;
        
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
        foreach ($values as $createParcelContentResponseErrorItem) {
            // validation for constraint: itemType
            if (!$createParcelContentResponseErrorItem instanceof \app\modules\postal\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($createParcelContentResponseErrorItem) ? get_class($createParcelContentResponseErrorItem) : sprintf('%s(%s)', gettype($createParcelContentResponseErrorItem), var_export($createParcelContentResponseErrorItem, true));
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
     * @return \app\modules\postal\sender\StructType\CreateParcelContentResponse
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
     * @return \app\modules\postal\sender\StructType\CreateParcelContentResponse
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
