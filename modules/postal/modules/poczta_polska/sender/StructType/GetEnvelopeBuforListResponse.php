<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeBuforListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeBuforListResponse extends AbstractStructBase
{
    /**
     * The bufor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\BuforType[]
     */
    protected ?array $bufor = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getEnvelopeBuforListResponse
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\BuforType[] $bufor
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[] $error
     * @uses GetEnvelopeBuforListResponse::setBufor()
     * @uses GetEnvelopeBuforListResponse::setError()
     */
    public function __construct(?array $bufor = null, ?array $error = null)
    {
        $this
            ->setBufor($bufor)
            ->setError($error);
    }
    /**
     * Get bufor value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\BuforType[]
     */
    public function getBufor(): ?array
    {
        return $this->bufor;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBufor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBufor method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuforForArrayConstraintFromSetBufor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEnvelopeBuforListResponseBuforItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeBuforListResponseBuforItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\BuforType) {
                $invalidValues[] = is_object($getEnvelopeBuforListResponseBuforItem) ? get_class($getEnvelopeBuforListResponseBuforItem) : sprintf('%s(%s)', gettype($getEnvelopeBuforListResponseBuforItem), var_export($getEnvelopeBuforListResponseBuforItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bufor property can only contain items of type \app\modules\postal\sender\StructType\BuforType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set bufor value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\BuforType[] $bufor
     * @return \app\modules\postal\sender\StructType\GetEnvelopeBuforListResponse
     *@throws InvalidArgumentException
     */
    public function setBufor(?array $bufor = null): self
    {
        // validation for constraint: array
        if ('' !== ($buforArrayErrorMessage = self::validateBuforForArrayConstraintFromSetBufor($bufor))) {
            throw new InvalidArgumentException($buforArrayErrorMessage, __LINE__);
        }
        $this->bufor = $bufor;
        
        return $this;
    }
    /**
     * Add item to bufor value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\BuforType $item
     * @return \app\modules\postal\sender\StructType\GetEnvelopeBuforListResponse
     *@throws InvalidArgumentException
     */
    public function addToBufor(\app\modules\postal\modules\poczta_polska\sender\StructType\BuforType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\BuforType) {
            throw new InvalidArgumentException(sprintf('The bufor property can only contain items of type \app\modules\postal\sender\StructType\BuforType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->bufor[] = $item;
        
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
        foreach ($values as $getEnvelopeBuforListResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeBuforListResponseErrorItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($getEnvelopeBuforListResponseErrorItem) ? get_class($getEnvelopeBuforListResponseErrorItem) : sprintf('%s(%s)', gettype($getEnvelopeBuforListResponseErrorItem), var_export($getEnvelopeBuforListResponseErrorItem, true));
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
     * @return \app\modules\postal\sender\StructType\GetEnvelopeBuforListResponse
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
     * @return \app\modules\postal\sender\StructType\GetEnvelopeBuforListResponse
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
