<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeContentShortResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeContentShortResponse extends AbstractStructBase
{
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType[]
     */
    protected ?array $przesylka = null;
    /**
     * Constructor method for getEnvelopeContentShortResponse
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType[] $przesylka
     * @uses GetEnvelopeContentShortResponse::setPrzesylka()
     */
    public function __construct(?array $przesylka = null)
    {
        $this
            ->setPrzesylka($przesylka);
    }
    /**
     * Get przesylka value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType[]
     */
    public function getPrzesylka(): ?array
    {
        return $this->przesylka;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrzesylka method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrzesylkaForArrayConstraintFromSetPrzesylka(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEnvelopeContentShortResponsePrzesylkaItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeContentShortResponsePrzesylkaItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType) {
                $invalidValues[] = is_object($getEnvelopeContentShortResponsePrzesylkaItem) ? get_class($getEnvelopeContentShortResponsePrzesylkaItem) : sprintf('%s(%s)', gettype($getEnvelopeContentShortResponsePrzesylkaItem), var_export($getEnvelopeContentShortResponsePrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The przesylka property can only contain items of type \app\modules\postal\sender\StructType\PrzesylkaShortType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set przesylka value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType[] $przesylka
     * @return \app\modules\postal\sender\StructType\GetEnvelopeContentShortResponse
     *@throws InvalidArgumentException
     */
    public function setPrzesylka(?array $przesylka = null): self
    {
        // validation for constraint: array
        if ('' !== ($przesylkaArrayErrorMessage = self::validatePrzesylkaForArrayConstraintFromSetPrzesylka($przesylka))) {
            throw new InvalidArgumentException($przesylkaArrayErrorMessage, __LINE__);
        }
        $this->przesylka = $przesylka;
        
        return $this;
    }
    /**
     * Add item to przesylka value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType $item
     * @return \app\modules\postal\sender\StructType\GetEnvelopeContentShortResponse
     *@throws InvalidArgumentException
     */
    public function addToPrzesylka(\app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType) {
            throw new InvalidArgumentException(sprintf('The przesylka property can only contain items of type \app\modules\postal\sender\StructType\PrzesylkaShortType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->przesylka[] = $item;
        
        return $this;
    }
}
