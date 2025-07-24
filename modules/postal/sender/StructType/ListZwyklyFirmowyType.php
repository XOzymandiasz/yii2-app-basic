<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for listZwyklyFirmowyType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListZwyklyFirmowyType extends PrzesylkaNieRejestrowanaType
{
    /**
     * The adres
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\AdresType|null
     */
    protected ?\app\modules\postal\sender\StructType\AdresType $adres = null;
    /**
     * The posteRestante
     * @var bool|null
     */
    protected ?bool $posteRestante = null;
    /**
     * The miejscowa
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $miejscowa = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $masa = null;
    /**
     * The obszarMiasto
     * @var bool|null
     */
    protected ?bool $obszarMiasto = null;
    /**
     * The kategoria
     * @var string|null
     */
    protected ?string $kategoria = null;
    /**
     * The gabaryt
     * @var string|null
     */
    protected ?string $gabaryt = null;
    /**
     * Constructor method for listZwyklyFirmowyType
     * @uses ListZwyklyFirmowyType::setAdres()
     * @uses ListZwyklyFirmowyType::setPosteRestante()
     * @uses ListZwyklyFirmowyType::setMiejscowa()
     * @uses ListZwyklyFirmowyType::setMasa()
     * @uses ListZwyklyFirmowyType::setObszarMiasto()
     * @uses ListZwyklyFirmowyType::setKategoria()
     * @uses ListZwyklyFirmowyType::setGabaryt()
     * @param \app\modules\postal\sender\StructType\AdresType $adres
     * @param bool $posteRestante
     * @param bool $miejscowa
     * @param int $masa
     * @param bool $obszarMiasto
     * @param string $kategoria
     * @param string $gabaryt
     */
    public function __construct(?\app\modules\postal\sender\StructType\AdresType $adres = null, ?bool $posteRestante = null, ?bool $miejscowa = false, ?int $masa = null, ?bool $obszarMiasto = null, ?string $kategoria = null, ?string $gabaryt = null)
    {
        $this
            ->setAdres($adres)
            ->setPosteRestante($posteRestante)
            ->setMiejscowa($miejscowa)
            ->setMasa($masa)
            ->setObszarMiasto($obszarMiasto)
            ->setKategoria($kategoria)
            ->setGabaryt($gabaryt);
    }
    /**
     * Get adres value
     * @return \app\modules\postal\sender\StructType\AdresType|null
     */
    public function getAdres(): ?\app\modules\postal\sender\StructType\AdresType
    {
        return $this->adres;
    }
    /**
     * Set adres value
     * @param \app\modules\postal\sender\StructType\AdresType $adres
     * @return \app\modules\postal\sender\StructType\ListZwyklyFirmowyType
     */
    public function setAdres(?\app\modules\postal\sender\StructType\AdresType $adres = null): self
    {
        $this->adres = $adres;
        
        return $this;
    }
    /**
     * Get posteRestante value
     * @return bool|null
     */
    public function getPosteRestante(): ?bool
    {
        return $this->posteRestante;
    }
    /**
     * Set posteRestante value
     * @param bool $posteRestante
     * @return \app\modules\postal\sender\StructType\ListZwyklyFirmowyType
     */
    public function setPosteRestante(?bool $posteRestante = null): self
    {
        // validation for constraint: boolean
        if (!is_null($posteRestante) && !is_bool($posteRestante)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($posteRestante, true), gettype($posteRestante)), __LINE__);
        }
        $this->posteRestante = $posteRestante;
        
        return $this;
    }
    /**
     * Get miejscowa value
     * @return bool|null
     */
    public function getMiejscowa(): ?bool
    {
        return $this->miejscowa;
    }
    /**
     * Set miejscowa value
     * @param bool $miejscowa
     * @return \app\modules\postal\sender\StructType\ListZwyklyFirmowyType
     */
    public function setMiejscowa(?bool $miejscowa = false): self
    {
        // validation for constraint: boolean
        if (!is_null($miejscowa) && !is_bool($miejscowa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($miejscowa, true), gettype($miejscowa)), __LINE__);
        }
        $this->miejscowa = $miejscowa;
        
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
     * @return \app\modules\postal\sender\StructType\ListZwyklyFirmowyType
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
     * Get obszarMiasto value
     * @return bool|null
     */
    public function getObszarMiasto(): ?bool
    {
        return $this->obszarMiasto;
    }
    /**
     * Set obszarMiasto value
     * @param bool $obszarMiasto
     * @return \app\modules\postal\sender\StructType\ListZwyklyFirmowyType
     */
    public function setObszarMiasto(?bool $obszarMiasto = null): self
    {
        // validation for constraint: boolean
        if (!is_null($obszarMiasto) && !is_bool($obszarMiasto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($obszarMiasto, true), gettype($obszarMiasto)), __LINE__);
        }
        $this->obszarMiasto = $obszarMiasto;
        
        return $this;
    }
    /**
     * Get kategoria value
     * @return string|null
     */
    public function getKategoria(): ?string
    {
        return $this->kategoria;
    }
    /**
     * Set kategoria value
     * @uses \app\modules\postal\sender\EnumType\KategoriaType::valueIsValid()
     * @uses \app\modules\postal\sender\EnumType\KategoriaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $kategoria
     * @return \app\modules\postal\sender\StructType\ListZwyklyFirmowyType
     */
    public function setKategoria(?string $kategoria = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\sender\EnumType\KategoriaType::valueIsValid($kategoria)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\KategoriaType', is_array($kategoria) ? implode(', ', $kategoria) : var_export($kategoria, true), implode(', ', \app\modules\postal\sender\EnumType\KategoriaType::getValidValues())), __LINE__);
        }
        $this->kategoria = $kategoria;
        
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
     * @uses \app\modules\postal\sender\EnumType\GabarytType::valueIsValid()
     * @uses \app\modules\postal\sender\EnumType\GabarytType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $gabaryt
     * @return \app\modules\postal\sender\StructType\ListZwyklyFirmowyType
     */
    public function setGabaryt(?string $gabaryt = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\sender\EnumType\GabarytType::valueIsValid($gabaryt)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\GabarytType', is_array($gabaryt) ? implode(', ', $gabaryt) : var_export($gabaryt, true), implode(', ', \app\modules\postal\sender\EnumType\GabarytType::getValidValues())), __LINE__);
        }
        $this->gabaryt = $gabaryt;
        
        return $this;
    }
}
