<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaBiznesowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaBiznesowaType extends PrzesylkaRejestrowanaType
{
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\PobranieType|null
     */
    protected ?\app\modules\postal\sender\StructType\PobranieType $pobranie = null;
    /**
     * The urzadWydaniaEPrzesylki
     * Meta information extracted from the WSDL
     * - choice: urzadWydaniaEPrzesylki | subPrzesylka
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType|null
     */
    protected ?\app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null;
    /**
     * The subPrzesylka
     * Meta information extracted from the WSDL
     * - choice: urzadWydaniaEPrzesylki | subPrzesylka
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * @var \app\modules\postal\sender\StructType\SubPrzesylkaBiznesowaType[]
     */
    protected ?array $subPrzesylka = null;
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\UbezpieczenieType|null
     */
    protected ?\app\modules\postal\sender\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The epo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\EPOType|null
     */
    protected ?\app\modules\postal\sender\StructType\EPOType $epo = null;
    /**
     * The adresDlaZwrotu
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\AdresType|null
     */
    protected ?\app\modules\postal\sender\StructType\AdresType $adresDlaZwrotu = null;
    /**
     * The sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;
    /**
     * The potwierdzenieOdbioru
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\PotwierdzenieOdbioruBiznesowaType|null
     */
    protected ?\app\modules\postal\sender\StructType\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru = null;
    /**
     * The doreczenie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\DoreczenieBiznesowaType|null
     */
    protected ?\app\modules\postal\sender\StructType\DoreczenieBiznesowaType $doreczenie = null;
    /**
     * The zwrotDokumentow
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\ZwrotDokumentowBiznesowaType|null
     */
    protected ?\app\modules\postal\sender\StructType\ZwrotDokumentowBiznesowaType $zwrotDokumentow = null;
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
     * The gabaryt
     * @var string|null
     */
    protected ?string $gabaryt = null;
    /**
     * The niestandardowa
     * @var bool|null
     */
    protected ?bool $niestandardowa = null;
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
     * Constructor method for przesylkaBiznesowaType
     * @uses PrzesylkaBiznesowaType::setPobranie()
     * @uses PrzesylkaBiznesowaType::setUrzadWydaniaEPrzesylki()
     * @uses PrzesylkaBiznesowaType::setSubPrzesylka()
     * @uses PrzesylkaBiznesowaType::setUbezpieczenie()
     * @uses PrzesylkaBiznesowaType::setEpo()
     * @uses PrzesylkaBiznesowaType::setAdresDlaZwrotu()
     * @uses PrzesylkaBiznesowaType::setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
     * @uses PrzesylkaBiznesowaType::setPotwierdzenieOdbioru()
     * @uses PrzesylkaBiznesowaType::setDoreczenie()
     * @uses PrzesylkaBiznesowaType::setZwrotDokumentow()
     * @uses PrzesylkaBiznesowaType::setZasadySpecjalne()
     * @uses PrzesylkaBiznesowaType::setMasa()
     * @uses PrzesylkaBiznesowaType::setGabaryt()
     * @uses PrzesylkaBiznesowaType::setNiestandardowa()
     * @uses PrzesylkaBiznesowaType::setWartosc()
     * @uses PrzesylkaBiznesowaType::setOstroznie()
     * @uses PrzesylkaBiznesowaType::setNumerPrzesylkiKlienta()
     * @uses PrzesylkaBiznesowaType::setNumerTransakcjiOdbioru()
     * @param \app\modules\postal\sender\StructType\PobranieType $pobranie
     * @param \app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @param \app\modules\postal\sender\StructType\SubPrzesylkaBiznesowaType[] $subPrzesylka
     * @param \app\modules\postal\sender\StructType\UbezpieczenieType $ubezpieczenie
     * @param \app\modules\postal\sender\StructType\EPOType $epo
     * @param \app\modules\postal\sender\StructType\AdresType $adresDlaZwrotu
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @param \app\modules\postal\sender\StructType\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru
     * @param \app\modules\postal\sender\StructType\DoreczenieBiznesowaType $doreczenie
     * @param \app\modules\postal\sender\StructType\ZwrotDokumentowBiznesowaType $zwrotDokumentow
     * @param string $zasadySpecjalne
     * @param int $masa
     * @param string $gabaryt
     * @param bool $niestandardowa
     * @param int $wartosc
     * @param bool $ostroznie
     * @param string $numerPrzesylkiKlienta
     * @param string $numerTransakcjiOdbioru
     */
    public function __construct(?\app\modules\postal\sender\StructType\PobranieType $pobranie = null, ?\app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null, ?array $subPrzesylka = null, ?\app\modules\postal\sender\StructType\UbezpieczenieType $ubezpieczenie = null, ?\app\modules\postal\sender\StructType\EPOType $epo = null, ?\app\modules\postal\sender\StructType\AdresType $adresDlaZwrotu = null, ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null, ?\app\modules\postal\sender\StructType\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru = null, ?\app\modules\postal\sender\StructType\DoreczenieBiznesowaType $doreczenie = null, ?\app\modules\postal\sender\StructType\ZwrotDokumentowBiznesowaType $zwrotDokumentow = null, ?string $zasadySpecjalne = null, ?int $masa = null, ?string $gabaryt = null, ?bool $niestandardowa = null, ?int $wartosc = null, ?bool $ostroznie = null, ?string $numerPrzesylkiKlienta = null, ?string $numerTransakcjiOdbioru = null)
    {
        $this
            ->setPobranie($pobranie)
            ->setUrzadWydaniaEPrzesylki($urzadWydaniaEPrzesylki)
            ->setSubPrzesylka($subPrzesylka)
            ->setUbezpieczenie($ubezpieczenie)
            ->setEpo($epo)
            ->setAdresDlaZwrotu($adresDlaZwrotu)
            ->setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
            ->setPotwierdzenieOdbioru($potwierdzenieOdbioru)
            ->setDoreczenie($doreczenie)
            ->setZwrotDokumentow($zwrotDokumentow)
            ->setZasadySpecjalne($zasadySpecjalne)
            ->setMasa($masa)
            ->setGabaryt($gabaryt)
            ->setNiestandardowa($niestandardowa)
            ->setWartosc($wartosc)
            ->setOstroznie($ostroznie)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setNumerTransakcjiOdbioru($numerTransakcjiOdbioru);
    }
    /**
     * Get pobranie value
     * @return \app\modules\postal\sender\StructType\PobranieType|null
     */
    public function getPobranie(): ?\app\modules\postal\sender\StructType\PobranieType
    {
        return $this->pobranie;
    }
    /**
     * Set pobranie value
     * @param \app\modules\postal\sender\StructType\PobranieType $pobranie
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
     */
    public function setPobranie(?\app\modules\postal\sender\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
        return $this;
    }
    /**
     * Get urzadWydaniaEPrzesylki value
     * @return \app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType|null
     */
    public function getUrzadWydaniaEPrzesylki(): ?\app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType
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
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
     */
    public function setUrzadWydaniaEPrzesylki(?\app\modules\postal\sender\StructType\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null): self
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
     * @return \app\modules\postal\sender\StructType\SubPrzesylkaBiznesowaType[]|null
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
        foreach ($values as $przesylkaBiznesowaTypeSubPrzesylkaItem) {
            // validation for constraint: itemType
            if (!$przesylkaBiznesowaTypeSubPrzesylkaItem instanceof \app\modules\postal\sender\StructType\SubPrzesylkaBiznesowaType) {
                $invalidValues[] = is_object($przesylkaBiznesowaTypeSubPrzesylkaItem) ? get_class($przesylkaBiznesowaTypeSubPrzesylkaItem) : sprintf('%s(%s)', gettype($przesylkaBiznesowaTypeSubPrzesylkaItem), var_export($przesylkaBiznesowaTypeSubPrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The subPrzesylka property can only contain items of type \app\modules\postal\sender\StructType\SubPrzesylkaBiznesowaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
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
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\SubPrzesylkaBiznesowaType[] $subPrzesylka
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
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
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\SubPrzesylkaBiznesowaType $item
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
     */
    public function addToSubPrzesylka(\app\modules\postal\sender\StructType\SubPrzesylkaBiznesowaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\sender\StructType\SubPrzesylkaBiznesowaType) {
            throw new InvalidArgumentException(sprintf('The subPrzesylka property can only contain items of type \app\modules\postal\sender\StructType\SubPrzesylkaBiznesowaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
     */
    public function setUbezpieczenie(?\app\modules\postal\sender\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
     */
    public function setEpo(?\app\modules\postal\sender\StructType\EPOType $epo = null): self
    {
        $this->epo = $epo;
        
        return $this;
    }
    /**
     * Get adresDlaZwrotu value
     * @return \app\modules\postal\sender\StructType\AdresType|null
     */
    public function getAdresDlaZwrotu(): ?\app\modules\postal\sender\StructType\AdresType
    {
        return $this->adresDlaZwrotu;
    }
    /**
     * Set adresDlaZwrotu value
     * @param \app\modules\postal\sender\StructType\AdresType $adresDlaZwrotu
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
     */
    public function setAdresDlaZwrotu(?\app\modules\postal\sender\StructType\AdresType $adresDlaZwrotu = null): self
    {
        $this->adresDlaZwrotu = $adresDlaZwrotu;
        
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
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
     * Get potwierdzenieOdbioru value
     * @return \app\modules\postal\sender\StructType\PotwierdzenieOdbioruBiznesowaType|null
     */
    public function getPotwierdzenieOdbioru(): ?\app\modules\postal\sender\StructType\PotwierdzenieOdbioruBiznesowaType
    {
        return $this->potwierdzenieOdbioru;
    }
    /**
     * Set potwierdzenieOdbioru value
     * @param \app\modules\postal\sender\StructType\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
     */
    public function setPotwierdzenieOdbioru(?\app\modules\postal\sender\StructType\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru = null): self
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
        
        return $this;
    }
    /**
     * Get doreczenie value
     * @return \app\modules\postal\sender\StructType\DoreczenieBiznesowaType|null
     */
    public function getDoreczenie(): ?\app\modules\postal\sender\StructType\DoreczenieBiznesowaType
    {
        return $this->doreczenie;
    }
    /**
     * Set doreczenie value
     * @param \app\modules\postal\sender\StructType\DoreczenieBiznesowaType $doreczenie
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
     */
    public function setDoreczenie(?\app\modules\postal\sender\StructType\DoreczenieBiznesowaType $doreczenie = null): self
    {
        $this->doreczenie = $doreczenie;
        
        return $this;
    }
    /**
     * Get zwrotDokumentow value
     * @return \app\modules\postal\sender\StructType\ZwrotDokumentowBiznesowaType|null
     */
    public function getZwrotDokumentow(): ?\app\modules\postal\sender\StructType\ZwrotDokumentowBiznesowaType
    {
        return $this->zwrotDokumentow;
    }
    /**
     * Set zwrotDokumentow value
     * @param \app\modules\postal\sender\StructType\ZwrotDokumentowBiznesowaType $zwrotDokumentow
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
     */
    public function setZwrotDokumentow(?\app\modules\postal\sender\StructType\ZwrotDokumentowBiznesowaType $zwrotDokumentow = null): self
    {
        $this->zwrotDokumentow = $zwrotDokumentow;
        
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
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
     * @uses \app\modules\postal\sender\EnumType\GabarytBiznesowaType::valueIsValid()
     * @uses \app\modules\postal\sender\EnumType\GabarytBiznesowaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $gabaryt
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
     */
    public function setGabaryt(?string $gabaryt = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\sender\EnumType\GabarytBiznesowaType::valueIsValid($gabaryt)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\GabarytBiznesowaType', is_array($gabaryt) ? implode(', ', $gabaryt) : var_export($gabaryt, true), implode(', ', \app\modules\postal\sender\EnumType\GabarytBiznesowaType::getValidValues())), __LINE__);
        }
        $this->gabaryt = $gabaryt;
        
        return $this;
    }
    /**
     * Get niestandardowa value
     * @return bool|null
     */
    public function getNiestandardowa(): ?bool
    {
        return $this->niestandardowa;
    }
    /**
     * Set niestandardowa value
     * @param bool $niestandardowa
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
     */
    public function setNiestandardowa(?bool $niestandardowa = null): self
    {
        // validation for constraint: boolean
        if (!is_null($niestandardowa) && !is_bool($niestandardowa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($niestandardowa, true), gettype($niestandardowa)), __LINE__);
        }
        $this->niestandardowa = $niestandardowa;
        
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaBiznesowaType
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
