<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;

/**
 * This class stands for subUslugaPaczkowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SubUslugaPaczkowaType extends PrzesylkaType
{
    /**
     * The pobranie
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType $pobranie = null;
    /**
     * The ubezpieczenie
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * @var string|null
     */
    protected ?string $numerNadania = null;
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
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0
     * @var int|null
     */
    protected ?int $wartosc = null;
    /**
     * The ostroznie
     * @var bool|null
     */
    protected ?bool $ostroznie = null;
    /**
     * The opakowanie
     * @var string|null
     */
    protected ?string $opakowanie = null;
    /**
     * The ponadgabaryt
     * @var bool|null
     */
    protected ?bool $ponadgabaryt = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;
    /**
     * The gabaryt
     * @var string|null
     */
    protected ?string $gabaryt = null;
    /**
     * Constructor method for subUslugaPaczkowaType
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType $pobranie
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie
     * @param string $numerNadania
     * @param int $masa
     * @param int $wartosc
     * @param bool $ostroznie
     * @param string $opakowanie
     * @param bool $ponadgabaryt
     * @param string $numerPrzesylkiKlienta
     * @param string $gabaryt
     *@uses SubUslugaPaczkowaType::setPobranie()
     * @uses SubUslugaPaczkowaType::setUbezpieczenie()
     * @uses SubUslugaPaczkowaType::setNumerNadania()
     * @uses SubUslugaPaczkowaType::setMasa()
     * @uses SubUslugaPaczkowaType::setWartosc()
     * @uses SubUslugaPaczkowaType::setOstroznie()
     * @uses SubUslugaPaczkowaType::setOpakowanie()
     * @uses SubUslugaPaczkowaType::setPonadgabaryt()
     * @uses SubUslugaPaczkowaType::setNumerPrzesylkiKlienta()
     * @uses SubUslugaPaczkowaType::setGabaryt()
     */
    public function __construct(?\app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType $pobranie = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie = null, ?string $numerNadania = null, ?int $masa = null, ?int $wartosc = null, ?bool $ostroznie = null, ?string $opakowanie = null, ?bool $ponadgabaryt = null, ?string $numerPrzesylkiKlienta = null, ?string $gabaryt = null)
    {
        $this
            ->setPobranie($pobranie)
            ->setUbezpieczenie($ubezpieczenie)
            ->setNumerNadania($numerNadania)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setOstroznie($ostroznie)
            ->setOpakowanie($opakowanie)
            ->setPonadgabaryt($ponadgabaryt)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setGabaryt($gabaryt);
    }
    /**
     * Get pobranie value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType|null
     */
    public function getPobranie(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType
    {
        return $this->pobranie;
    }
    /**
     * Set pobranie value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType $pobranie
     * @return \app\modules\postal\sender\StructType\SubUslugaPaczkowaType
     */
    public function setPobranie(?\app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
        return $this;
    }
    /**
     * Get ubezpieczenie value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType|null
     */
    public function getUbezpieczenie(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType
    {
        return $this->ubezpieczenie;
    }
    /**
     * Set ubezpieczenie value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie
     * @return \app\modules\postal\sender\StructType\SubUslugaPaczkowaType
     */
    public function setUbezpieczenie(?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
        return $this;
    }
    /**
     * Get numerNadania value
     * @return string|null
     */
    public function getNumerNadania(): ?string
    {
        return $this->numerNadania;
    }
    /**
     * Set numerNadania value
     * @param string $numerNadania
     * @return \app\modules\postal\sender\StructType\SubUslugaPaczkowaType
     */
    public function setNumerNadania(?string $numerNadania = null): self
    {
        // validation for constraint: string
        if (!is_null($numerNadania) && !is_string($numerNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadania, true), gettype($numerNadania)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $numerNadania)), __LINE__);
        }
        // validation for constraint: minLength(10)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) < 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 10', mb_strlen((string) $numerNadania)), __LINE__);
        }
        $this->numerNadania = $numerNadania;
        
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
     * @return \app\modules\postal\sender\StructType\SubUslugaPaczkowaType
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
     * Get wartosc value
     * @return int|null
     */
    public function getWartosc(): ?int
    {
        return $this->wartosc;
    }
    /**
     * Set wartosc value
     * @param int $wartosc
     * @return \app\modules\postal\sender\StructType\SubUslugaPaczkowaType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        // validation for constraint: int
        if (!is_null($wartosc) && !(is_int($wartosc) || ctype_digit($wartosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wartosc, true), gettype($wartosc)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($wartosc) && $wartosc > 9999999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($wartosc, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($wartosc) && $wartosc < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($wartosc, true)), __LINE__);
        }
        $this->wartosc = $wartosc;
        
        return $this;
    }
    /**
     * Get ostroznie value
     * @return bool|null
     */
    public function getOstroznie(): ?bool
    {
        return $this->ostroznie;
    }
    /**
     * Set ostroznie value
     * @param bool $ostroznie
     * @return \app\modules\postal\sender\StructType\SubUslugaPaczkowaType
     */
    public function setOstroznie(?bool $ostroznie = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ostroznie) && !is_bool($ostroznie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ostroznie, true), gettype($ostroznie)), __LINE__);
        }
        $this->ostroznie = $ostroznie;
        
        return $this;
    }
    /**
     * Get opakowanie value
     * @return string|null
     */
    public function getOpakowanie(): ?string
    {
        return $this->opakowanie;
    }
    /**
     * Set opakowanie value
     * @param string $opakowanie
     * @return \app\modules\postal\sender\StructType\SubUslugaPaczkowaType
     * @throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\OpakowaniePocztowaType::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\OpakowaniePocztowaType::valueIsValid()
     */
    public function setOpakowanie(?string $opakowanie = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\OpakowaniePocztowaType::valueIsValid($opakowanie)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\OpakowaniePocztowaType', is_array($opakowanie) ? implode(', ', $opakowanie) : var_export($opakowanie, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\OpakowaniePocztowaType::getValidValues())), __LINE__);
        }
        $this->opakowanie = $opakowanie;
        
        return $this;
    }
    /**
     * Get ponadgabaryt value
     * @return bool|null
     */
    public function getPonadgabaryt(): ?bool
    {
        return $this->ponadgabaryt;
    }
    /**
     * Set ponadgabaryt value
     * @param bool $ponadgabaryt
     * @return \app\modules\postal\sender\StructType\SubUslugaPaczkowaType
     */
    public function setPonadgabaryt(?bool $ponadgabaryt = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ponadgabaryt) && !is_bool($ponadgabaryt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ponadgabaryt, true), gettype($ponadgabaryt)), __LINE__);
        }
        $this->ponadgabaryt = $ponadgabaryt;
        
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
     * @return \app\modules\postal\sender\StructType\SubUslugaPaczkowaType
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
     * @return \app\modules\postal\sender\StructType\SubUslugaPaczkowaType
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
