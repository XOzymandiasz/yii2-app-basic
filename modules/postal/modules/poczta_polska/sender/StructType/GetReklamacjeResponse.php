<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReklamacjeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetReklamacjeResponse extends AbstractStructBase
{
    /**
     * The reklamacja
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ReklamacjaRozpatrzonaType[]
     */
    protected ?array $reklamacja = null;
    /**
     * Constructor method for getReklamacjeResponse
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ReklamacjaRozpatrzonaType[] $reklamacja
     * @uses GetReklamacjeResponse::setReklamacja()
     */
    public function __construct(?array $reklamacja = null)
    {
        $this
            ->setReklamacja($reklamacja);
    }
    /**
     * Get reklamacja value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ReklamacjaRozpatrzonaType[]
     */
    public function getReklamacja(): ?array
    {
        return $this->reklamacja;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setReklamacja method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReklamacja method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReklamacjaForArrayConstraintFromSetReklamacja(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getReklamacjeResponseReklamacjaItem) {
            // validation for constraint: itemType
            if (!$getReklamacjeResponseReklamacjaItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ReklamacjaRozpatrzonaType) {
                $invalidValues[] = is_object($getReklamacjeResponseReklamacjaItem) ? get_class($getReklamacjeResponseReklamacjaItem) : sprintf('%s(%s)', gettype($getReklamacjeResponseReklamacjaItem), var_export($getReklamacjeResponseReklamacjaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The reklamacja property can only contain items of type \app\modules\postal\sender\StructType\ReklamacjaRozpatrzonaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set reklamacja value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ReklamacjaRozpatrzonaType[] $reklamacja
     * @return \app\modules\postal\sender\StructType\GetReklamacjeResponse
     *@throws InvalidArgumentException
     */
    public function setReklamacja(?array $reklamacja = null): self
    {
        // validation for constraint: array
        if ('' !== ($reklamacjaArrayErrorMessage = self::validateReklamacjaForArrayConstraintFromSetReklamacja($reklamacja))) {
            throw new InvalidArgumentException($reklamacjaArrayErrorMessage, __LINE__);
        }
        $this->reklamacja = $reklamacja;
        
        return $this;
    }
    /**
     * Add item to reklamacja value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ReklamacjaRozpatrzonaType $item
     * @return \app\modules\postal\sender\StructType\GetReklamacjeResponse
     *@throws InvalidArgumentException
     */
    public function addToReklamacja(\app\modules\postal\modules\poczta_polska\sender\StructType\ReklamacjaRozpatrzonaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ReklamacjaRozpatrzonaType) {
            throw new InvalidArgumentException(sprintf('The reklamacja property can only contain items of type \app\modules\postal\sender\StructType\ReklamacjaRozpatrzonaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->reklamacja[] = $item;
        
        return $this;
    }
}
