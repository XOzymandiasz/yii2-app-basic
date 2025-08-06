<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPlacowkiPocztoweResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPlacowkiPocztoweResponse extends AbstractStructBase
{
    /**
     * The placowka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\PlacowkaPocztowaType[]
     */
    protected ?array $placowka = null;
    /**
     * Constructor method for getPlacowkiPocztoweResponse
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PlacowkaPocztowaType[] $placowka
     * @uses GetPlacowkiPocztoweResponse::setPlacowka()
     */
    public function __construct(?array $placowka = null)
    {
        $this
            ->setPlacowka($placowka);
    }
    /**
     * Get placowka value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\PlacowkaPocztowaType[]
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
        foreach ($values as $getPlacowkiPocztoweResponsePlacowkaItem) {
            // validation for constraint: itemType
            if (!$getPlacowkiPocztoweResponsePlacowkaItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\PlacowkaPocztowaType) {
                $invalidValues[] = is_object($getPlacowkiPocztoweResponsePlacowkaItem) ? get_class($getPlacowkiPocztoweResponsePlacowkaItem) : sprintf('%s(%s)', gettype($getPlacowkiPocztoweResponsePlacowkaItem), var_export($getPlacowkiPocztoweResponsePlacowkaItem, true));
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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PlacowkaPocztowaType[] $placowka
     * @return \app\modules\postal\sender\StructType\GetPlacowkiPocztoweResponse
     *@throws InvalidArgumentException
     */
    public function setPlacowka(?array $placowka = null): self
    {
        // validation for constraint: array
        if ('' !== ($placowkaArrayErrorMessage = self::validatePlacowkaForArrayConstraintFromSetPlacowka($placowka))) {
            throw new InvalidArgumentException($placowkaArrayErrorMessage, __LINE__);
        }
        $this->placowka = $placowka;
        
        return $this;
    }
    /**
     * Add item to placowka value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PlacowkaPocztowaType $item
     * @return \app\modules\postal\sender\StructType\GetPlacowkiPocztoweResponse
     *@throws InvalidArgumentException
     */
    public function addToPlacowka(\app\modules\postal\modules\poczta_polska\sender\StructType\PlacowkaPocztowaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\PlacowkaPocztowaType) {
            throw new InvalidArgumentException(sprintf('The placowka property can only contain items of type \app\modules\postal\sender\StructType\PlacowkaPocztowaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->placowka[] = $item;
        
        return $this;
    }
}
