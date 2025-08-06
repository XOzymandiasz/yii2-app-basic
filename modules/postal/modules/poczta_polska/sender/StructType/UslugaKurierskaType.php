<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;

/**
 * This class stands for uslugaKurierskaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UslugaKurierskaType extends PrzesylkaRejestrowanaType
{
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType $pobranie = null;
    /**
     * The odbiorPrzesylkiOdNadawcy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\OdbiorPrzesylkiOdNadawcyType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy = null;
    /**
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;
    /**
     * The urzadWydaniaEPrzesylki
     * Meta information extracted from the WSDL
     * - choice: urzadWydaniaEPrzesylki | subPrzesylka
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\UrzadWydaniaEPrzesylkiType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null;
    /**
     * The subPrzesylka
     * Meta information extracted from the WSDL
     * - choice: urzadWydaniaEPrzesylki | subPrzesylka
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\SubUslugaKurierskaType[]
     */
    protected ?array $subPrzesylka = null;
    /**
     * The potwierdzenieOdbioru
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieOdbioruKurierskaType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru = null;
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The zwrotDokumentow
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ZwrotDokumentowKurierskaType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\ZwrotDokumentowKurierskaType $zwrotDokumentow = null;
    /**
     * The idDokumentyZwrotneAdresy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idDokumentyZwrotneAdresy = null;
    /**
     * The doreczenie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\DoreczenieUslugaKurierskaType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\DoreczenieUslugaKurierskaType $doreczenie = null;
    /**
     * The epo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\EPOType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\EPOType $epo = null;
    /**
     * The adresDlaZwrotu
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $adresDlaZwrotu = null;
    /**
     * The zasadySpecjalne
     * @var string|null
     */
    protected ?string $zasadySpecjalne = null;
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
     * The ponadgabaryt
     * @var bool|null
     */
    protected ?bool $ponadgabaryt = null;
    /**
     * The odleglosc
     * @var int|null
     */
    protected ?int $odleglosc = null;
    /**
     * The zawartosc
     * @var string|null
     */
    protected ?string $zawartosc = null;
    /**
     * The sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @var bool|null
     */
    protected ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;
    /**
     * The ostroznie
     * @var bool|null
     */
    protected ?bool $ostroznie = null;
    /**
     * The uiszczaOplate
     * @var string|null
     */
    protected ?string $uiszczaOplate = null;
    /**
     * The termin
     * @var string|null
     */
    protected ?string $termin = null;
    /**
     * The opakowanie
     * @var string|null
     */
    protected ?string $opakowanie = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;
    /**
     * The numerTransakcjiOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * @var string|null
     */
    protected ?string $numerTransakcjiOdbioru = null;
    /**
     * Constructor method for uslugaKurierskaType
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType $pobranie
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\SubUslugaKurierskaType[] $subPrzesylka
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ZwrotDokumentowKurierskaType $zwrotDokumentow
     * @param int $idDokumentyZwrotneAdresy
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\DoreczenieUslugaKurierskaType $doreczenie
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\EPOType $epo
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $adresDlaZwrotu
     * @param string $zasadySpecjalne
     * @param int $masa
     * @param int $wartosc
     * @param bool $ponadgabaryt
     * @param int $odleglosc
     * @param string $zawartosc
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @param bool $ostroznie
     * @param string $uiszczaOplate
     * @param string $termin
     * @param string $opakowanie
     * @param string $numerPrzesylkiKlienta
     * @param string $numerTransakcjiOdbioru
     * @uses UslugaKurierskaType::setPobranie()
     * @uses UslugaKurierskaType::setOdbiorPrzesylkiOdNadawcy()
     * @uses UslugaKurierskaType::setPotwierdzenieDoreczenia()
     * @uses UslugaKurierskaType::setUrzadWydaniaEPrzesylki()
     * @uses UslugaKurierskaType::setSubPrzesylka()
     * @uses UslugaKurierskaType::setPotwierdzenieOdbioru()
     * @uses UslugaKurierskaType::setUbezpieczenie()
     * @uses UslugaKurierskaType::setZwrotDokumentow()
     * @uses UslugaKurierskaType::setIdDokumentyZwrotneAdresy()
     * @uses UslugaKurierskaType::setDoreczenie()
     * @uses UslugaKurierskaType::setEpo()
     * @uses UslugaKurierskaType::setAdresDlaZwrotu()
     * @uses UslugaKurierskaType::setZasadySpecjalne()
     * @uses UslugaKurierskaType::setMasa()
     * @uses UslugaKurierskaType::setWartosc()
     * @uses UslugaKurierskaType::setPonadgabaryt()
     * @uses UslugaKurierskaType::setOdleglosc()
     * @uses UslugaKurierskaType::setZawartosc()
     * @uses UslugaKurierskaType::setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
     * @uses UslugaKurierskaType::setOstroznie()
     * @uses UslugaKurierskaType::setUiszczaOplate()
     * @uses UslugaKurierskaType::setTermin()
     * @uses UslugaKurierskaType::setOpakowanie()
     * @uses UslugaKurierskaType::setNumerPrzesylkiKlienta()
     * @uses UslugaKurierskaType::setNumerTransakcjiOdbioru()
     */
    public function __construct(?\app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType $pobranie = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null, ?array $subPrzesylka = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\ZwrotDokumentowKurierskaType $zwrotDokumentow = null, ?int $idDokumentyZwrotneAdresy = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\DoreczenieUslugaKurierskaType $doreczenie = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\EPOType $epo = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $adresDlaZwrotu = null, ?string $zasadySpecjalne = null, ?int $masa = null, ?int $wartosc = null, ?bool $ponadgabaryt = null, ?int $odleglosc = null, ?string $zawartosc = null, ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null, ?bool $ostroznie = null, ?string $uiszczaOplate = null, ?string $termin = null, ?string $opakowanie = null, ?string $numerPrzesylkiKlienta = null, ?string $numerTransakcjiOdbioru = null)
    {
        $this
            ->setPobranie($pobranie)
            ->setOdbiorPrzesylkiOdNadawcy($odbiorPrzesylkiOdNadawcy)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
            ->setSubPrzesylka($subPrzesylka)
            ->setPotwierdzenieOdbioru($potwierdzenieOdbioru)
            ->setUbezpieczenie($ubezpieczenie)
            ->setZwrotDokumentow($zwrotDokumentow)
            ->setIdDokumentyZwrotneAdresy($idDokumentyZwrotneAdresy)
            ->setDoreczenie($doreczenie)
            ->setEpo($epo)
            ->setAdresDlaZwrotu($adresDlaZwrotu)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setMasa($masa)
            ->setWartosc($wartosc)
            ->setPonadgabaryt($ponadgabaryt)
            ->setOdleglosc($odleglosc)
            ->setZawartosc($zawartosc)
            ->setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
            ->setOstroznie($ostroznie)
            ->setUiszczaOplate($uiszczaOplate)
            ->setTermin($termin)
            ->setOpakowanie($opakowanie)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setNumerTransakcjiOdbioru($numerTransakcjiOdbioru);
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
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     */
    public function setPobranie(?\app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
        return $this;
    }
    /**
     * Get odbiorPrzesylkiOdNadawcy value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\OdbiorPrzesylkiOdNadawcyType|null
     */
    public function getOdbiorPrzesylkiOdNadawcy(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\OdbiorPrzesylkiOdNadawcyType
    {
        return $this->odbiorPrzesylkiOdNadawcy;
    }
    /**
     * Set odbiorPrzesylkiOdNadawcy value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     */
    public function setOdbiorPrzesylkiOdNadawcy(?\app\modules\postal\modules\poczta_polska\sender\StructType\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy = null): self
    {
        $this->odbiorPrzesylkiOdNadawcy = $odbiorPrzesylkiOdNadawcy;
        
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
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     */
    public function setPotwierdzenieDoreczenia(?\app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null): self
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
        
        return $this;
    }
    /**
     * Get urzadWydaniaEPrzesylki value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\UrzadWydaniaEPrzesylkiType|null
     */
    public function getUrzadWydaniaEPrzesylki(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\UrzadWydaniaEPrzesylkiType
    {
        return $this->urzadWydaniaEPrzesylki ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUrzadWydaniaEPrzesylki method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUrzadWydaniaEPrzesylki method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUrzadWydaniaEPrzesylkiForChoiceConstraintFromSetUrzadWydaniaEPrzesylki($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'subPrzesylka',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property urzadWydaniaEPrzesylki can\'t be set as the property %s is already set. Only one property must be set among these properties: urzadWydaniaEPrzesylki, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set urzadWydaniaEPrzesylki value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     *@throws InvalidArgumentException
     */
    public function setUrzadWydaniaEPrzesylki(?\app\modules\postal\modules\poczta_polska\sender\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null): self
    {
        // validation for constraint: choice(urzadWydaniaEPrzesylki, subPrzesylka)
        if ('' !== ($urzadWydaniaEPrzesylkiChoiceErrorMessage = self::validateUrzadWydaniaEPrzesylkiForChoiceConstraintFromSetUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki))) {
            throw new InvalidArgumentException($urzadWydaniaEPrzesylkiChoiceErrorMessage, __LINE__);
        }
        if (is_null($urzadWydaniaEPrzesylki) || (is_array($urzadWydaniaEPrzesylki) && empty($urzadWydaniaEPrzesylki))) {
            unset($this->urzadWydaniaEPrzesylki);
        } else {
            $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
        }
        
        return $this;
    }
    /**
     * Get subPrzesylka value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\SubUslugaKurierskaType[]|null
     */
    public function getSubPrzesylka(): ?array
    {
        return $this->subPrzesylka ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSubPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubPrzesylka method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubPrzesylkaForArrayConstraintFromSetSubPrzesylka(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $uslugaKurierskaTypeSubPrzesylkaItem) {
            // validation for constraint: itemType
            if (!$uslugaKurierskaTypeSubPrzesylkaItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\SubUslugaKurierskaType) {
                $invalidValues[] = is_object($uslugaKurierskaTypeSubPrzesylkaItem) ? get_class($uslugaKurierskaTypeSubPrzesylkaItem) : sprintf('%s(%s)', gettype($uslugaKurierskaTypeSubPrzesylkaItem), var_export($uslugaKurierskaTypeSubPrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The subPrzesylka property can only contain items of type \app\modules\postal\sender\StructType\SubUslugaKurierskaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSubPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubPrzesylka method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSubPrzesylkaForChoiceConstraintFromSetSubPrzesylka($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'urzadWydaniaEPrzesylki',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property subPrzesylka can\'t be set as the property %s is already set. Only one property must be set among these properties: subPrzesylka, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set subPrzesylka value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\SubUslugaKurierskaType[] $subPrzesylka
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     *@throws InvalidArgumentException
     * @throws InvalidArgumentException
     */
    public function setSubPrzesylka(?array $subPrzesylka = null): self
    {
        // validation for constraint: array
        if ('' !== ($subPrzesylkaArrayErrorMessage = self::validateSubPrzesylkaForArrayConstraintFromSetSubPrzesylka($subPrzesylka))) {
            throw new InvalidArgumentException($subPrzesylkaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(urzadWydaniaEPrzesylki, subPrzesylka)
        if ('' !== ($subPrzesylkaChoiceErrorMessage = self::validateSubPrzesylkaForChoiceConstraintFromSetSubPrzesylka($subPrzesylka))) {
            throw new InvalidArgumentException($subPrzesylkaChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($subPrzesylka) && count($subPrzesylka) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($subPrzesylka)), __LINE__);
        }
        if (is_null($subPrzesylka) || (is_array($subPrzesylka) && empty($subPrzesylka))) {
            unset($this->subPrzesylka);
        } else {
            $this->subPrzesylka = $subPrzesylka;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToSubPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToSubPrzesylka method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToSubPrzesylka($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'urzadWydaniaEPrzesylki',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property subPrzesylka can\'t be set as the property %s is already set. Only one property must be set among these properties: subPrzesylka, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to subPrzesylka value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\SubUslugaKurierskaType $item
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     *@throws InvalidArgumentException
     */
    public function addToSubPrzesylka(\app\modules\postal\modules\poczta_polska\sender\StructType\SubUslugaKurierskaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\SubUslugaKurierskaType) {
            throw new InvalidArgumentException(sprintf('The subPrzesylka property can only contain items of type \app\modules\postal\sender\StructType\SubUslugaKurierskaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(urzadWydaniaEPrzesylki, subPrzesylka)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToSubPrzesylka($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->subPrzesylka) && count($this->subPrzesylka) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->subPrzesylka)), __LINE__);
        }
        $this->subPrzesylka[] = $item;
        
        return $this;
    }
    /**
     * Get potwierdzenieOdbioru value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieOdbioruKurierskaType|null
     */
    public function getPotwierdzenieOdbioru(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieOdbioruKurierskaType
    {
        return $this->potwierdzenieOdbioru;
    }
    /**
     * Set potwierdzenieOdbioru value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     */
    public function setPotwierdzenieOdbioru(?\app\modules\postal\modules\poczta_polska\sender\StructType\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru = null): self
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
        
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
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     */
    public function setUbezpieczenie(?\app\modules\postal\modules\poczta_polska\sender\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
        return $this;
    }
    /**
     * Get zwrotDokumentow value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ZwrotDokumentowKurierskaType|null
     */
    public function getZwrotDokumentow(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\ZwrotDokumentowKurierskaType
    {
        return $this->zwrotDokumentow;
    }
    /**
     * Set zwrotDokumentow value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ZwrotDokumentowKurierskaType $zwrotDokumentow
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     */
    public function setZwrotDokumentow(?\app\modules\postal\modules\poczta_polska\sender\StructType\ZwrotDokumentowKurierskaType $zwrotDokumentow = null): self
    {
        $this->zwrotDokumentow = $zwrotDokumentow;
        
        return $this;
    }
    /**
     * Get idDokumentyZwrotneAdresy value
     * @return int|null
     */
    public function getIdDokumentyZwrotneAdresy(): ?int
    {
        return $this->idDokumentyZwrotneAdresy;
    }
    /**
     * Set idDokumentyZwrotneAdresy value
     * @param int $idDokumentyZwrotneAdresy
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     */
    public function setIdDokumentyZwrotneAdresy(?int $idDokumentyZwrotneAdresy = null): self
    {
        // validation for constraint: int
        if (!is_null($idDokumentyZwrotneAdresy) && !(is_int($idDokumentyZwrotneAdresy) || ctype_digit($idDokumentyZwrotneAdresy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idDokumentyZwrotneAdresy, true), gettype($idDokumentyZwrotneAdresy)), __LINE__);
        }
        $this->idDokumentyZwrotneAdresy = $idDokumentyZwrotneAdresy;
        
        return $this;
    }
    /**
     * Get doreczenie value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\DoreczenieUslugaKurierskaType|null
     */
    public function getDoreczenie(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\DoreczenieUslugaKurierskaType
    {
        return $this->doreczenie;
    }
    /**
     * Set doreczenie value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\DoreczenieUslugaKurierskaType $doreczenie
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     */
    public function setDoreczenie(?\app\modules\postal\modules\poczta_polska\sender\StructType\DoreczenieUslugaKurierskaType $doreczenie = null): self
    {
        $this->doreczenie = $doreczenie;
        
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
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     */
    public function setEpo(?\app\modules\postal\modules\poczta_polska\sender\StructType\EPOType $epo = null): self
    {
        $this->epo = $epo;
        
        return $this;
    }
    /**
     * Get adresDlaZwrotu value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType|null
     */
    public function getAdresDlaZwrotu(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType
    {
        return $this->adresDlaZwrotu;
    }
    /**
     * Set adresDlaZwrotu value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $adresDlaZwrotu
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     */
    public function setAdresDlaZwrotu(?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $adresDlaZwrotu = null): self
    {
        $this->adresDlaZwrotu = $adresDlaZwrotu;
        
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
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
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
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
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
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
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
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
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
     * Get odleglosc value
     * @return int|null
     */
    public function getOdleglosc(): ?int
    {
        return $this->odleglosc;
    }
    /**
     * Set odleglosc value
     * @param int $odleglosc
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     */
    public function setOdleglosc(?int $odleglosc = null): self
    {
        // validation for constraint: int
        if (!is_null($odleglosc) && !(is_int($odleglosc) || ctype_digit($odleglosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($odleglosc, true), gettype($odleglosc)), __LINE__);
        }
        $this->odleglosc = $odleglosc;
        
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
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
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
     * Get sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value
     * @return bool|null
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(): ?bool
    {
        return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }
    /**
     * Set sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce) && !is_bool($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce, true), gettype($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)), __LINE__);
        }
        $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
        
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
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
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
     * Get uiszczaOplate value
     * @return string|null
     */
    public function getUiszczaOplate(): ?string
    {
        return $this->uiszczaOplate;
    }
    /**
     * Set uiszczaOplate value
     * @param string $uiszczaOplate
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     * @throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\UiszczaOplateType::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\UiszczaOplateType::valueIsValid()
     */
    public function setUiszczaOplate(?string $uiszczaOplate = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\UiszczaOplateType::valueIsValid($uiszczaOplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\UiszczaOplateType', is_array($uiszczaOplate) ? implode(', ', $uiszczaOplate) : var_export($uiszczaOplate, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\UiszczaOplateType::getValidValues())), __LINE__);
        }
        $this->uiszczaOplate = $uiszczaOplate;
        
        return $this;
    }
    /**
     * Get termin value
     * @return string|null
     */
    public function getTermin(): ?string
    {
        return $this->termin;
    }
    /**
     * Set termin value
     * @param string $termin
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     *@throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\TerminKurierskaType::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\TerminKurierskaType::valueIsValid()
     */
    public function setTermin(?string $termin = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\TerminKurierskaType::valueIsValid($termin)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\TerminKurierskaType', is_array($termin) ? implode(', ', $termin) : var_export($termin, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\TerminKurierskaType::getValidValues())), __LINE__);
        }
        $this->termin = $termin;
        
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
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     *@throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\OpakowanieKurierskaType::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\OpakowanieKurierskaType::valueIsValid()
     */
    public function setOpakowanie(?string $opakowanie = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\OpakowanieKurierskaType::valueIsValid($opakowanie)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\OpakowanieKurierskaType', is_array($opakowanie) ? implode(', ', $opakowanie) : var_export($opakowanie, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\OpakowanieKurierskaType::getValidValues())), __LINE__);
        }
        $this->opakowanie = $opakowanie;
        
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
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
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
     * Get numerTransakcjiOdbioru value
     * @return string|null
     */
    public function getNumerTransakcjiOdbioru(): ?string
    {
        return $this->numerTransakcjiOdbioru;
    }
    /**
     * Set numerTransakcjiOdbioru value
     * @param string $numerTransakcjiOdbioru
     * @return \app\modules\postal\sender\StructType\UslugaKurierskaType
     */
    public function setNumerTransakcjiOdbioru(?string $numerTransakcjiOdbioru = null): self
    {
        // validation for constraint: string
        if (!is_null($numerTransakcjiOdbioru) && !is_string($numerTransakcjiOdbioru)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerTransakcjiOdbioru, true), gettype($numerTransakcjiOdbioru)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($numerTransakcjiOdbioru) && mb_strlen((string) $numerTransakcjiOdbioru) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $numerTransakcjiOdbioru)), __LINE__);
        }
        $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
        
        return $this;
    }
}
