<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPlacowkaPocztowaResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPlacowkaPocztowaResponse extends AbstractStructBase
{
    /**
     * The placowka
     * Meta information extracted from the WSDL
     * - maxOccurs: 5000
     * @var \app\modules\postal\sender\StructType\PlacowkaPocztowaType[]
     */
    protected ?array $placowka = null;
    /**
     * Constructor method for getPlacowkaPocztowaResponse
     * @uses GetPlacowkaPocztowaResponse::setPlacowka()
     * @param \app\modules\postal\sender\StructType\PlacowkaPocztowaType[] $placowka
     */
    public function __construct(?array $placowka = null)
    {
        $this
            ->setPlacowka($placowka);
    }
    /**
     * Get placowka value
     * @return \app\modules\postal\sender\StructType\PlacowkaPocztowaType[]
     */
    public function getPlacowka(): ?array
    {
        return $this->placowka;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPlacowka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPlacowka method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePlacowkaForArrayConstraintFromSetPlacowka(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPlacowkaPocztowaResponsePlacowkaItem) {
            // validation for constraint: itemType
            if (!$getPlacowkaPocztowaResponsePlacowkaItem instanceof \app\modules\postal\sender\StructType\PlacowkaPocztowaType) {
                $invalidValues[] = is_object($getPlacowkaPocztowaResponsePlacowkaItem) ? get_class($getPlacowkaPocztowaResponsePlacowkaItem) : sprintf('%s(%s)', gettype($getPlacowkaPocztowaResponsePlacowkaItem), var_export($getPlacowkaPocztowaResponsePlacowkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The placowka property can only contain items of type \app\modules\postal\sender\StructType\PlacowkaPocztowaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set placowka value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\PlacowkaPocztowaType[] $placowka
     * @return \app\modules\postal\sender\StructType\GetPlacowkaPocztowaResponse
     */
    public function setPlacowka(?array $placowka = null): self
    {
        // validation for constraint: array
        if ('' !== ($placowkaArrayErrorMessage = self::validatePlacowkaForArrayConstraintFromSetPlacowka($placowka))) {
            throw new InvalidArgumentException($placowkaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5000)
        if (is_array($placowka) && count($placowka) > 5000) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5000', count($placowka)), __LINE__);
        }
        $this->placowka = $placowka;
        
        return $this;
    }
    /**
     * Add item to placowka value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\PlacowkaPocztowaType $item
     * @return \app\modules\postal\sender\StructType\GetPlacowkaPocztowaResponse
     */
    public function addToPlacowka(\app\modules\postal\sender\StructType\PlacowkaPocztowaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\sender\StructType\PlacowkaPocztowaType) {
            throw new InvalidArgumentException(sprintf('The placowka property can only contain items of type \app\modules\postal\sender\StructType\PlacowkaPocztowaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5000)
        if (is_array($this->placowka) && count($this->placowka) >= 5000) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5000', count($this->placowka)), __LINE__);
        }
        $this->placowka[] = $item;
        
        return $this;
    }
}
