<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getUrzedyWydajaceEPrzesylkiResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUrzedyWydajaceEPrzesylkiResponse extends AbstractStructBase
{
    /**
     * The urzadWydaniaEPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType[]
     */
    protected ?array $urzadWydaniaEPrzesylki = null;
    /**
     * Constructor method for getUrzedyWydajaceEPrzesylkiResponse
     * @uses GetUrzedyWydajaceEPrzesylkiResponse::setUrzadWydaniaEPrzesylki()
     * @param \app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType[] $urzadWydaniaEPrzesylki
     */
    public function __construct(?array $urzadWydaniaEPrzesylki = null)
    {
        $this
            ->setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki);
    }
    /**
     * Get urzadWydaniaEPrzesylki value
     * @return \app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType[]
     */
    public function getUrzadWydaniaEPrzesylki(): ?array
    {
        return $this->urzadWydaniaEPrzesylki;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUrzadWydaniaEPrzesylki method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUrzadWydaniaEPrzesylki method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUrzadWydaniaEPrzesylkiForArrayConstraintFromSetUrzadWydaniaEPrzesylki(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUrzedyWydajaceEPrzesylkiResponseUrzadWydaniaEPrzesylkiItem) {
            // validation for constraint: itemType
            if (!$getUrzedyWydajaceEPrzesylkiResponseUrzadWydaniaEPrzesylkiItem instanceof \app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType) {
                $invalidValues[] = is_object($getUrzedyWydajaceEPrzesylkiResponseUrzadWydaniaEPrzesylkiItem) ? get_class($getUrzedyWydajaceEPrzesylkiResponseUrzadWydaniaEPrzesylkiItem) : sprintf('%s(%s)', gettype($getUrzedyWydajaceEPrzesylkiResponseUrzadWydaniaEPrzesylkiItem), var_export($getUrzedyWydajaceEPrzesylkiResponseUrzadWydaniaEPrzesylkiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The urzadWydaniaEPrzesylki property can only contain items of type \app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set urzadWydaniaEPrzesylki value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType[] $urzadWydaniaEPrzesylki
     * @return \app\modules\postal\sender\StructType\GetUrzedyWydajaceEPrzesylkiResponse
     */
    public function setUrzadWydaniaEPrzesylki(?array $urzadWydaniaEPrzesylki = null): self
    {
        // validation for constraint: array
        if ('' !== ($urzadWydaniaEPrzesylkiArrayErrorMessage = self::validateUrzadWydaniaEPrzesylkiForArrayConstraintFromSetUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki))) {
            throw new InvalidArgumentException($urzadWydaniaEPrzesylkiArrayErrorMessage, __LINE__);
        }
        $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
        
        return $this;
    }
    /**
     * Add item to urzadWydaniaEPrzesylki value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType $item
     * @return \app\modules\postal\sender\StructType\GetUrzedyWydajaceEPrzesylkiResponse
     */
    public function addToUrzadWydaniaEPrzesylki(\app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType) {
            throw new InvalidArgumentException(sprintf('The urzadWydaniaEPrzesylki property can only contain items of type \app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->urzadWydaniaEPrzesylki[] = $item;
        
        return $this;
    }
}
