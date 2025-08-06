<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;

/**
 * This class stands for przesylkaPaletowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaPaletowaType extends PrzesylkaRejestrowanaType
{
    /**
     * The miejsceOdbioru
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $miejsceOdbioru = null;
    /**
     * The miejsceDoreczenia
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $miejsceDoreczenia = null;
    /**
     * The paleta
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\PaletaType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\PaletaType $paleta = null;
    /**
     * The platnik
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\PlatnikType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\PlatnikType $platnik = null;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType $pobranie = null;
    /**
     * The subPaleta
     * Meta information extracted from the WSDL
     * - maxOccurs: 32
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\SubPrzesylkaPaletowaType[]
     */
    protected ?array $subPaleta = null;
    /**
     * The daneSent
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\DaneSentType[]
     */
    protected ?array $daneSent = null;
    /**
     * The awizacja
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\AwizacjaType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\AwizacjaType $awizacja = null;
    /**
     * The zawartosc
     * @var string|null
     */
    protected ?string $zawartosc = null;
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
     * The dataZaladunku
     * @var string|null
     */
    protected ?string $dataZaladunku = null;
    /**
     * The dataDostawy
     * @var string|null
     */
    protected ?string $dataDostawy = null;
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
     * The iloscZwracanychPaletEUR
     * @var int|null
     */
    protected ?int $iloscZwracanychPaletEUR = null;
    /**
     * The zalaczonaFV
     * @var string|null
     */
    protected ?string $zalaczonaFV = null;
    /**
     * The zalaczonyWZ
     * @var string|null
     */
    protected ?string $zalaczonyWZ = null;
    /**
     * The zalaczoneInne
     * @var string|null
     */
    protected ?string $zalaczoneInne = null;
    /**
     * The zwracanaFV
     * @var string|null
     */
    protected ?string $zwracanaFV = null;
    /**
     * The zwracanyWZ
     * @var string|null
     */
    protected ?string $zwracanyWZ = null;
    /**
     * The zwracaneInne
     * @var string|null
     */
    protected ?string $zwracaneInne = null;
    /**
     * The powiadomienieNadawcy
     * @var string|null
     */
    protected ?string $powiadomienieNadawcy = null;
    /**
     * The powiadomienieOdbiorcy
     * @var string|null
     */
    protected ?string $powiadomienieOdbiorcy = null;
    /**
     * The dostawaWSobote
     * @var bool|null
     */
    protected ?bool $dostawaWSobote = null;
    /**
     * The przygotowanieDokumentowPrzewozowych
     * @var bool|null
     */
    protected ?bool $przygotowanieDokumentowPrzewozowych = null;
    /**
     * The dostawaSamochodemDedykowanym
     * @var bool|null
     */
    protected ?bool $dostawaSamochodemDedykowanym = null;
    /**
     * The zmianaDanychAdresowych
     * @var bool|null
     */
    protected ?bool $zmianaDanychAdresowych = null;
    /**
     * The ustalenieTerminuDostawy
     * @var bool|null
     */
    protected ?bool $ustalenieTerminuDostawy = null;
    /**
     * The samochodZWinda
     * @var bool|null
     */
    protected ?bool $samochodZWinda = null;
    /**
     * The zabranieOpakowania
     * @var bool|null
     */
    protected ?bool $zabranieOpakowania = null;
    /**
     * The wniesienie
     * @var bool|null
     */
    protected ?bool $wniesienie = null;
    /**
     * The awizoSMS
     * @var bool|null
     */
    protected ?bool $awizoSMS = null;
    /**
     * Constructor method for przesylkaPaletowaType
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $miejsceOdbioru
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $miejsceDoreczenia
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PaletaType $paleta
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PlatnikType $platnik
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType $pobranie
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\SubPrzesylkaPaletowaType[] $subPaleta
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\DaneSentType[] $daneSent
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AwizacjaType $awizacja
     * @param string $zawartosc
     * @param int $masa
     * @param string $dataZaladunku
     * @param string $dataDostawy
     * @param int $wartosc
     * @param int $iloscZwracanychPaletEUR
     * @param string $zalaczonaFV
     * @param string $zalaczonyWZ
     * @param string $zalaczoneInne
     * @param string $zwracanaFV
     * @param string $zwracanyWZ
     * @param string $zwracaneInne
     * @param string $powiadomienieNadawcy
     * @param string $powiadomienieOdbiorcy
     * @param bool $dostawaWSobote
     * @param bool $przygotowanieDokumentowPrzewozowych
     * @param bool $dostawaSamochodemDedykowanym
     * @param bool $zmianaDanychAdresowych
     * @param bool $ustalenieTerminuDostawy
     * @param bool $samochodZWinda
     * @param bool $zabranieOpakowania
     * @param bool $wniesienie
     * @param bool $awizoSMS
     *@uses PrzesylkaPaletowaType::setMiejsceOdbioru()
     * @uses PrzesylkaPaletowaType::setMiejsceDoreczenia()
     * @uses PrzesylkaPaletowaType::setPaleta()
     * @uses PrzesylkaPaletowaType::setPlatnik()
     * @uses PrzesylkaPaletowaType::setPobranie()
     * @uses PrzesylkaPaletowaType::setSubPaleta()
     * @uses PrzesylkaPaletowaType::setDaneSent()
     * @uses PrzesylkaPaletowaType::setAwizacja()
     * @uses PrzesylkaPaletowaType::setZawartosc()
     * @uses PrzesylkaPaletowaType::setMasa()
     * @uses PrzesylkaPaletowaType::setDataZaladunku()
     * @uses PrzesylkaPaletowaType::setDataDostawy()
     * @uses PrzesylkaPaletowaType::setWartosc()
     * @uses PrzesylkaPaletowaType::setIloscZwracanychPaletEUR()
     * @uses PrzesylkaPaletowaType::setZalaczonaFV()
     * @uses PrzesylkaPaletowaType::setZalaczonyWZ()
     * @uses PrzesylkaPaletowaType::setZalaczoneInne()
     * @uses PrzesylkaPaletowaType::setZwracanaFV()
     * @uses PrzesylkaPaletowaType::setZwracanyWZ()
     * @uses PrzesylkaPaletowaType::setZwracaneInne()
     * @uses PrzesylkaPaletowaType::setPowiadomienieNadawcy()
     * @uses PrzesylkaPaletowaType::setPowiadomienieOdbiorcy()
     * @uses PrzesylkaPaletowaType::setDostawaWSobote()
     * @uses PrzesylkaPaletowaType::setPrzygotowanieDokumentowPrzewozowych()
     * @uses PrzesylkaPaletowaType::setDostawaSamochodemDedykowanym()
     * @uses PrzesylkaPaletowaType::setZmianaDanychAdresowych()
     * @uses PrzesylkaPaletowaType::setUstalenieTerminuDostawy()
     * @uses PrzesylkaPaletowaType::setSamochodZWinda()
     * @uses PrzesylkaPaletowaType::setZabranieOpakowania()
     * @uses PrzesylkaPaletowaType::setWniesienie()
     * @uses PrzesylkaPaletowaType::setAwizoSMS()
     */
    public function __construct(?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $miejsceOdbioru = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $miejsceDoreczenia = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\PaletaType $paleta = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\PlatnikType $platnik = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType $pobranie = null, ?array $subPaleta = null, ?array $daneSent = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\AwizacjaType $awizacja = null, ?string $zawartosc = null, ?int $masa = null, ?string $dataZaladunku = null, ?string $dataDostawy = null, ?int $wartosc = null, ?int $iloscZwracanychPaletEUR = null, ?string $zalaczonaFV = null, ?string $zalaczonyWZ = null, ?string $zalaczoneInne = null, ?string $zwracanaFV = null, ?string $zwracanyWZ = null, ?string $zwracaneInne = null, ?string $powiadomienieNadawcy = null, ?string $powiadomienieOdbiorcy = null, ?bool $dostawaWSobote = null, ?bool $przygotowanieDokumentowPrzewozowych = null, ?bool $dostawaSamochodemDedykowanym = null, ?bool $zmianaDanychAdresowych = null, ?bool $ustalenieTerminuDostawy = null, ?bool $samochodZWinda = null, ?bool $zabranieOpakowania = null, ?bool $wniesienie = null, ?bool $awizoSMS = null)
    {
        $this
            ->setMiejsceOdbioru($miejsceOdbioru)
            ->setMiejsceDoreczenia($miejsceDoreczenia)
            ->setPaleta($paleta)
            ->setPlatnik($platnik)
            ->setPobranie($pobranie)
            ->setSubPaleta($subPaleta)
            ->setDaneSent($daneSent)
            ->setAwizacja($awizacja)
            ->setZawartosc($zawartosc)
            ->setMasa($masa)
            ->setDataZaladunku($dataZaladunku)
            ->setDataDostawy($dataDostawy)
            ->setWartosc($wartosc)
            ->setIloscZwracanychPaletEUR($iloscZwracanychPaletEUR)
            ->setZalaczonaFV($zalaczonaFV)
            ->setZalaczonyWZ($zalaczonyWZ)
            ->setZalaczoneInne($zalaczoneInne)
            ->setZwracanaFV($zwracanaFV)
            ->setZwracanyWZ($zwracanyWZ)
            ->setZwracaneInne($zwracaneInne)
            ->setPowiadomienieNadawcy($powiadomienieNadawcy)
            ->setPowiadomienieOdbiorcy($powiadomienieOdbiorcy)
            ->setDostawaWSobote($dostawaWSobote)
            ->setPrzygotowanieDokumentowPrzewozowych($przygotowanieDokumentowPrzewozowych)
            ->setDostawaSamochodemDedykowanym($dostawaSamochodemDedykowanym)
            ->setZmianaDanychAdresowych($zmianaDanychAdresowych)
            ->setUstalenieTerminuDostawy($ustalenieTerminuDostawy)
            ->setSamochodZWinda($samochodZWinda)
            ->setZabranieOpakowania($zabranieOpakowania)
            ->setWniesienie($wniesienie)
            ->setAwizoSMS($awizoSMS);
    }
    /**
     * Get miejsceOdbioru value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType|null
     */
    public function getMiejsceOdbioru(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType
    {
        return $this->miejsceOdbioru;
    }
    /**
     * Set miejsceOdbioru value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $miejsceOdbioru
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setMiejsceOdbioru(?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $miejsceOdbioru = null): self
    {
        $this->miejsceOdbioru = $miejsceOdbioru;
        
        return $this;
    }
    /**
     * Get miejsceDoreczenia value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType|null
     */
    public function getMiejsceDoreczenia(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType
    {
        return $this->miejsceDoreczenia;
    }
    /**
     * Set miejsceDoreczenia value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $miejsceDoreczenia
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setMiejsceDoreczenia(?\app\modules\postal\modules\poczta_polska\sender\StructType\AdresType $miejsceDoreczenia = null): self
    {
        $this->miejsceDoreczenia = $miejsceDoreczenia;
        
        return $this;
    }
    /**
     * Get paleta value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\PaletaType|null
     */
    public function getPaleta(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\PaletaType
    {
        return $this->paleta;
    }
    /**
     * Set paleta value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PaletaType $paleta
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setPaleta(?\app\modules\postal\modules\poczta_polska\sender\StructType\PaletaType $paleta = null): self
    {
        $this->paleta = $paleta;
        
        return $this;
    }
    /**
     * Get platnik value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\PlatnikType|null
     */
    public function getPlatnik(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\PlatnikType
    {
        return $this->platnik;
    }
    /**
     * Set platnik value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\PlatnikType $platnik
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setPlatnik(?\app\modules\postal\modules\poczta_polska\sender\StructType\PlatnikType $platnik = null): self
    {
        $this->platnik = $platnik;
        
        return $this;
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setPobranie(?\app\modules\postal\modules\poczta_polska\sender\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
        return $this;
    }
    /**
     * Get subPaleta value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\SubPrzesylkaPaletowaType[]
     */
    public function getSubPaleta(): ?array
    {
        return $this->subPaleta;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSubPaleta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubPaleta method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubPaletaForArrayConstraintFromSetSubPaleta(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $przesylkaPaletowaTypeSubPaletaItem) {
            // validation for constraint: itemType
            if (!$przesylkaPaletowaTypeSubPaletaItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\SubPrzesylkaPaletowaType) {
                $invalidValues[] = is_object($przesylkaPaletowaTypeSubPaletaItem) ? get_class($przesylkaPaletowaTypeSubPaletaItem) : sprintf('%s(%s)', gettype($przesylkaPaletowaTypeSubPaletaItem), var_export($przesylkaPaletowaTypeSubPaletaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The subPaleta property can only contain items of type \app\modules\postal\sender\StructType\SubPrzesylkaPaletowaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set subPaleta value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\SubPrzesylkaPaletowaType[] $subPaleta
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     *@throws InvalidArgumentException
     */
    public function setSubPaleta(?array $subPaleta = null): self
    {
        // validation for constraint: array
        if ('' !== ($subPaletaArrayErrorMessage = self::validateSubPaletaForArrayConstraintFromSetSubPaleta($subPaleta))) {
            throw new InvalidArgumentException($subPaletaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(32)
        if (is_array($subPaleta) && count($subPaleta) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 32', count($subPaleta)), __LINE__);
        }
        $this->subPaleta = $subPaleta;
        
        return $this;
    }
    /**
     * Add item to subPaleta value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\SubPrzesylkaPaletowaType $item
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     *@throws InvalidArgumentException
     */
    public function addToSubPaleta(\app\modules\postal\modules\poczta_polska\sender\StructType\SubPrzesylkaPaletowaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\SubPrzesylkaPaletowaType) {
            throw new InvalidArgumentException(sprintf('The subPaleta property can only contain items of type \app\modules\postal\sender\StructType\SubPrzesylkaPaletowaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(32)
        if (is_array($this->subPaleta) && count($this->subPaleta) >= 32) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 32', count($this->subPaleta)), __LINE__);
        }
        $this->subPaleta[] = $item;
        
        return $this;
    }
    /**
     * Get daneSent value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\DaneSentType[]
     */
    public function getDaneSent(): ?array
    {
        return $this->daneSent;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDaneSent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDaneSent method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDaneSentForArrayConstraintFromSetDaneSent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $przesylkaPaletowaTypeDaneSentItem) {
            // validation for constraint: itemType
            if (!$przesylkaPaletowaTypeDaneSentItem instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\DaneSentType) {
                $invalidValues[] = is_object($przesylkaPaletowaTypeDaneSentItem) ? get_class($przesylkaPaletowaTypeDaneSentItem) : sprintf('%s(%s)', gettype($przesylkaPaletowaTypeDaneSentItem), var_export($przesylkaPaletowaTypeDaneSentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The daneSent property can only contain items of type \app\modules\postal\sender\StructType\DaneSentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set daneSent value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\DaneSentType[] $daneSent
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     *@throws InvalidArgumentException
     */
    public function setDaneSent(?array $daneSent = null): self
    {
        // validation for constraint: array
        if ('' !== ($daneSentArrayErrorMessage = self::validateDaneSentForArrayConstraintFromSetDaneSent($daneSent))) {
            throw new InvalidArgumentException($daneSentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($daneSent) && count($daneSent) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($daneSent)), __LINE__);
        }
        $this->daneSent = $daneSent;
        
        return $this;
    }
    /**
     * Add item to daneSent value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\DaneSentType $item
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     *@throws InvalidArgumentException
     */
    public function addToDaneSent(\app\modules\postal\modules\poczta_polska\sender\StructType\DaneSentType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\modules\poczta_polska\sender\StructType\DaneSentType) {
            throw new InvalidArgumentException(sprintf('The daneSent property can only contain items of type \app\modules\postal\sender\StructType\DaneSentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->daneSent) && count($this->daneSent) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->daneSent)), __LINE__);
        }
        $this->daneSent[] = $item;
        
        return $this;
    }
    /**
     * Get awizacja value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\AwizacjaType|null
     */
    public function getAwizacja(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\AwizacjaType
    {
        return $this->awizacja;
    }
    /**
     * Set awizacja value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AwizacjaType $awizacja
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setAwizacja(?\app\modules\postal\modules\poczta_polska\sender\StructType\AwizacjaType $awizacja = null): self
    {
        $this->awizacja = $awizacja;
        
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
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
     * Get dataZaladunku value
     * @return string|null
     */
    public function getDataZaladunku(): ?string
    {
        return $this->dataZaladunku;
    }
    /**
     * Set dataZaladunku value
     * @param string $dataZaladunku
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setDataZaladunku(?string $dataZaladunku = null): self
    {
        // validation for constraint: string
        if (!is_null($dataZaladunku) && !is_string($dataZaladunku)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataZaladunku, true), gettype($dataZaladunku)), __LINE__);
        }
        $this->dataZaladunku = $dataZaladunku;
        
        return $this;
    }
    /**
     * Get dataDostawy value
     * @return string|null
     */
    public function getDataDostawy(): ?string
    {
        return $this->dataDostawy;
    }
    /**
     * Set dataDostawy value
     * @param string $dataDostawy
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setDataDostawy(?string $dataDostawy = null): self
    {
        // validation for constraint: string
        if (!is_null($dataDostawy) && !is_string($dataDostawy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataDostawy, true), gettype($dataDostawy)), __LINE__);
        }
        $this->dataDostawy = $dataDostawy;
        
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
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
     * Get iloscZwracanychPaletEUR value
     * @return int|null
     */
    public function getIloscZwracanychPaletEUR(): ?int
    {
        return $this->iloscZwracanychPaletEUR;
    }
    /**
     * Set iloscZwracanychPaletEUR value
     * @param int $iloscZwracanychPaletEUR
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setIloscZwracanychPaletEUR(?int $iloscZwracanychPaletEUR = null): self
    {
        // validation for constraint: int
        if (!is_null($iloscZwracanychPaletEUR) && !(is_int($iloscZwracanychPaletEUR) || ctype_digit($iloscZwracanychPaletEUR))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscZwracanychPaletEUR, true), gettype($iloscZwracanychPaletEUR)), __LINE__);
        }
        $this->iloscZwracanychPaletEUR = $iloscZwracanychPaletEUR;
        
        return $this;
    }
    /**
     * Get zalaczonaFV value
     * @return string|null
     */
    public function getZalaczonaFV(): ?string
    {
        return $this->zalaczonaFV;
    }
    /**
     * Set zalaczonaFV value
     * @param string $zalaczonaFV
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setZalaczonaFV(?string $zalaczonaFV = null): self
    {
        // validation for constraint: string
        if (!is_null($zalaczonaFV) && !is_string($zalaczonaFV)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zalaczonaFV, true), gettype($zalaczonaFV)), __LINE__);
        }
        $this->zalaczonaFV = $zalaczonaFV;
        
        return $this;
    }
    /**
     * Get zalaczonyWZ value
     * @return string|null
     */
    public function getZalaczonyWZ(): ?string
    {
        return $this->zalaczonyWZ;
    }
    /**
     * Set zalaczonyWZ value
     * @param string $zalaczonyWZ
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setZalaczonyWZ(?string $zalaczonyWZ = null): self
    {
        // validation for constraint: string
        if (!is_null($zalaczonyWZ) && !is_string($zalaczonyWZ)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zalaczonyWZ, true), gettype($zalaczonyWZ)), __LINE__);
        }
        $this->zalaczonyWZ = $zalaczonyWZ;
        
        return $this;
    }
    /**
     * Get zalaczoneInne value
     * @return string|null
     */
    public function getZalaczoneInne(): ?string
    {
        return $this->zalaczoneInne;
    }
    /**
     * Set zalaczoneInne value
     * @param string $zalaczoneInne
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setZalaczoneInne(?string $zalaczoneInne = null): self
    {
        // validation for constraint: string
        if (!is_null($zalaczoneInne) && !is_string($zalaczoneInne)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zalaczoneInne, true), gettype($zalaczoneInne)), __LINE__);
        }
        $this->zalaczoneInne = $zalaczoneInne;
        
        return $this;
    }
    /**
     * Get zwracanaFV value
     * @return string|null
     */
    public function getZwracanaFV(): ?string
    {
        return $this->zwracanaFV;
    }
    /**
     * Set zwracanaFV value
     * @param string $zwracanaFV
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setZwracanaFV(?string $zwracanaFV = null): self
    {
        // validation for constraint: string
        if (!is_null($zwracanaFV) && !is_string($zwracanaFV)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zwracanaFV, true), gettype($zwracanaFV)), __LINE__);
        }
        $this->zwracanaFV = $zwracanaFV;
        
        return $this;
    }
    /**
     * Get zwracanyWZ value
     * @return string|null
     */
    public function getZwracanyWZ(): ?string
    {
        return $this->zwracanyWZ;
    }
    /**
     * Set zwracanyWZ value
     * @param string $zwracanyWZ
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setZwracanyWZ(?string $zwracanyWZ = null): self
    {
        // validation for constraint: string
        if (!is_null($zwracanyWZ) && !is_string($zwracanyWZ)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zwracanyWZ, true), gettype($zwracanyWZ)), __LINE__);
        }
        $this->zwracanyWZ = $zwracanyWZ;
        
        return $this;
    }
    /**
     * Get zwracaneInne value
     * @return string|null
     */
    public function getZwracaneInne(): ?string
    {
        return $this->zwracaneInne;
    }
    /**
     * Set zwracaneInne value
     * @param string $zwracaneInne
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setZwracaneInne(?string $zwracaneInne = null): self
    {
        // validation for constraint: string
        if (!is_null($zwracaneInne) && !is_string($zwracaneInne)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zwracaneInne, true), gettype($zwracaneInne)), __LINE__);
        }
        $this->zwracaneInne = $zwracaneInne;
        
        return $this;
    }
    /**
     * Get powiadomienieNadawcy value
     * @return string|null
     */
    public function getPowiadomienieNadawcy(): ?string
    {
        return $this->powiadomienieNadawcy;
    }
    /**
     * Set powiadomienieNadawcy value
     * @param string $powiadomienieNadawcy
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setPowiadomienieNadawcy(?string $powiadomienieNadawcy = null): self
    {
        // validation for constraint: string
        if (!is_null($powiadomienieNadawcy) && !is_string($powiadomienieNadawcy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($powiadomienieNadawcy, true), gettype($powiadomienieNadawcy)), __LINE__);
        }
        $this->powiadomienieNadawcy = $powiadomienieNadawcy;
        
        return $this;
    }
    /**
     * Get powiadomienieOdbiorcy value
     * @return string|null
     */
    public function getPowiadomienieOdbiorcy(): ?string
    {
        return $this->powiadomienieOdbiorcy;
    }
    /**
     * Set powiadomienieOdbiorcy value
     * @param string $powiadomienieOdbiorcy
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     * @throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\ESposobPowiadomieniaType::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\ESposobPowiadomieniaType::valueIsValid()
     */
    public function setPowiadomienieOdbiorcy(?string $powiadomienieOdbiorcy = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\ESposobPowiadomieniaType::valueIsValid($powiadomienieOdbiorcy)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\ESposobPowiadomieniaType', is_array($powiadomienieOdbiorcy) ? implode(', ', $powiadomienieOdbiorcy) : var_export($powiadomienieOdbiorcy, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\ESposobPowiadomieniaType::getValidValues())), __LINE__);
        }
        $this->powiadomienieOdbiorcy = $powiadomienieOdbiorcy;
        
        return $this;
    }
    /**
     * Get dostawaWSobote value
     * @return bool|null
     */
    public function getDostawaWSobote(): ?bool
    {
        return $this->dostawaWSobote;
    }
    /**
     * Set dostawaWSobote value
     * @param bool $dostawaWSobote
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setDostawaWSobote(?bool $dostawaWSobote = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dostawaWSobote) && !is_bool($dostawaWSobote)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dostawaWSobote, true), gettype($dostawaWSobote)), __LINE__);
        }
        $this->dostawaWSobote = $dostawaWSobote;
        
        return $this;
    }
    /**
     * Get przygotowanieDokumentowPrzewozowych value
     * @return bool|null
     */
    public function getPrzygotowanieDokumentowPrzewozowych(): ?bool
    {
        return $this->przygotowanieDokumentowPrzewozowych;
    }
    /**
     * Set przygotowanieDokumentowPrzewozowych value
     * @param bool $przygotowanieDokumentowPrzewozowych
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setPrzygotowanieDokumentowPrzewozowych(?bool $przygotowanieDokumentowPrzewozowych = null): self
    {
        // validation for constraint: boolean
        if (!is_null($przygotowanieDokumentowPrzewozowych) && !is_bool($przygotowanieDokumentowPrzewozowych)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($przygotowanieDokumentowPrzewozowych, true), gettype($przygotowanieDokumentowPrzewozowych)), __LINE__);
        }
        $this->przygotowanieDokumentowPrzewozowych = $przygotowanieDokumentowPrzewozowych;
        
        return $this;
    }
    /**
     * Get dostawaSamochodemDedykowanym value
     * @return bool|null
     */
    public function getDostawaSamochodemDedykowanym(): ?bool
    {
        return $this->dostawaSamochodemDedykowanym;
    }
    /**
     * Set dostawaSamochodemDedykowanym value
     * @param bool $dostawaSamochodemDedykowanym
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setDostawaSamochodemDedykowanym(?bool $dostawaSamochodemDedykowanym = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dostawaSamochodemDedykowanym) && !is_bool($dostawaSamochodemDedykowanym)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dostawaSamochodemDedykowanym, true), gettype($dostawaSamochodemDedykowanym)), __LINE__);
        }
        $this->dostawaSamochodemDedykowanym = $dostawaSamochodemDedykowanym;
        
        return $this;
    }
    /**
     * Get zmianaDanychAdresowych value
     * @return bool|null
     */
    public function getZmianaDanychAdresowych(): ?bool
    {
        return $this->zmianaDanychAdresowych;
    }
    /**
     * Set zmianaDanychAdresowych value
     * @param bool $zmianaDanychAdresowych
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setZmianaDanychAdresowych(?bool $zmianaDanychAdresowych = null): self
    {
        // validation for constraint: boolean
        if (!is_null($zmianaDanychAdresowych) && !is_bool($zmianaDanychAdresowych)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zmianaDanychAdresowych, true), gettype($zmianaDanychAdresowych)), __LINE__);
        }
        $this->zmianaDanychAdresowych = $zmianaDanychAdresowych;
        
        return $this;
    }
    /**
     * Get ustalenieTerminuDostawy value
     * @return bool|null
     */
    public function getUstalenieTerminuDostawy(): ?bool
    {
        return $this->ustalenieTerminuDostawy;
    }
    /**
     * Set ustalenieTerminuDostawy value
     * @param bool $ustalenieTerminuDostawy
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setUstalenieTerminuDostawy(?bool $ustalenieTerminuDostawy = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ustalenieTerminuDostawy) && !is_bool($ustalenieTerminuDostawy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ustalenieTerminuDostawy, true), gettype($ustalenieTerminuDostawy)), __LINE__);
        }
        $this->ustalenieTerminuDostawy = $ustalenieTerminuDostawy;
        
        return $this;
    }
    /**
     * Get samochodZWinda value
     * @return bool|null
     */
    public function getSamochodZWinda(): ?bool
    {
        return $this->samochodZWinda;
    }
    /**
     * Set samochodZWinda value
     * @param bool $samochodZWinda
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setSamochodZWinda(?bool $samochodZWinda = null): self
    {
        // validation for constraint: boolean
        if (!is_null($samochodZWinda) && !is_bool($samochodZWinda)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($samochodZWinda, true), gettype($samochodZWinda)), __LINE__);
        }
        $this->samochodZWinda = $samochodZWinda;
        
        return $this;
    }
    /**
     * Get zabranieOpakowania value
     * @return bool|null
     */
    public function getZabranieOpakowania(): ?bool
    {
        return $this->zabranieOpakowania;
    }
    /**
     * Set zabranieOpakowania value
     * @param bool $zabranieOpakowania
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setZabranieOpakowania(?bool $zabranieOpakowania = null): self
    {
        // validation for constraint: boolean
        if (!is_null($zabranieOpakowania) && !is_bool($zabranieOpakowania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zabranieOpakowania, true), gettype($zabranieOpakowania)), __LINE__);
        }
        $this->zabranieOpakowania = $zabranieOpakowania;
        
        return $this;
    }
    /**
     * Get wniesienie value
     * @return bool|null
     */
    public function getWniesienie(): ?bool
    {
        return $this->wniesienie;
    }
    /**
     * Set wniesienie value
     * @param bool $wniesienie
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setWniesienie(?bool $wniesienie = null): self
    {
        // validation for constraint: boolean
        if (!is_null($wniesienie) && !is_bool($wniesienie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wniesienie, true), gettype($wniesienie)), __LINE__);
        }
        $this->wniesienie = $wniesienie;
        
        return $this;
    }
    /**
     * Get awizoSMS value
     * @return bool|null
     */
    public function getAwizoSMS(): ?bool
    {
        return $this->awizoSMS;
    }
    /**
     * Set awizoSMS value
     * @param bool $awizoSMS
     * @return \app\modules\postal\sender\StructType\PrzesylkaPaletowaType
     */
    public function setAwizoSMS(?bool $awizoSMS = null): self
    {
        // validation for constraint: boolean
        if (!is_null($awizoSMS) && !is_bool($awizoSMS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($awizoSMS, true), gettype($awizoSMS)), __LINE__);
        }
        $this->awizoSMS = $awizoSMS;
        
        return $this;
    }
}
