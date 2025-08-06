<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for produktyInKartaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProduktyInKartaType extends AbstractStructBase
{
    /**
     * The produktInKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ProduktInKartaType[]
     */
    protected ?array $produktInKarta = null;
    /**
     * Constructor method for produktyInKartaType
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ProduktInKartaType[] $produktInKarta
     * @uses ProduktyInKartaType::setProduktInKarta()
     */
    public function __construct(?array $produktInKarta = null)
    {
        $this
            ->setProduktInKarta($produktInKarta);
    }
    /**
     * Get produktInKarta value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ProduktInKartaType[]
     */
    public function getProduktInKarta(): ?array
    {
        return $this->produktInKarta;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProduktInKarta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProduktInKarta method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProduktInKartaForArrayConstraintFromSetProduktInKarta(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $produktyInKartaTypeProduktInKartaItem) {
            // validation for constraint: itemType
            if (!$produktyInKartaTypeProduktInKartaItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ProduktInKartaType) {
                $invalidValues[] = is_object($produktyInKartaTypeProduktInKartaItem) ? get_class($produktyInKartaTypeProduktInKartaItem) : sprintf('%s(%s)', gettype($produktyInKartaTypeProduktInKartaItem), var_export($produktyInKartaTypeProduktInKartaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The produktInKarta property can only contain items of type \app\modules\postal\sender\StructType\ProduktInKartaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set produktInKarta value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ProduktInKartaType[] $produktInKarta
     * @return \app\modules\postal\sender\StructType\ProduktyInKartaType
     *@throws InvalidArgumentException
     */
    public function setProduktInKarta(?array $produktInKarta = null): self
    {
        // validation for constraint: array
        if ('' !== ($produktInKartaArrayErrorMessage = self::validateProduktInKartaForArrayConstraintFromSetProduktInKarta($produktInKarta))) {
            throw new InvalidArgumentException($produktInKartaArrayErrorMessage, __LINE__);
        }
        $this->produktInKarta = $produktInKarta;
        
        return $this;
    }
    /**
     * Add item to produktInKarta value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ProduktInKartaType $item
     * @return \app\modules\postal\sender\StructType\ProduktyInKartaType
     *@throws InvalidArgumentException
     */
    public function addToProduktInKarta(\app\modules\postal\modules\poczta_polska\sender\StructType\ProduktInKartaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\ProduktInKartaType) {
            throw new InvalidArgumentException(sprintf('The produktInKarta property can only contain items of type \app\modules\postal\sender\StructType\ProduktInKartaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->produktInKarta[] = $item;
        
        return $this;
    }
}
