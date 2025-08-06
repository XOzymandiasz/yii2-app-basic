<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;

/**
 * This class stands for przesylkaPoleconaKrajowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaPoleconaKrajowaType extends PrzesylkaRejestrowanaType
{
    /**
     * The kategoria
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $kategoria;
    /**
     * The epo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\EPOType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\EPOType $epo = null;
    /**
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;
    /**
     * The idLibraryForLegalDeposit
     * Meta information extracted from the WSDL
     * - documentation: Identifier library for legal deposit from list downloaded using the getLibrariesForLegalDeposits method
     * - base: xsd:string
     * - maxLength: 4
     * - minLength: 4
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $idLibraryForLegalDeposit = null;
    /**
     * The zasadySpecjalne
     * @var string|null
     */
    protected ?string $zasadySpecjalne = null;
    /**
     * The posteRestante
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $posteRestante = null;
    /**
     * The iloscPotwierdzenOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - default: 0
     * - maxInclusive: 9
     * - minInclusive: 0
     * @var int|null
     */
    protected ?int $iloscPotwierdzenOdbioru = null;
    /**
     * The gabaryt
     * Meta information extracted from the WSDL
     * - documentation: Gabaryt przesyłki
     * @var string|null
     */
    protected ?string $gabaryt = null;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - documentation: Format przesyłki
     * @var string|null
     */
    protected ?string $format = null;
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
     * The egzemplarzBiblioteczny
     * @var bool|null
     */
    protected ?bool $egzemplarzBiblioteczny = null;
    /**
     * The dlaOciemnialych
     * @var bool|null
     */
    protected ?bool $dlaOciemnialych = null;
    /**
     * The obszarMiasto
     * @var bool|null
     */
    protected ?bool $obszarMiasto = null;
    /**
     * The miejscowa
     * @var bool|null
     */
    protected ?bool $miejscowa = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;
    /**
     * Constructor method for przesylkaPoleconaKrajowaType
     * @param string $kategoria
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\EPOType $epo
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param string $idLibraryForLegalDeposit
     * @param string $zasadySpecjalne
     * @param bool $posteRestante
     * @param int $iloscPotwierdzenOdbioru
     * @param string $gabaryt
     * @param string $format
     * @param int $masa
     * @param bool $egzemplarzBiblioteczny
     * @param bool $dlaOciemnialych
     * @param bool $obszarMiasto
     * @param bool $miejscowa
     * @param string $numerPrzesylkiKlienta
     *@uses PrzesylkaPoleconaKrajowaType::setKategoria()
     * @uses PrzesylkaPoleconaKrajowaType::setEpo()
     * @uses PrzesylkaPoleconaKrajowaType::setPotwierdzenieDoreczenia()
     * @uses PrzesylkaPoleconaKrajowaType::setIdLibraryForLegalDeposit()
     * @uses PrzesylkaPoleconaKrajowaType::setZasadySpecjalne()
     * @uses PrzesylkaPoleconaKrajowaType::setPosteRestante()
     * @uses PrzesylkaPoleconaKrajowaType::setIloscPotwierdzenOdbioru()
     * @uses PrzesylkaPoleconaKrajowaType::setGabaryt()
     * @uses PrzesylkaPoleconaKrajowaType::setFormat()
     * @uses PrzesylkaPoleconaKrajowaType::setMasa()
     * @uses PrzesylkaPoleconaKrajowaType::setEgzemplarzBiblioteczny()
     * @uses PrzesylkaPoleconaKrajowaType::setDlaOciemnialych()
     * @uses PrzesylkaPoleconaKrajowaType::setObszarMiasto()
     * @uses PrzesylkaPoleconaKrajowaType::setMiejscowa()
     * @uses PrzesylkaPoleconaKrajowaType::setNumerPrzesylkiKlienta()
     */
    public function __construct(string $kategoria, ?\app\modules\postal\modules\poczta_polska\sender\StructType\EPOType $epo = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, ?string $idLibraryForLegalDeposit = null, ?string $zasadySpecjalne = null, ?bool $posteRestante = false, ?int $iloscPotwierdzenOdbioru = 0, ?string $gabaryt = null, ?string $format = null, ?int $masa = null, ?bool $egzemplarzBiblioteczny = null, ?bool $dlaOciemnialych = null, ?bool $obszarMiasto = null, ?bool $miejscowa = null, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setKategoria($kategoria)
            ->setEpo($epo)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setPosteRestante($posteRestante)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setGabaryt($gabaryt)
            ->setFormat($format)
            ->setMasa($masa)
            ->setEgzemplarzBiblioteczny($egzemplarzBiblioteczny)
            ->setDlaOciemnialych($dlaOciemnialych)
            ->setObszarMiasto($obszarMiasto)
            ->setMiejscowa($miejscowa)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
    }
    /**
     * Get kategoria value
     * @return string
     */
    public function getKategoria(): string
    {
        return $this->kategoria;
    }
    /**
     * Set kategoria value
     * @param string $kategoria
     * @return \app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType
     * @throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\KategoriaType::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\KategoriaType::valueIsValid()
     */
    public function setKategoria(string $kategoria): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\KategoriaType::valueIsValid($kategoria)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\KategoriaType', is_array($kategoria) ? implode(', ', $kategoria) : var_export($kategoria, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\KategoriaType::getValidValues())), __LINE__);
        }
        $this->kategoria = $kategoria;
        
        return $this;
    }
    /**
     * Get epo value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\EPOType|null
     */
    public function getEpo(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\EPOType
    {
        return $this->epo;
    }
    /**
     * Set epo value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\EPOType $epo
     * @return \app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setEpo(?\app\modules\postal\modules\poczta_polska\sender\StructType\EPOType $epo = null): self
    {
        $this->epo = $epo;
        
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setPotwierdzenieDoreczenia(?\app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null): self
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
        
        return $this;
    }
    /**
     * Get idLibraryForLegalDeposit value
     * @return string|null
     */
    public function getIdLibraryForLegalDeposit(): ?string
    {
        return $this->idLibraryForLegalDeposit;
    }
    /**
     * Set idLibraryForLegalDeposit value
     * @param string $idLibraryForLegalDeposit
     * @return \app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setIdLibraryForLegalDeposit(?string $idLibraryForLegalDeposit = null): self
    {
        // validation for constraint: string
        if (!is_null($idLibraryForLegalDeposit) && !is_string($idLibraryForLegalDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idLibraryForLegalDeposit, true), gettype($idLibraryForLegalDeposit)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($idLibraryForLegalDeposit) && mb_strlen((string) $idLibraryForLegalDeposit) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $idLibraryForLegalDeposit)), __LINE__);
        }
        // validation for constraint: minLength(4)
        if (!is_null($idLibraryForLegalDeposit) && mb_strlen((string) $idLibraryForLegalDeposit) < 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 4', mb_strlen((string) $idLibraryForLegalDeposit)), __LINE__);
        }
        $this->idLibraryForLegalDeposit = $idLibraryForLegalDeposit;
        
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
     * @param string $zasadySpecjalne
     * @return \app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType
     * @throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\ZasadySpecjalneEnum::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\ZasadySpecjalneEnum::valueIsValid()
     */
    public function setZasadySpecjalne(?string $zasadySpecjalne = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\ZasadySpecjalneEnum::valueIsValid($zasadySpecjalne)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\ZasadySpecjalneEnum', is_array($zasadySpecjalne) ? implode(', ', $zasadySpecjalne) : var_export($zasadySpecjalne, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\ZasadySpecjalneEnum::getValidValues())), __LINE__);
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setPosteRestante(?bool $posteRestante = false): self
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setIloscPotwierdzenOdbioru(?int $iloscPotwierdzenOdbioru = 0): self
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType
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
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType
     * @throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\FormatType::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\FormatType::valueIsValid()
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\FormatType::valueIsValid($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\FormatType', is_array($format) ? implode(', ', $format) : var_export($format, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\FormatType::getValidValues())), __LINE__);
        }
        $this->format = $format;
        
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType
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
     * Get egzemplarzBiblioteczny value
     * @return bool|null
     */
    public function getEgzemplarzBiblioteczny(): ?bool
    {
        return $this->egzemplarzBiblioteczny;
    }
    /**
     * Set egzemplarzBiblioteczny value
     * @param bool $egzemplarzBiblioteczny
     * @return \app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setEgzemplarzBiblioteczny(?bool $egzemplarzBiblioteczny = null): self
    {
        // validation for constraint: boolean
        if (!is_null($egzemplarzBiblioteczny) && !is_bool($egzemplarzBiblioteczny)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($egzemplarzBiblioteczny, true), gettype($egzemplarzBiblioteczny)), __LINE__);
        }
        $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;
        
        return $this;
    }
    /**
     * Get dlaOciemnialych value
     * @return bool|null
     */
    public function getDlaOciemnialych(): ?bool
    {
        return $this->dlaOciemnialych;
    }
    /**
     * Set dlaOciemnialych value
     * @param bool $dlaOciemnialych
     * @return \app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType
     */
    public function setDlaOciemnialych(?bool $dlaOciemnialych = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dlaOciemnialych) && !is_bool($dlaOciemnialych)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dlaOciemnialych, true), gettype($dlaOciemnialych)), __LINE__);
        }
        $this->dlaOciemnialych = $dlaOciemnialych;
        
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType
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
