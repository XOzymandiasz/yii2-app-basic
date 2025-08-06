<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;

/**
 * This class stands for paczkaPocztowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaczkaPocztowaType extends PrzesylkaRejestrowanaType
{
    /**
     * The kategoria
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $kategoria;
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
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\EPOType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\EPOType $epo = null;
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie = null;
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
     * The egzemplarzBiblioteczny
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $egzemplarzBiblioteczny = null;
    /**
     * The dlaOciemnialych
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $dlaOciemnialych = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;
    /**
     * Constructor method for paczkaPocztowaType
     * @param string $kategoria
     * @param string $gabaryt
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\EPOType $epo
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie
     * @param string $idLibraryForLegalDeposit
     * @param string $zasadySpecjalne
     * @param bool $posteRestante
     * @param int $iloscPotwierdzenOdbioru
     * @param int $masa
     * @param int $wartosc
     * @param bool $egzemplarzBiblioteczny
     * @param bool $dlaOciemnialych
     * @param string $numerPrzesylkiKlienta
     *@uses PaczkaPocztowaType::setKategoria()
     * @uses PaczkaPocztowaType::setGabaryt()
     * @uses PaczkaPocztowaType::setEpo()
     * @uses PaczkaPocztowaType::setUbezpieczenie()
     * @uses PaczkaPocztowaType::setIdLibraryForLegalDeposit()
     * @uses PaczkaPocztowaType::setZasadySpecjalne()
     * @uses PaczkaPocztowaType::setPosteRestante()
     * @uses PaczkaPocztowaType::setIloscPotwierdzenOdbioru()
     * @uses PaczkaPocztowaType::setMasa()
     * @uses PaczkaPocztowaType::setWartosc()
     * @uses PaczkaPocztowaType::setEgzemplarzBiblioteczny()
     * @uses PaczkaPocztowaType::setDlaOciemnialych()
     * @uses PaczkaPocztowaType::setNumerPrzesylkiKlienta()
     */
    public function __construct(string $kategoria, string $gabaryt, ?\app\modules\postal\modules\poczta_polska\sender\StructType\EPOType $epo = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie = null, ?string $idLibraryForLegalDeposit = null, ?string $zasadySpecjalne = null, ?bool $posteRestante = false, ?int $iloscPotwierdzenOdbioru = 0, ?int $masa = null, ?int $wartosc = null, ?bool $egzemplarzBiblioteczny = false, ?bool $dlaOciemnialych = false, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setKategoria($kategoria)
            ->setGabaryt($gabaryt)
            ->setEpo($epo)
            ->setUbezpieczenie($ubezpieczenie)
            ->setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setPosteRestante($posteRestante)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setEgzemplarzBiblioteczny($egzemplarzBiblioteczny)
            ->setDlaOciemnialych($dlaOciemnialych)
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
     * @return \app\modules\postal\sender\StructType\PaczkaPocztowaType
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
     * Get gabaryt value
     * @return string
     */
    public function getGabaryt(): string
    {
        return $this->gabaryt;
    }
    /**
     * Set gabaryt value
     * @param string $gabaryt
     * @return \app\modules\postal\sender\StructType\PaczkaPocztowaType
     * @throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\GabarytType::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\GabarytType::valueIsValid()
     */
    public function setGabaryt(string $gabaryt): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\GabarytType::valueIsValid($gabaryt)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\GabarytType', is_array($gabaryt) ? implode(', ', $gabaryt) : var_export($gabaryt, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\GabarytType::getValidValues())), __LINE__);
        }
        $this->gabaryt = $gabaryt;
        
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
     * @return \app\modules\postal\sender\StructType\PaczkaPocztowaType
     */
    public function setEpo(?\app\modules\postal\modules\poczta_polska\sender\StructType\EPOType $epo = null): self
    {
        $this->epo = $epo;
        
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
     * @return \app\modules\postal\sender\StructType\PaczkaPocztowaType
     */
    public function setUbezpieczenie(?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
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
     * @return \app\modules\postal\sender\StructType\PaczkaPocztowaType
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
     * @return \app\modules\postal\sender\StructType\PaczkaPocztowaType
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
     * @return \app\modules\postal\sender\StructType\PaczkaPocztowaType
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
     * @return \app\modules\postal\sender\StructType\PaczkaPocztowaType
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
     * @return \app\modules\postal\sender\StructType\PaczkaPocztowaType
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
     * @return \app\modules\postal\sender\StructType\PaczkaPocztowaType
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
     * @return \app\modules\postal\sender\StructType\PaczkaPocztowaType
     */
    public function setEgzemplarzBiblioteczny(?bool $egzemplarzBiblioteczny = false): self
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
     * @return \app\modules\postal\sender\StructType\PaczkaPocztowaType
     */
    public function setDlaOciemnialych(?bool $dlaOciemnialych = false): self
    {
        // validation for constraint: boolean
        if (!is_null($dlaOciemnialych) && !is_bool($dlaOciemnialych)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dlaOciemnialych, true), gettype($dlaOciemnialych)), __LINE__);
        }
        $this->dlaOciemnialych = $dlaOciemnialych;
        
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
     * @return \app\modules\postal\sender\StructType\PaczkaPocztowaType
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
