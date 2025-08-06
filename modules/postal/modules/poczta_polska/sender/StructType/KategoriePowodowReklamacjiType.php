<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kategoriePowodowReklamacjiType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class KategoriePowodowReklamacjiType extends AbstractStructBase
{
    /**
     * The nazwa
     * @var string|null
     */
    protected ?string $nazwa = null;
    /**
     * The powodReklamacji
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\PowodReklamacjiType[]
     */
    protected ?array $powodReklamacji = null;
    /**
     * Constructor method for kategoriePowodowReklamacjiType
     * @param string $nazwa
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PowodReklamacjiType[] $powodReklamacji
     *@uses KategoriePowodowReklamacjiType::setNazwa()
     * @uses KategoriePowodowReklamacjiType::setPowodReklamacji()
     */
    public function __construct(?string $nazwa = null, ?array $powodReklamacji = null)
    {
        $this
            ->setNazwa($nazwa)
            ->setPowodReklamacji($powodReklamacji);
    }
    /**
     * Get nazwa value
     * @return string|null
     */
    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }
    /**
     * Set nazwa value
     * @param string $nazwa
     * @return \app\modules\postal\sender\StructType\KategoriePowodowReklamacjiType
     */
    public function setNazwa(?string $nazwa = null): self
    {
        // validation for constraint: string
        if (!is_null($nazwa) && !is_string($nazwa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwa, true), gettype($nazwa)), __LINE__);
        }
        $this->nazwa = $nazwa;
        
        return $this;
    }
    /**
     * Get powodReklamacji value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\PowodReklamacjiType[]
     */
    public function getPowodReklamacji(): ?array
    {
        return $this->powodReklamacji;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPowodReklamacji method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPowodReklamacji method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePowodReklamacjiForArrayConstraintFromSetPowodReklamacji(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $kategoriePowodowReklamacjiTypePowodReklamacjiItem) {
            // validation for constraint: itemType
            if (!$kategoriePowodowReklamacjiTypePowodReklamacjiItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\PowodReklamacjiType) {
                $invalidValues[] = is_object($kategoriePowodowReklamacjiTypePowodReklamacjiItem) ? get_class($kategoriePowodowReklamacjiTypePowodReklamacjiItem) : sprintf('%s(%s)', gettype($kategoriePowodowReklamacjiTypePowodReklamacjiItem), var_export($kategoriePowodowReklamacjiTypePowodReklamacjiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The powodReklamacji property can only contain items of type \app\modules\postal\sender\StructType\PowodReklamacjiType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set powodReklamacji value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PowodReklamacjiType[] $powodReklamacji
     * @return \app\modules\postal\sender\StructType\KategoriePowodowReklamacjiType
     *@throws InvalidArgumentException
     */
    public function setPowodReklamacji(?array $powodReklamacji = null): self
    {
        // validation for constraint: array
        if ('' !== ($powodReklamacjiArrayErrorMessage = self::validatePowodReklamacjiForArrayConstraintFromSetPowodReklamacji($powodReklamacji))) {
            throw new InvalidArgumentException($powodReklamacjiArrayErrorMessage, __LINE__);
        }
        $this->powodReklamacji = $powodReklamacji;
        
        return $this;
    }
    /**
     * Add item to powodReklamacji value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PowodReklamacjiType $item
     * @return \app\modules\postal\sender\StructType\KategoriePowodowReklamacjiType
     *@throws InvalidArgumentException
     */
    public function addToPowodReklamacji(\app\modules\postal\modules\poczta_polska\sender\StructType\PowodReklamacjiType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\PowodReklamacjiType) {
            throw new InvalidArgumentException(sprintf('The powodReklamacji property can only contain items of type \app\modules\postal\sender\StructType\PowodReklamacjiType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->powodReklamacji[] = $item;
        
        return $this;
    }
}
