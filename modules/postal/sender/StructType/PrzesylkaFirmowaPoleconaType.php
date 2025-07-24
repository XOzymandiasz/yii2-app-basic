<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaFirmowaPoleconaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaFirmowaPoleconaType extends PrzesylkaRejestrowanaType
{
    /**
     * The gabaryt
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $gabaryt;
    /**
     * The epo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\EPOType|null
     */
    protected ?\app\modules\postal\sender\StructType\EPOType $epo = null;
    /**
     * The zasadySpecjalne
     * @var string|null
     */
    protected ?string $zasadySpecjalne = null;
    /**
     * The posteRestante
     * @var bool|null
     */
    protected ?bool $posteRestante = null;
    /**
     * The iloscPotwierdzenOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - minInclusive: 0
     * @var int|null
     */
    protected ?int $iloscPotwierdzenOdbioru = null;
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
     * The miejscowa
     * @var bool|null
     */
    protected ?bool $miejscowa = null;
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
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;
    /**
     * Constructor method for przesylkaFirmowaPoleconaType
     * @uses PrzesylkaFirmowaPoleconaType::setGabaryt()
     * @uses PrzesylkaFirmowaPoleconaType::setEpo()
     * @uses PrzesylkaFirmowaPoleconaType::setZasadySpecjalne()
     * @uses PrzesylkaFirmowaPoleconaType::setPosteRestante()
     * @uses PrzesylkaFirmowaPoleconaType::setIloscPotwierdzenOdbioru()
     * @uses PrzesylkaFirmowaPoleconaType::setMasa()
     * @uses PrzesylkaFirmowaPoleconaType::setMiejscowa()
     * @uses PrzesylkaFirmowaPoleconaType::setObszarMiasto()
     * @uses PrzesylkaFirmowaPoleconaType::setKategoria()
     * @uses PrzesylkaFirmowaPoleconaType::setNumerPrzesylkiKlienta()
     * @param string $gabaryt
     * @param \app\modules\postal\sender\StructType\EPOType $epo
     * @param string $zasadySpecjalne
     * @param bool $posteRestante
     * @param int $iloscPotwierdzenOdbioru
     * @param int $masa
     * @param bool $miejscowa
     * @param bool $obszarMiasto
     * @param string $kategoria
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct(string $gabaryt, ?\app\modules\postal\sender\StructType\EPOType $epo = null, ?string $zasadySpecjalne = null, ?bool $posteRestante = null, ?int $iloscPotwierdzenOdbioru = null, ?int $masa = null, ?bool $miejscowa = null, ?bool $obszarMiasto = null, ?string $kategoria = null, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setGabaryt($gabaryt)
            ->setEpo($epo)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setPosteRestante($posteRestante)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setMasa($masa)
            ->setMiejscowa($miejscowa)
            ->setObszarMiasto($obszarMiasto)
            ->setKategoria($kategoria)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
    }
    /**
     * Get gabaryt value
     * @return string
     */
    public function getGabaryt(): string
    {
        return $this->gabaryt;
    }
    /**
     * Set gabaryt value
     * @uses \app\modules\postal\sender\EnumType\GabarytType::valueIsValid()
     * @uses \app\modules\postal\sender\EnumType\GabarytType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $gabaryt
     * @return \app\modules\postal\sender\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setGabaryt(string $gabaryt): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\sender\EnumType\GabarytType::valueIsValid($gabaryt)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\GabarytType', is_array($gabaryt) ? implode(', ', $gabaryt) : var_export($gabaryt, true), implode(', ', \app\modules\postal\sender\EnumType\GabarytType::getValidValues())), __LINE__);
        }
        $this->gabaryt = $gabaryt;
        
        return $this;
    }
    /**
     * Get epo value
     * @return \app\modules\postal\sender\StructType\EPOType|null
     */
    public function getEpo(): ?\app\modules\postal\sender\StructType\EPOType
    {
        return $this->epo;
    }
    /**
     * Set epo value
     * @param \app\modules\postal\sender\StructType\EPOType $epo
     * @return \app\modules\postal\sender\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setEpo(?\app\modules\postal\sender\StructType\EPOType $epo = null): self
    {
        $this->epo = $epo;
        
        return $this;
    }
    /**
     * Get zasadySpecjalne value
     * @return string|null
     */
    public function getZasadySpecjalne(): ?string
    {
        return $this->zasadySpecjalne;
    }
    /**
     * Set zasadySpecjalne value
     * @uses \app\modules\postal\sender\EnumType\ZasadySpecjalneEnum::valueIsValid()
     * @uses \app\modules\postal\sender\EnumType\ZasadySpecjalneEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $zasadySpecjalne
     * @return \app\modules\postal\sender\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setZasadySpecjalne(?string $zasadySpecjalne = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\sender\EnumType\ZasadySpecjalneEnum::valueIsValid($zasadySpecjalne)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\ZasadySpecjalneEnum', is_array($zasadySpecjalne) ? implode(', ', $zasadySpecjalne) : var_export($zasadySpecjalne, true), implode(', ', \app\modules\postal\sender\EnumType\ZasadySpecjalneEnum::getValidValues())), __LINE__);
        }
        $this->zasadySpecjalne = $zasadySpecjalne;
        
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaFirmowaPoleconaType
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
     * Get iloscPotwierdzenOdbioru value
     * @return int|null
     */
    public function getIloscPotwierdzenOdbioru(): ?int
    {
        return $this->iloscPotwierdzenOdbioru;
    }
    /**
     * Set iloscPotwierdzenOdbioru value
     * @param int $iloscPotwierdzenOdbioru
     * @return \app\modules\postal\sender\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setIloscPotwierdzenOdbioru(?int $iloscPotwierdzenOdbioru = null): self
    {
        // validation for constraint: int
        if (!is_null($iloscPotwierdzenOdbioru) && !(is_int($iloscPotwierdzenOdbioru) || ctype_digit($iloscPotwierdzenOdbioru))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscPotwierdzenOdbioru, true), gettype($iloscPotwierdzenOdbioru)), __LINE__);
        }
        // validation for constraint: maxInclusive(9)
        if (!is_null($iloscPotwierdzenOdbioru) && $iloscPotwierdzenOdbioru > 9) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9', var_export($iloscPotwierdzenOdbioru, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($iloscPotwierdzenOdbioru) && $iloscPotwierdzenOdbioru < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($iloscPotwierdzenOdbioru, true)), __LINE__);
        }
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
        
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaFirmowaPoleconaType
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setMiejscowa(?bool $miejscowa = null): self
    {
        // validation for constraint: boolean
        if (!is_null($miejscowa) && !is_bool($miejscowa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($miejscowa, true), gettype($miejscowa)), __LINE__);
        }
        $this->miejscowa = $miejscowa;
        
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaFirmowaPoleconaType
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaFirmowaPoleconaType
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
     * Get numerPrzesylkiKlienta value
     * @return string|null
     */
    public function getNumerPrzesylkiKlienta(): ?string
    {
        return $this->numerPrzesylkiKlienta;
    }
    /**
     * Set numerPrzesylkiKlienta value
     * @param string $numerPrzesylkiKlienta
     * @return \app\modules\postal\sender\StructType\PrzesylkaFirmowaPoleconaType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        // validation for constraint: string
        if (!is_null($numerPrzesylkiKlienta) && !is_string($numerPrzesylkiKlienta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerPrzesylkiKlienta, true), gettype($numerPrzesylkiKlienta)), __LINE__);
        }
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
}
