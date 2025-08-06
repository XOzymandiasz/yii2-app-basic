<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;

/**
 * This class stands for EMSType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EMSType extends PrzesylkaRejestrowanaType
{
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The deklaracjaCelna
     * Meta information extracted from the WSDL
     * - documentation: Deklaracja celna - "deprecated" - zalecane jest ustawianie elementu deklaracjaCelna2
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelnaType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelnaType $deklaracjaCelna = null;
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
     * The sposobNadaniaInterconnect
     * Meta information extracted from the WSDL
     * - documentation: Umożliwia określenie sposobu nadania przesyłki w ramach systemu Interconnect. Obsługiwane wartości: - ODBIOR_Z_ADRESU_PRYWATNEGO - ODBIOR_Z_ADRESU_FIRMOWEGO - NADANIE_W_PLACOWCE_POCZTOWEJ
     * - base: xsd:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sposobNadaniaInterconnect = null;
    /**
     * The sposobDoreczenia
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\SposobDoreczeniaType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\SposobDoreczeniaType $sposobDoreczenia = null;
    /**
     * The typOpakowania
     * @var string|null
     */
    protected ?string $typOpakowania = null;
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
     * The zalaczoneDokumenty
     * @var bool|null
     */
    protected ?bool $zalaczoneDokumenty = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;
    /**
     * Constructor method for EMSType
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelnaType $deklaracjaCelna
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param string $sposobNadaniaInterconnect
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\SposobDoreczeniaType $sposobDoreczenia
     * @param string $typOpakowania
     * @param int $masa
     * @param bool $zalaczoneDokumenty
     * @param string $numerPrzesylkiKlienta
     *@uses EMSType::setUbezpieczenie()
     * @uses EMSType::setDeklaracjaCelna()
     * @uses EMSType::setPotwierdzenieDoreczenia()
     * @uses EMSType::setDeklaracjaCelna2()
     * @uses EMSType::setSposobNadaniaInterconnect()
     * @uses EMSType::setSposobDoreczenia()
     * @uses EMSType::setTypOpakowania()
     * @uses EMSType::setMasa()
     * @uses EMSType::setZalaczoneDokumenty()
     * @uses EMSType::setNumerPrzesylkiKlienta()
     */
    public function __construct(?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelnaType $deklaracjaCelna = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, ?string $sposobNadaniaInterconnect = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\SposobDoreczeniaType $sposobDoreczenia = null, ?string $typOpakowania = null, ?int $masa = null, ?bool $zalaczoneDokumenty = null, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setUbezpieczenie($ubezpieczenie)
            ->setDeklaracjaCelna($deklaracjaCelna)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
            ->setSposobDoreczenia($sposobDoreczenia)
            ->setTypOpakowania($typOpakowania)
            ->setMasa($masa)
            ->setZalaczoneDokumenty($zalaczoneDokumenty)
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
     * @return \app\modules\postal\sender\StructType\EMSType
     */
    public function setUbezpieczenie(?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
        return $this;
    }
    /**
     * Get deklaracjaCelna value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelnaType|null
     */
    public function getDeklaracjaCelna(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelnaType
    {
        return $this->deklaracjaCelna;
    }
    /**
     * Set deklaracjaCelna value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelnaType $deklaracjaCelna
     * @return \app\modules\postal\sender\StructType\EMSType
     */
    public function setDeklaracjaCelna(?\app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelnaType $deklaracjaCelna = null): self
    {
        $this->deklaracjaCelna = $deklaracjaCelna;
        
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
     * @return \app\modules\postal\sender\StructType\EMSType
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
     * @return \app\modules\postal\sender\StructType\EMSType
     */
    public function setDeklaracjaCelna2(?\app\modules\postal\modules\poczta_polska\sender\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null): self
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;
        
        return $this;
    }
    /**
     * Get sposobNadaniaInterconnect value
     * @return string|null
     */
    public function getSposobNadaniaInterconnect(): ?string
    {
        return $this->sposobNadaniaInterconnect;
    }
    /**
     * Set sposobNadaniaInterconnect value
     * @param string $sposobNadaniaInterconnect
     * @return \app\modules\postal\sender\StructType\EMSType
     */
    public function setSposobNadaniaInterconnect(?string $sposobNadaniaInterconnect = null): self
    {
        // validation for constraint: string
        if (!is_null($sposobNadaniaInterconnect) && !is_string($sposobNadaniaInterconnect)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sposobNadaniaInterconnect, true), gettype($sposobNadaniaInterconnect)), __LINE__);
        }
        $this->sposobNadaniaInterconnect = $sposobNadaniaInterconnect;
        
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
     * @return \app\modules\postal\sender\StructType\EMSType
     */
    public function setSposobDoreczenia(?\app\modules\postal\modules\poczta_polska\sender\StructType\SposobDoreczeniaType $sposobDoreczenia = null): self
    {
        $this->sposobDoreczenia = $sposobDoreczenia;
        
        return $this;
    }
    /**
     * Get typOpakowania value
     * @return string|null
     */
    public function getTypOpakowania(): ?string
    {
        return $this->typOpakowania;
    }
    /**
     * Set typOpakowania value
     * @param string $typOpakowania
     * @return \app\modules\postal\sender\StructType\EMSType
     *@throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\EMSTypOpakowaniaType::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\EMSTypOpakowaniaType::valueIsValid()
     */
    public function setTypOpakowania(?string $typOpakowania = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\EMSTypOpakowaniaType::valueIsValid($typOpakowania)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\EMSTypOpakowaniaType', is_array($typOpakowania) ? implode(', ', $typOpakowania) : var_export($typOpakowania, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\EMSTypOpakowaniaType::getValidValues())), __LINE__);
        }
        $this->typOpakowania = $typOpakowania;
        
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
     * @return \app\modules\postal\sender\StructType\EMSType
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
     * Get zalaczoneDokumenty value
     * @return bool|null
     */
    public function getZalaczoneDokumenty(): ?bool
    {
        return $this->zalaczoneDokumenty;
    }
    /**
     * Set zalaczoneDokumenty value
     * @param bool $zalaczoneDokumenty
     * @return \app\modules\postal\sender\StructType\EMSType
     */
    public function setZalaczoneDokumenty(?bool $zalaczoneDokumenty = null): self
    {
        // validation for constraint: boolean
        if (!is_null($zalaczoneDokumenty) && !is_bool($zalaczoneDokumenty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zalaczoneDokumenty, true), gettype($zalaczoneDokumenty)), __LINE__);
        }
        $this->zalaczoneDokumenty = $zalaczoneDokumenty;
        
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
     * @return \app\modules\postal\sender\StructType\EMSType
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
