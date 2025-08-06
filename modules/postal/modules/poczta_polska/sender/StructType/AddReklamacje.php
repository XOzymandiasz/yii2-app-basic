<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addReklamacje StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddReklamacje extends AbstractStructBase
{
    /**
     * The reklamowanaPrzesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ReklamowanaPrzesylkaType[]
     */
    protected ?array $reklamowanaPrzesylka = null;
    /**
     * Constructor method for addReklamacje
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ReklamowanaPrzesylkaType[] $reklamowanaPrzesylka
     *@uses AddReklamacje::setReklamowanaPrzesylka()
     */
    public function __construct(?array $reklamowanaPrzesylka = null)
    {
        $this
            ->setReklamowanaPrzesylka($reklamowanaPrzesylka);
    }
    /**
     * Get reklamowanaPrzesylka value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ReklamowanaPrzesylkaType[]
     */
    public function getReklamowanaPrzesylka(): ?array
    {
        return $this->reklamowanaPrzesylka;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setReklamowanaPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReklamowanaPrzesylka method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReklamowanaPrzesylkaForArrayConstraintFromSetReklamowanaPrzesylka(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addReklamacjeReklamowanaPrzesylkaItem) {
            // validation for constraint: itemType
            if (!$addReklamacjeReklamowanaPrzesylkaItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ReklamowanaPrzesylkaType) {
                $invalidValues[] = is_object($addReklamacjeReklamowanaPrzesylkaItem) ? get_class($addReklamacjeReklamowanaPrzesylkaItem) : sprintf('%s(%s)', gettype($addReklamacjeReklamowanaPrzesylkaItem), var_export($addReklamacjeReklamowanaPrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The reklamowanaPrzesylka property can only contain items of type \app\modules\postal\sender\StructType\ReklamowanaPrzesylkaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set reklamowanaPrzesylka value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ReklamowanaPrzesylkaType[] $reklamowanaPrzesylka
     * @return \app\modules\postal\sender\StructType\AddReklamacje
     *@throws InvalidArgumentException
     */
    public function setReklamowanaPrzesylka(?array $reklamowanaPrzesylka = null): self
    {
        // validation for constraint: array
        if ('' !== ($reklamowanaPrzesylkaArrayErrorMessage = self::validateReklamowanaPrzesylkaForArrayConstraintFromSetReklamowanaPrzesylka($reklamowanaPrzesylka))) {
            throw new InvalidArgumentException($reklamowanaPrzesylkaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($reklamowanaPrzesylka) && count($reklamowanaPrzesylka) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($reklamowanaPrzesylka)), __LINE__);
        }
        $this->reklamowanaPrzesylka = $reklamowanaPrzesylka;
        
        return $this;
    }
    /**
     * Add item to reklamowanaPrzesylka value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ReklamowanaPrzesylkaType $item
     * @return \app\modules\postal\sender\StructType\AddReklamacje
     *@throws InvalidArgumentException
     */
    public function addToReklamowanaPrzesylka(\app\modules\postal\modules\poczta_polska\sender\StructType\ReklamowanaPrzesylkaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ReklamowanaPrzesylkaType) {
            throw new InvalidArgumentException(sprintf('The reklamowanaPrzesylka property can only contain items of type \app\modules\postal\sender\StructType\ReklamowanaPrzesylkaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->reklamowanaPrzesylka) && count($this->reklamowanaPrzesylka) >= 500) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->reklamowanaPrzesylka)), __LINE__);
        }
        $this->reklamowanaPrzesylka[] = $item;
        
        return $this;
    }
}
