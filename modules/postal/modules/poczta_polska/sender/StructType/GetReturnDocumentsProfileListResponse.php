<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReturnDocumentsProfileListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetReturnDocumentsProfileListResponse extends AbstractStructBase
{
    /**
     * The profile
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType[]
     */
    protected ?array $profile = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getReturnDocumentsProfileListResponse
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType[] $profile
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[] $error
     * @uses GetReturnDocumentsProfileListResponse::setProfile()
     * @uses GetReturnDocumentsProfileListResponse::setError()
     */
    public function __construct(?array $profile = null, ?array $error = null)
    {
        $this
            ->setProfile($profile)
            ->setError($error);
    }
    /**
     * Get profile value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType[]
     */
    public function getProfile(): ?array
    {
        return $this->profile;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProfile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProfile method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProfileForArrayConstraintFromSetProfile(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getReturnDocumentsProfileListResponseProfileItem) {
            // validation for constraint: itemType
            if (!$getReturnDocumentsProfileListResponseProfileItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType) {
                $invalidValues[] = is_object($getReturnDocumentsProfileListResponseProfileItem) ? get_class($getReturnDocumentsProfileListResponseProfileItem) : sprintf('%s(%s)', gettype($getReturnDocumentsProfileListResponseProfileItem), var_export($getReturnDocumentsProfileListResponseProfileItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The profile property can only contain items of type \app\modules\postal\sender\StructType\ReturnDocumentProfileType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set profile value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType[] $profile
     * @return \app\modules\postal\sender\StructType\GetReturnDocumentsProfileListResponse
     *@throws InvalidArgumentException
     */
    public function setProfile(?array $profile = null): self
    {
        // validation for constraint: array
        if ('' !== ($profileArrayErrorMessage = self::validateProfileForArrayConstraintFromSetProfile($profile))) {
            throw new InvalidArgumentException($profileArrayErrorMessage, __LINE__);
        }
        $this->profile = $profile;
        
        return $this;
    }
    /**
     * Add item to profile value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType $item
     * @return \app\modules\postal\sender\StructType\GetReturnDocumentsProfileListResponse
     *@throws InvalidArgumentException
     */
    public function addToProfile(\app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType) {
            throw new InvalidArgumentException(sprintf('The profile property can only contain items of type \app\modules\postal\sender\StructType\ReturnDocumentProfileType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->profile[] = $item;
        
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
        foreach ($values as $getReturnDocumentsProfileListResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getReturnDocumentsProfileListResponseErrorItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($getReturnDocumentsProfileListResponseErrorItem) ? get_class($getReturnDocumentsProfileListResponseErrorItem) : sprintf('%s(%s)', gettype($getReturnDocumentsProfileListResponseErrorItem), var_export($getReturnDocumentsProfileListResponseErrorItem, true));
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
     * @return \app\modules\postal\sender\StructType\GetReturnDocumentsProfileListResponse
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
     * @return \app\modules\postal\sender\StructType\GetReturnDocumentsProfileListResponse
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
