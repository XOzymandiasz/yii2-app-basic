<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;

/**
 * This class stands for marketingowaZAdresemType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MarketingowaZAdresemType extends PrzesylkaType
{
    /**
     * The adres
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $adres = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $masa = null;
    /**
     * The gabaryt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $gabaryt = null;
    /**
     * Constructor method for marketingowaZAdresemType
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $adres
     * @param int $masa
     * @param string $gabaryt
     *@uses MarketingowaZAdresemType::setAdres()
     * @uses MarketingowaZAdresemType::setMasa()
     * @uses MarketingowaZAdresemType::setGabaryt()
     */
    public function __construct(?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $adres = null, ?int $masa = null, ?string $gabaryt = null)
    {
        $this
            ->setAdres($adres)
            ->setMasa($masa)
            ->setGabaryt($gabaryt);
    }
    /**
     * Get adres value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType|null
     */
    public function getAdres(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType
    {
        return $this->adres;
    }
    /**
     * Set adres value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $adres
     * @return \app\modules\postal\sender\StructType\MarketingowaZAdresemType
     */
    public function setAdres(?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $adres = null): self
    {
        $this->adres = $adres;
        
        return $this;
    }
    /**
     * Get masa value
     * @return int|null
     */
    public function getMasa(): ?int
    {
        return $this->masa;
    }
    /**
     * Set masa value
     * @param int $masa
     * @return \app\modules\postal\sender\StructType\MarketingowaZAdresemType
     */
    public function setMasa(?int $masa = null): self
    {
        // validation for constraint: int
        if (!is_null($masa) && !(is_int($masa) || ctype_digit($masa))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($masa, true), gettype($masa)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($masa) && $masa > 9999999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($masa, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($masa) && $masa < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($masa, true)), __LINE__);
        }
        $this->masa = $masa;
        
        return $this;
    }
    /**
     * Get gabaryt value
     * @return string|null
     */
    public function getGabaryt(): ?string
    {
        return $this->gabaryt;
    }
    /**
     * Set gabaryt value
     * @param string $gabaryt
     * @return \app\modules\postal\sender\StructType\MarketingowaZAdresemType
     * @throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\GabarytType::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\GabarytType::valueIsValid()
     */
    public function setGabaryt(?string $gabaryt = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\GabarytType::valueIsValid($gabaryt)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\GabarytType', is_array($gabaryt) ? implode(', ', $gabaryt) : var_export($gabaryt, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\GabarytType::getValidValues())), __LINE__);
        }
        $this->gabaryt = $gabaryt;
        
        return $this;
    }
}
