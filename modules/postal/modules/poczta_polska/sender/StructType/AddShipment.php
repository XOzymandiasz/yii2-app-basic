<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addShipment StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddShipment extends AbstractStructBase
{
    /**
     * The przesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType[]
     */
    protected ?array $przesylki = null;
    /**
     * The idBufor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idBufor = null;
    /**
     * Constructor method for addShipment
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType[] $przesylki
     * @param int $idBufor
     * @uses AddShipment::setPrzesylki()
     * @uses AddShipment::setIdBufor()
     */
    public function __construct(?array $przesylki = null, ?int $idBufor = null)
    {
        $this
            ->setPrzesylki($przesylki)
            ->setIdBufor($idBufor);
    }
    /**
     * Get przesylki value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType[]
     */
    public function getPrzesylki(): ?array
    {
        return $this->przesylki;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPrzesylki method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrzesylki method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrzesylkiForArrayConstraintFromSetPrzesylki(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addShipmentPrzesylkiItem) {
            // validation for constraint: itemType
            if (!$addShipmentPrzesylkiItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType) {
                $invalidValues[] = is_object($addShipmentPrzesylkiItem) ? get_class($addShipmentPrzesylkiItem) : sprintf('%s(%s)', gettype($addShipmentPrzesylkiItem), var_export($addShipmentPrzesylkiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The przesylki property can only contain items of type \app\modules\postal\sender\StructType\PrzesylkaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set przesylki value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType[] $przesylki
     * @return \app\modules\postal\sender\StructType\AddShipment
     *@throws InvalidArgumentException
     */
    public function setPrzesylki(?array $przesylki = null): self
    {
        // validation for constraint: array
        if ('' !== ($przesylkiArrayErrorMessage = self::validatePrzesylkiForArrayConstraintFromSetPrzesylki($przesylki))) {
            throw new InvalidArgumentException($przesylkiArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($przesylki) && count($przesylki) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($przesylki)), __LINE__);
        }
        $this->przesylki = $przesylki;
        
        return $this;
    }
    /**
     * Add item to przesylki value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType $item
     * @return \app\modules\postal\sender\StructType\AddShipment
     *@throws InvalidArgumentException
     */
    public function addToPrzesylki(\app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType) {
            throw new InvalidArgumentException(sprintf('The przesylki property can only contain items of type \app\modules\postal\sender\StructType\PrzesylkaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->przesylki) && count($this->przesylki) >= 500) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->przesylki)), __LINE__);
        }
        $this->przesylki[] = $item;
        
        return $this;
    }
    /**
     * Get idBufor value
     * @return int|null
     */
    public function getIdBufor(): ?int
    {
        return $this->idBufor;
    }
    /**
     * Set idBufor value
     * @param int $idBufor
     * @return \app\modules\postal\sender\StructType\AddShipment
     */
    public function setIdBufor(?int $idBufor = null): self
    {
        // validation for constraint: int
        if (!is_null($idBufor) && !(is_int($idBufor) || ctype_digit($idBufor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idBufor, true), gettype($idBufor)), __LINE__);
        }
        $this->idBufor = $idBufor;
        
        return $this;
    }
}
