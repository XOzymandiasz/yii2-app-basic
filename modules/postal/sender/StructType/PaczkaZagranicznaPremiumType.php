<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paczkaZagranicznaPremiumType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaczkaZagranicznaPremiumType extends PrzesylkaRejestrowanaType
{
    /**
     * The zwrot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\ZwrotType|null
     */
    protected ?\app\modules\postal\sender\StructType\ZwrotType $zwrot = null;
    /**
     * The posteRestante
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $posteRestante = null;
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
     * The deklaracjaCelna2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\DeklaracjaCelna2Type|null
     */
    protected ?\app\modules\postal\sender\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null;
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
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\PotwierdzenieDoreczeniaType|null
     */
    protected ?\app\modules\postal\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\UbezpieczenieType|null
     */
    protected ?\app\modules\postal\sender\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The numerPrzesylkiKlienta
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 25
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;
    /**
     * The sposobDoreczenia
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\SposobDoreczeniaType|null
     */
    protected ?\app\modules\postal\sender\StructType\SposobDoreczeniaType $sposobDoreczenia = null;
    /**
     * Constructor method for paczkaZagranicznaPremiumType
     * @uses PaczkaZagranicznaPremiumType::setZwrot()
     * @uses PaczkaZagranicznaPremiumType::setPosteRestante()
     * @uses PaczkaZagranicznaPremiumType::setMasa()
     * @uses PaczkaZagranicznaPremiumType::setDeklaracjaCelna2()
     * @uses PaczkaZagranicznaPremiumType::setSposobNadaniaInterconnect()
     * @uses PaczkaZagranicznaPremiumType::setPotwierdzenieDoreczenia()
     * @uses PaczkaZagranicznaPremiumType::setUbezpieczenie()
     * @uses PaczkaZagranicznaPremiumType::setNumerPrzesylkiKlienta()
     * @uses PaczkaZagranicznaPremiumType::setSposobDoreczenia()
     * @param \app\modules\postal\sender\StructType\ZwrotType $zwrot
     * @param bool $posteRestante
     * @param int $masa
     * @param \app\modules\postal\sender\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param string $sposobNadaniaInterconnect
     * @param \app\modules\postal\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param \app\modules\postal\sender\StructType\UbezpieczenieType $ubezpieczenie
     * @param string $numerPrzesylkiKlienta
     * @param \app\modules\postal\sender\StructType\SposobDoreczeniaType $sposobDoreczenia
     */
    public function __construct(?\app\modules\postal\sender\StructType\ZwrotType $zwrot = null, ?bool $posteRestante = null, ?int $masa = null, ?\app\modules\postal\sender\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, ?string $sposobNadaniaInterconnect = null, ?\app\modules\postal\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, ?\app\modules\postal\sender\StructType\UbezpieczenieType $ubezpieczenie = null, ?string $numerPrzesylkiKlienta = null, ?\app\modules\postal\sender\StructType\SposobDoreczeniaType $sposobDoreczenia = null)
    {
        $this
            ->setZwrot($zwrot)
            ->setPosteRestante($posteRestante)
            ->setMasa($masa)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setUbezpieczenie($ubezpieczenie)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setSposobDoreczenia($sposobDoreczenia);
    }
    /**
     * Get zwrot value
     * @return \app\modules\postal\sender\StructType\ZwrotType|null
     */
    public function getZwrot(): ?\app\modules\postal\sender\StructType\ZwrotType
    {
        return $this->zwrot;
    }
    /**
     * Set zwrot value
     * @param \app\modules\postal\sender\StructType\ZwrotType $zwrot
     * @return \app\modules\postal\sender\StructType\PaczkaZagranicznaPremiumType
     */
    public function setZwrot(?\app\modules\postal\sender\StructType\ZwrotType $zwrot = null): self
    {
        $this->zwrot = $zwrot;
        
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
     * @return \app\modules\postal\sender\StructType\PaczkaZagranicznaPremiumType
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
     * @return \app\modules\postal\sender\StructType\PaczkaZagranicznaPremiumType
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
     * Get deklaracjaCelna2 value
     * @return \app\modules\postal\sender\StructType\DeklaracjaCelna2Type|null
     */
    public function getDeklaracjaCelna2(): ?\app\modules\postal\sender\StructType\DeklaracjaCelna2Type
    {
        return $this->deklaracjaCelna2;
    }
    /**
     * Set deklaracjaCelna2 value
     * @param \app\modules\postal\sender\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @return \app\modules\postal\sender\StructType\PaczkaZagranicznaPremiumType
     */
    public function setDeklaracjaCelna2(?\app\modules\postal\sender\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null): self
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
     * @return \app\modules\postal\sender\StructType\PaczkaZagranicznaPremiumType
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
     * Get potwierdzenieDoreczenia value
     * @return \app\modules\postal\sender\StructType\PotwierdzenieDoreczeniaType|null
     */
    public function getPotwierdzenieDoreczenia(): ?\app\modules\postal\sender\StructType\PotwierdzenieDoreczeniaType
    {
        return $this->potwierdzenieDoreczenia;
    }
    /**
     * Set potwierdzenieDoreczenia value
     * @param \app\modules\postal\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @return \app\modules\postal\sender\StructType\PaczkaZagranicznaPremiumType
     */
    public function setPotwierdzenieDoreczenia(?\app\modules\postal\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null): self
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
        
        return $this;
    }
    /**
     * Get ubezpieczenie value
     * @return \app\modules\postal\sender\StructType\UbezpieczenieType|null
     */
    public function getUbezpieczenie(): ?\app\modules\postal\sender\StructType\UbezpieczenieType
    {
        return $this->ubezpieczenie;
    }
    /**
     * Set ubezpieczenie value
     * @param \app\modules\postal\sender\StructType\UbezpieczenieType $ubezpieczenie
     * @return \app\modules\postal\sender\StructType\PaczkaZagranicznaPremiumType
     */
    public function setUbezpieczenie(?\app\modules\postal\sender\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
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
     * @return \app\modules\postal\sender\StructType\PaczkaZagranicznaPremiumType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        // validation for constraint: string
        if (!is_null($numerPrzesylkiKlienta) && !is_string($numerPrzesylkiKlienta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerPrzesylkiKlienta, true), gettype($numerPrzesylkiKlienta)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($numerPrzesylkiKlienta) && mb_strlen((string) $numerPrzesylkiKlienta) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $numerPrzesylkiKlienta)), __LINE__);
        }
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
    /**
     * Get sposobDoreczenia value
     * @return \app\modules\postal\sender\StructType\SposobDoreczeniaType|null
     */
    public function getSposobDoreczenia(): ?\app\modules\postal\sender\StructType\SposobDoreczeniaType
    {
        return $this->sposobDoreczenia;
    }
    /**
     * Set sposobDoreczenia value
     * @param \app\modules\postal\sender\StructType\SposobDoreczeniaType $sposobDoreczenia
     * @return \app\modules\postal\sender\StructType\PaczkaZagranicznaPremiumType
     */
    public function setSposobDoreczenia(?\app\modules\postal\sender\StructType\SposobDoreczeniaType $sposobDoreczenia = null): self
    {
        $this->sposobDoreczenia = $sposobDoreczenia;
        
        return $this;
    }
}
