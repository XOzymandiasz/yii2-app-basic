<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for clearEnvelopeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClearEnvelopeResponse extends AbstractStructBase
{
    /**
     * The retval
     * @var bool|null
     */
    protected ?bool $retval = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for clearEnvelopeResponse
     * @param bool $retval
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType[] $error
     *@uses ClearEnvelopeResponse::setRetval()
     * @uses ClearEnvelopeResponse::setError()
     */
    public function __construct(?bool $retval = null, ?array $error = null)
    {
        $this
            ->setRetval($retval)
            ->setError($error);
    }
    /**
     * Get retval value
     * @return bool|null
     */
    public function getRetval(): ?bool
    {
        return $this->retval;
    }
    /**
     * Set retval value
     * @param bool $retval
     * @return \app\modules\postal\sender\StructType\ClearEnvelopeResponse
     */
    public function setRetval(?bool $retval = null): self
    {
        // validation for constraint: boolean
        if (!is_null($retval) && !is_bool($retval)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($retval, true), gettype($retval)), __LINE__);
        }
        $this->retval = $retval;
        
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
        foreach ($values as $clearEnvelopeResponseErrorItem) {
            // validation for constraint: itemType
            if (!$clearEnvelopeResponseErrorItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($clearEnvelopeResponseErrorItem) ? get_class($clearEnvelopeResponseErrorItem) : sprintf('%s(%s)', gettype($clearEnvelopeResponseErrorItem), var_export($clearEnvelopeResponseErrorItem, true));
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
     * @return \app\modules\postal\sender\StructType\ClearEnvelopeResponse
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
     * @return \app\modules\postal\sender\StructType\ClearEnvelopeResponse
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
