<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWplatyCKPResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetWplatyCKPResponse extends AbstractStructBase
{
    /**
     * The wplaty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\WplataCKPType[]
     */
    protected ?array $wplaty = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getWplatyCKPResponse
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\WplataCKPType[] $wplaty
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[] $error
     *@uses GetWplatyCKPResponse::setWplaty()
     * @uses GetWplatyCKPResponse::setError()
     */
    public function __construct(?array $wplaty = null, ?array $error = null)
    {
        $this
            ->setWplaty($wplaty)
            ->setError($error);
    }
    /**
     * Get wplaty value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\WplataCKPType[]
     */
    public function getWplaty(): ?array
    {
        return $this->wplaty;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setWplaty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWplaty method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWplatyForArrayConstraintFromSetWplaty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getWplatyCKPResponseWplatyItem) {
            // validation for constraint: itemType
            if (!$getWplatyCKPResponseWplatyItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\WplataCKPType) {
                $invalidValues[] = is_object($getWplatyCKPResponseWplatyItem) ? get_class($getWplatyCKPResponseWplatyItem) : sprintf('%s(%s)', gettype($getWplatyCKPResponseWplatyItem), var_export($getWplatyCKPResponseWplatyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The wplaty property can only contain items of type \app\modules\postal\sender\StructType\WplataCKPType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set wplaty value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\WplataCKPType[] $wplaty
     * @return \app\modules\postal\sender\StructType\GetWplatyCKPResponse
     *@throws InvalidArgumentException
     */
    public function setWplaty(?array $wplaty = null): self
    {
        // validation for constraint: array
        if ('' !== ($wplatyArrayErrorMessage = self::validateWplatyForArrayConstraintFromSetWplaty($wplaty))) {
            throw new InvalidArgumentException($wplatyArrayErrorMessage, __LINE__);
        }
        $this->wplaty = $wplaty;
        
        return $this;
    }
    /**
     * Add item to wplaty value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\WplataCKPType $item
     * @return \app\modules\postal\sender\StructType\GetWplatyCKPResponse
     *@throws InvalidArgumentException
     */
    public function addToWplaty(\app\modules\postal\modules\poczta_polska\sender\StructType\WplataCKPType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\WplataCKPType) {
            throw new InvalidArgumentException(sprintf('The wplaty property can only contain items of type \app\modules\postal\sender\StructType\WplataCKPType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->wplaty[] = $item;
        
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
        foreach ($values as $getWplatyCKPResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getWplatyCKPResponseErrorItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($getWplatyCKPResponseErrorItem) ? get_class($getWplatyCKPResponseErrorItem) : sprintf('%s(%s)', gettype($getWplatyCKPResponseErrorItem), var_export($getWplatyCKPResponseErrorItem, true));
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
     * @return \app\modules\postal\sender\StructType\GetWplatyCKPResponse
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
     * @return \app\modules\postal\sender\StructType\GetWplatyCKPResponse
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
