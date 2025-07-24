<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isMiejscowa StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IsMiejscowa extends AbstractStructBase
{
    /**
     * The trasaRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * @var \app\modules\postal\sender\StructType\TrasaRequestType[]
     */
    protected ?array $trasaRequest = null;
    /**
     * Constructor method for isMiejscowa
     * @uses IsMiejscowa::setTrasaRequest()
     * @param \app\modules\postal\sender\StructType\TrasaRequestType[] $trasaRequest
     */
    public function __construct(?array $trasaRequest = null)
    {
        $this
            ->setTrasaRequest($trasaRequest);
    }
    /**
     * Get trasaRequest value
     * @return \app\modules\postal\sender\StructType\TrasaRequestType[]
     */
    public function getTrasaRequest(): ?array
    {
        return $this->trasaRequest;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTrasaRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTrasaRequest method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTrasaRequestForArrayConstraintFromSetTrasaRequest(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $isMiejscowaTrasaRequestItem) {
            // validation for constraint: itemType
            if (!$isMiejscowaTrasaRequestItem instanceof \app\modules\postal\sender\StructType\TrasaRequestType) {
                $invalidValues[] = is_object($isMiejscowaTrasaRequestItem) ? get_class($isMiejscowaTrasaRequestItem) : sprintf('%s(%s)', gettype($isMiejscowaTrasaRequestItem), var_export($isMiejscowaTrasaRequestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The trasaRequest property can only contain items of type \app\modules\postal\sender\StructType\TrasaRequestType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set trasaRequest value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\TrasaRequestType[] $trasaRequest
     * @return \app\modules\postal\sender\StructType\IsMiejscowa
     */
    public function setTrasaRequest(?array $trasaRequest = null): self
    {
        // validation for constraint: array
        if ('' !== ($trasaRequestArrayErrorMessage = self::validateTrasaRequestForArrayConstraintFromSetTrasaRequest($trasaRequest))) {
            throw new InvalidArgumentException($trasaRequestArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($trasaRequest) && count($trasaRequest) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($trasaRequest)), __LINE__);
        }
        $this->trasaRequest = $trasaRequest;
        
        return $this;
    }
    /**
     * Add item to trasaRequest value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\TrasaRequestType $item
     * @return \app\modules\postal\sender\StructType\IsMiejscowa
     */
    public function addToTrasaRequest(\app\modules\postal\sender\StructType\TrasaRequestType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\sender\StructType\TrasaRequestType) {
            throw new InvalidArgumentException(sprintf('The trasaRequest property can only contain items of type \app\modules\postal\sender\StructType\TrasaRequestType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->trasaRequest) && count($this->trasaRequest) >= 500) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->trasaRequest)), __LINE__);
        }
        $this->trasaRequest[] = $item;
        
        return $this;
    }
}
