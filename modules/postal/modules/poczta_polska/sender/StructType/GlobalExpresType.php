<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;

/**
 * This class stands for globalExpresType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GlobalExpresType extends PrzesylkaRejestrowanaType
{
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;
    /**
     * The deklaracjaCelna2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelna2Type|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null;
    /**
     * The sposobDoreczenia
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\SposobDoreczeniaType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\SposobDoreczeniaType $sposobDoreczenia = null;
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
     * The posteRestante
     * @var bool|null
     */
    protected ?bool $posteRestante = null;
    /**
     * The zawartosc
     * Meta information extracted from the WSDL
     * - documentation: Element określający zawartość przesyłki. Aktualnie dopuszczalne wartości: KORESPONDENCJA DOKUMENTY_PONIZEJ_250G DOKUMENTY_POWYZEJ_250G TOWARY
     * @var string|null
     */
    protected ?string $zawartosc = null;
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
     * Constructor method for globalExpresType
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\SposobDoreczeniaType $sposobDoreczenia
     * @param int $masa
     * @param bool $posteRestante
     * @param string $zawartosc
     * @param string $kategoria
     * @param string $numerPrzesylkiKlienta
     * @uses GlobalExpresType::setUbezpieczenie()
     * @uses GlobalExpresType::setPotwierdzenieDoreczenia()
     * @uses GlobalExpresType::setDeklaracjaCelna2()
     * @uses GlobalExpresType::setSposobDoreczenia()
     * @uses GlobalExpresType::setMasa()
     * @uses GlobalExpresType::setPosteRestante()
     * @uses GlobalExpresType::setZawartosc()
     * @uses GlobalExpresType::setKategoria()
     * @uses GlobalExpresType::setNumerPrzesylkiKlienta()
     */
    public function __construct(?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\SposobDoreczeniaType $sposobDoreczenia = null, ?int $masa = null, ?bool $posteRestante = null, ?string $zawartosc = null, ?string $kategoria = null, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setUbezpieczenie($ubezpieczenie)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setSposobDoreczenia($sposobDoreczenia)
            ->setMasa($masa)
            ->setPosteRestante($posteRestante)
            ->setZawartosc($zawartosc)
            ->setKategoria($kategoria)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
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
     * @return \app\modules\postal\sender\StructType\GlobalExpresType
     */
    public function setUbezpieczenie(?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
        return $this;
    }
    /**
     * Get potwierdzenieDoreczenia value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType|null
     */
    public function getPotwierdzenieDoreczenia(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType
    {
        return $this->potwierdzenieDoreczenia;
    }
    /**
     * Set potwierdzenieDoreczenia value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @return \app\modules\postal\sender\StructType\GlobalExpresType
     */
    public function setPotwierdzenieDoreczenia(?\app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null): self
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
        
        return $this;
    }
    /**
     * Get deklaracjaCelna2 value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelna2Type|null
     */
    public function getDeklaracjaCelna2(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelna2Type
    {
        return $this->deklaracjaCelna2;
    }
    /**
     * Set deklaracjaCelna2 value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @return \app\modules\postal\sender\StructType\GlobalExpresType
     */
    public function setDeklaracjaCelna2(?\app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null): self
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;
        
        return $this;
    }
    /**
     * Get sposobDoreczenia value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\SposobDoreczeniaType|null
     */
    public function getSposobDoreczenia(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\SposobDoreczeniaType
    {
        return $this->sposobDoreczenia;
    }
    /**
     * Set sposobDoreczenia value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\SposobDoreczeniaType $sposobDoreczenia
     * @return \app\modules\postal\sender\StructType\GlobalExpresType
     */
    public function setSposobDoreczenia(?\app\modules\postal\modules\poczta_polska\sender\StructType\SposobDoreczeniaType $sposobDoreczenia = null): self
    {
        $this->sposobDoreczenia = $sposobDoreczenia;
        
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
     * @return \app\modules\postal\sender\StructType\GlobalExpresType
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
     * @return \app\modules\postal\sender\StructType\GlobalExpresType
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
     * Get zawartosc value
     * @return string|null
     */
    public function getZawartosc(): ?string
    {
        return $this->zawartosc;
    }
    /**
     * Set zawartosc value
     * @param string $zawartosc
     * @return \app\modules\postal\sender\StructType\GlobalExpresType
     */
    public function setZawartosc(?string $zawartosc = null): self
    {
        // validation for constraint: string
        if (!is_null($zawartosc) && !is_string($zawartosc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zawartosc, true), gettype($zawartosc)), __LINE__);
        }
        $this->zawartosc = $zawartosc;
        
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
     * @param string $kategoria
     * @return \app\modules\postal\sender\StructType\GlobalExpresType
     * @throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\KategoriaType::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\KategoriaType::valueIsValid()
     */
    public function setKategoria(?string $kategoria = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\KategoriaType::valueIsValid($kategoria)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\KategoriaType', is_array($kategoria) ? implode(', ', $kategoria) : var_export($kategoria, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\KategoriaType::getValidValues())), __LINE__);
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
     * @return \app\modules\postal\sender\StructType\GlobalExpresType
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
