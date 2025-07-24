<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AccountType extends AbstractStructBase
{
    /**
     * The karta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\KartaType[]
     */
    protected ?array $karta = null;
    /**
     * The permision
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $permision = null;
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \app\modules\postal\sender\StructType\ProfilType[]
     */
    protected ?array $profil = null;
    /**
     * The jednostka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType[]
     */
    protected ?array $jednostka = null;
    /**
     * The domyslnaJednostka
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType|null
     */
    protected ?\app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka = null;
    /**
     * The domyslnyProfil
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\ProfilType|null
     */
    protected ?\app\modules\postal\sender\StructType\ProfilType $domyslnyProfil = null;
    /**
     * The dostepPoAdresieIP
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $dostepPoAdresieIP = null;
    /**
     * The idDomyslnyProfilDokZwrKlient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idDomyslnyProfilDokZwrKlient = null;
    /**
     * The idDomyslnyProfilDokZwrUzytk
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idDomyslnyProfilDokZwrUzytk = null;
    /**
     * The rodzajPrzypisania
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $rodzajPrzypisania = null;
    /**
     * The userName
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * The firstName
     * @var string|null
     */
    protected ?string $firstName = null;
    /**
     * The lastName
     * @var string|null
     */
    protected ?string $lastName = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * Constructor method for accountType
     * @uses AccountType::setKarta()
     * @uses AccountType::setPermision()
     * @uses AccountType::setProfil()
     * @uses AccountType::setJednostka()
     * @uses AccountType::setDomyslnaJednostka()
     * @uses AccountType::setDomyslnyProfil()
     * @uses AccountType::setDostepPoAdresieIP()
     * @uses AccountType::setIdDomyslnyProfilDokZwrKlient()
     * @uses AccountType::setIdDomyslnyProfilDokZwrUzytk()
     * @uses AccountType::setRodzajPrzypisania()
     * @uses AccountType::setUserName()
     * @uses AccountType::setFirstName()
     * @uses AccountType::setLastName()
     * @uses AccountType::setEmail()
     * @uses AccountType::setStatus()
     * @param \app\modules\postal\sender\StructType\KartaType[] $karta
     * @param string[] $permision
     * @param \app\modules\postal\sender\StructType\ProfilType[] $profil
     * @param \app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType[] $jednostka
     * @param \app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka
     * @param \app\modules\postal\sender\StructType\ProfilType $domyslnyProfil
     * @param string[] $dostepPoAdresieIP
     * @param int $idDomyslnyProfilDokZwrKlient
     * @param int $idDomyslnyProfilDokZwrUzytk
     * @param string[] $rodzajPrzypisania
     * @param string $userName
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $status
     */
    public function __construct(?array $karta = null, ?array $permision = null, ?array $profil = null, ?array $jednostka = null, ?\app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka = null, ?\app\modules\postal\sender\StructType\ProfilType $domyslnyProfil = null, ?array $dostepPoAdresieIP = null, ?int $idDomyslnyProfilDokZwrKlient = null, ?int $idDomyslnyProfilDokZwrUzytk = null, ?array $rodzajPrzypisania = null, ?string $userName = null, ?string $firstName = null, ?string $lastName = null, ?string $email = null, ?string $status = null)
    {
        $this
            ->setKarta($karta)
            ->setPermision($permision)
            ->setProfil($profil)
            ->setJednostka($jednostka)
            ->setDomyslnaJednostka($domyslnaJednostka)
            ->setDomyslnyProfil($domyslnyProfil)
            ->setDostepPoAdresieIP($dostepPoAdresieIP)
            ->setIdDomyslnyProfilDokZwrKlient($idDomyslnyProfilDokZwrKlient)
            ->setIdDomyslnyProfilDokZwrUzytk($idDomyslnyProfilDokZwrUzytk)
            ->setRodzajPrzypisania($rodzajPrzypisania)
            ->setUserName($userName)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setEmail($email)
            ->setStatus($status);
    }
    /**
     * Get karta value
     * @return \app\modules\postal\sender\StructType\KartaType[]
     */
    public function getKarta(): ?array
    {
        return $this->karta;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setKarta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKarta method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKartaForArrayConstraintFromSetKarta(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountTypeKartaItem) {
            // validation for constraint: itemType
            if (!$accountTypeKartaItem instanceof \app\modules\postal\sender\StructType\KartaType) {
                $invalidValues[] = is_object($accountTypeKartaItem) ? get_class($accountTypeKartaItem) : sprintf('%s(%s)', gettype($accountTypeKartaItem), var_export($accountTypeKartaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The karta property can only contain items of type \app\modules\postal\sender\StructType\KartaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set karta value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\KartaType[] $karta
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function setKarta(?array $karta = null): self
    {
        // validation for constraint: array
        if ('' !== ($kartaArrayErrorMessage = self::validateKartaForArrayConstraintFromSetKarta($karta))) {
            throw new InvalidArgumentException($kartaArrayErrorMessage, __LINE__);
        }
        $this->karta = $karta;
        
        return $this;
    }
    /**
     * Add item to karta value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\KartaType $item
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function addToKarta(\app\modules\postal\sender\StructType\KartaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\sender\StructType\KartaType) {
            throw new InvalidArgumentException(sprintf('The karta property can only contain items of type \app\modules\postal\sender\StructType\KartaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->karta[] = $item;
        
        return $this;
    }
    /**
     * Get permision value
     * @return string[]
     */
    public function getPermision(): ?array
    {
        return $this->permision;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPermision method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPermision method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePermisionForArrayConstraintFromSetPermision(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountTypePermisionItem) {
            // validation for constraint: enumeration
            if (!\app\modules\postal\sender\EnumType\PermisionType::valueIsValid($accountTypePermisionItem)) {
                $invalidValues[] = is_object($accountTypePermisionItem) ? get_class($accountTypePermisionItem) : sprintf('%s(%s)', gettype($accountTypePermisionItem), var_export($accountTypePermisionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\PermisionType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \app\modules\postal\sender\EnumType\PermisionType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set permision value
     * @uses \app\modules\postal\sender\EnumType\PermisionType::valueIsValid()
     * @uses \app\modules\postal\sender\EnumType\PermisionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $permision
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function setPermision(?array $permision = null): self
    {
        // validation for constraint: array
        if ('' !== ($permisionArrayErrorMessage = self::validatePermisionForArrayConstraintFromSetPermision($permision))) {
            throw new InvalidArgumentException($permisionArrayErrorMessage, __LINE__);
        }
        $this->permision = $permision;
        
        return $this;
    }
    /**
     * Add item to permision value
     * @uses \app\modules\postal\sender\EnumType\PermisionType::valueIsValid()
     * @uses \app\modules\postal\sender\EnumType\PermisionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function addToPermision(string $item): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\sender\EnumType\PermisionType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\PermisionType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \app\modules\postal\sender\EnumType\PermisionType::getValidValues())), __LINE__);
        }
        $this->permision[] = $item;
        
        return $this;
    }
    /**
     * Get profil value
     * @return \app\modules\postal\sender\StructType\ProfilType[]
     */
    public function getProfil(): ?array
    {
        return $this->profil;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProfil method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProfil method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProfilForArrayConstraintFromSetProfil(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountTypeProfilItem) {
            // validation for constraint: itemType
            if (!$accountTypeProfilItem instanceof \app\modules\postal\sender\StructType\ProfilType) {
                $invalidValues[] = is_object($accountTypeProfilItem) ? get_class($accountTypeProfilItem) : sprintf('%s(%s)', gettype($accountTypeProfilItem), var_export($accountTypeProfilItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The profil property can only contain items of type \app\modules\postal\sender\StructType\ProfilType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set profil value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\ProfilType[] $profil
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function setProfil(?array $profil = null): self
    {
        // validation for constraint: array
        if ('' !== ($profilArrayErrorMessage = self::validateProfilForArrayConstraintFromSetProfil($profil))) {
            throw new InvalidArgumentException($profilArrayErrorMessage, __LINE__);
        }
        $this->profil = $profil;
        
        return $this;
    }
    /**
     * Add item to profil value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\ProfilType $item
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function addToProfil(\app\modules\postal\sender\StructType\ProfilType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\sender\StructType\ProfilType) {
            throw new InvalidArgumentException(sprintf('The profil property can only contain items of type \app\modules\postal\sender\StructType\ProfilType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->profil[] = $item;
        
        return $this;
    }
    /**
     * Get jednostka value
     * @return \app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType[]
     */
    public function getJednostka(): ?array
    {
        return $this->jednostka;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setJednostka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJednostka method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJednostkaForArrayConstraintFromSetJednostka(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountTypeJednostkaItem) {
            // validation for constraint: itemType
            if (!$accountTypeJednostkaItem instanceof \app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType) {
                $invalidValues[] = is_object($accountTypeJednostkaItem) ? get_class($accountTypeJednostkaItem) : sprintf('%s(%s)', gettype($accountTypeJednostkaItem), var_export($accountTypeJednostkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The jednostka property can only contain items of type \app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set jednostka value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType[] $jednostka
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function setJednostka(?array $jednostka = null): self
    {
        // validation for constraint: array
        if ('' !== ($jednostkaArrayErrorMessage = self::validateJednostkaForArrayConstraintFromSetJednostka($jednostka))) {
            throw new InvalidArgumentException($jednostkaArrayErrorMessage, __LINE__);
        }
        $this->jednostka = $jednostka;
        
        return $this;
    }
    /**
     * Add item to jednostka value
     * @throws InvalidArgumentException
     * @param \app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType $item
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function addToJednostka(\app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType) {
            throw new InvalidArgumentException(sprintf('The jednostka property can only contain items of type \app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->jednostka[] = $item;
        
        return $this;
    }
    /**
     * Get domyslnaJednostka value
     * @return \app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType|null
     */
    public function getDomyslnaJednostka(): ?\app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType
    {
        return $this->domyslnaJednostka;
    }
    /**
     * Set domyslnaJednostka value
     * @param \app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function setDomyslnaJednostka(?\app\modules\postal\sender\StructType\JednostkaOrganizacyjnaType $domyslnaJednostka = null): self
    {
        $this->domyslnaJednostka = $domyslnaJednostka;
        
        return $this;
    }
    /**
     * Get domyslnyProfil value
     * @return \app\modules\postal\sender\StructType\ProfilType|null
     */
    public function getDomyslnyProfil(): ?\app\modules\postal\sender\StructType\ProfilType
    {
        return $this->domyslnyProfil;
    }
    /**
     * Set domyslnyProfil value
     * @param \app\modules\postal\sender\StructType\ProfilType $domyslnyProfil
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function setDomyslnyProfil(?\app\modules\postal\sender\StructType\ProfilType $domyslnyProfil = null): self
    {
        $this->domyslnyProfil = $domyslnyProfil;
        
        return $this;
    }
    /**
     * Get dostepPoAdresieIP value
     * @return string[]
     */
    public function getDostepPoAdresieIP(): ?array
    {
        return $this->dostepPoAdresieIP;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDostepPoAdresieIP method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDostepPoAdresieIP method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDostepPoAdresieIPForArrayConstraintFromSetDostepPoAdresieIP(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountTypeDostepPoAdresieIPItem) {
            // validation for constraint: itemType
            if (!is_string($accountTypeDostepPoAdresieIPItem)) {
                $invalidValues[] = is_object($accountTypeDostepPoAdresieIPItem) ? get_class($accountTypeDostepPoAdresieIPItem) : sprintf('%s(%s)', gettype($accountTypeDostepPoAdresieIPItem), var_export($accountTypeDostepPoAdresieIPItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dostepPoAdresieIP property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set dostepPoAdresieIP value
     * @throws InvalidArgumentException
     * @param string[] $dostepPoAdresieIP
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function setDostepPoAdresieIP(?array $dostepPoAdresieIP = null): self
    {
        // validation for constraint: array
        if ('' !== ($dostepPoAdresieIPArrayErrorMessage = self::validateDostepPoAdresieIPForArrayConstraintFromSetDostepPoAdresieIP($dostepPoAdresieIP))) {
            throw new InvalidArgumentException($dostepPoAdresieIPArrayErrorMessage, __LINE__);
        }
        $this->dostepPoAdresieIP = $dostepPoAdresieIP;
        
        return $this;
    }
    /**
     * Add item to dostepPoAdresieIP value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function addToDostepPoAdresieIP(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The dostepPoAdresieIP property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->dostepPoAdresieIP[] = $item;
        
        return $this;
    }
    /**
     * Get idDomyslnyProfilDokZwrKlient value
     * @return int|null
     */
    public function getIdDomyslnyProfilDokZwrKlient(): ?int
    {
        return $this->idDomyslnyProfilDokZwrKlient;
    }
    /**
     * Set idDomyslnyProfilDokZwrKlient value
     * @param int $idDomyslnyProfilDokZwrKlient
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function setIdDomyslnyProfilDokZwrKlient(?int $idDomyslnyProfilDokZwrKlient = null): self
    {
        // validation for constraint: int
        if (!is_null($idDomyslnyProfilDokZwrKlient) && !(is_int($idDomyslnyProfilDokZwrKlient) || ctype_digit($idDomyslnyProfilDokZwrKlient))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idDomyslnyProfilDokZwrKlient, true), gettype($idDomyslnyProfilDokZwrKlient)), __LINE__);
        }
        $this->idDomyslnyProfilDokZwrKlient = $idDomyslnyProfilDokZwrKlient;
        
        return $this;
    }
    /**
     * Get idDomyslnyProfilDokZwrUzytk value
     * @return int|null
     */
    public function getIdDomyslnyProfilDokZwrUzytk(): ?int
    {
        return $this->idDomyslnyProfilDokZwrUzytk;
    }
    /**
     * Set idDomyslnyProfilDokZwrUzytk value
     * @param int $idDomyslnyProfilDokZwrUzytk
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function setIdDomyslnyProfilDokZwrUzytk(?int $idDomyslnyProfilDokZwrUzytk = null): self
    {
        // validation for constraint: int
        if (!is_null($idDomyslnyProfilDokZwrUzytk) && !(is_int($idDomyslnyProfilDokZwrUzytk) || ctype_digit($idDomyslnyProfilDokZwrUzytk))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idDomyslnyProfilDokZwrUzytk, true), gettype($idDomyslnyProfilDokZwrUzytk)), __LINE__);
        }
        $this->idDomyslnyProfilDokZwrUzytk = $idDomyslnyProfilDokZwrUzytk;
        
        return $this;
    }
    /**
     * Get rodzajPrzypisania value
     * @return string[]
     */
    public function getRodzajPrzypisania(): ?array
    {
        return $this->rodzajPrzypisania;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRodzajPrzypisania method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRodzajPrzypisania method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRodzajPrzypisaniaForArrayConstraintFromSetRodzajPrzypisania(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountTypeRodzajPrzypisaniaItem) {
            // validation for constraint: enumeration
            if (!\app\modules\postal\sender\EnumType\RodzajPrzypisaniaDoJednostkiEnum::valueIsValid($accountTypeRodzajPrzypisaniaItem)) {
                $invalidValues[] = is_object($accountTypeRodzajPrzypisaniaItem) ? get_class($accountTypeRodzajPrzypisaniaItem) : sprintf('%s(%s)', gettype($accountTypeRodzajPrzypisaniaItem), var_export($accountTypeRodzajPrzypisaniaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\RodzajPrzypisaniaDoJednostkiEnum', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \app\modules\postal\sender\EnumType\RodzajPrzypisaniaDoJednostkiEnum::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set rodzajPrzypisania value
     * @uses \app\modules\postal\sender\EnumType\RodzajPrzypisaniaDoJednostkiEnum::valueIsValid()
     * @uses \app\modules\postal\sender\EnumType\RodzajPrzypisaniaDoJednostkiEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $rodzajPrzypisania
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function setRodzajPrzypisania(?array $rodzajPrzypisania = null): self
    {
        // validation for constraint: array
        if ('' !== ($rodzajPrzypisaniaArrayErrorMessage = self::validateRodzajPrzypisaniaForArrayConstraintFromSetRodzajPrzypisania($rodzajPrzypisania))) {
            throw new InvalidArgumentException($rodzajPrzypisaniaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($rodzajPrzypisania) && count($rodzajPrzypisania) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($rodzajPrzypisania)), __LINE__);
        }
        $this->rodzajPrzypisania = $rodzajPrzypisania;
        
        return $this;
    }
    /**
     * Add item to rodzajPrzypisania value
     * @uses \app\modules\postal\sender\EnumType\RodzajPrzypisaniaDoJednostkiEnum::valueIsValid()
     * @uses \app\modules\postal\sender\EnumType\RodzajPrzypisaniaDoJednostkiEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function addToRodzajPrzypisania(string $item): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\sender\EnumType\RodzajPrzypisaniaDoJednostkiEnum::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\RodzajPrzypisaniaDoJednostkiEnum', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \app\modules\postal\sender\EnumType\RodzajPrzypisaniaDoJednostkiEnum::getValidValues())), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->rodzajPrzypisania) && count($this->rodzajPrzypisania) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->rodzajPrzypisania)), __LINE__);
        }
        $this->rodzajPrzypisania[] = $item;
        
        return $this;
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \app\modules\postal\sender\EnumType\StatusAccountType::valueIsValid()
     * @uses \app\modules\postal\sender\EnumType\StatusAccountType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \app\modules\postal\sender\StructType\AccountType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\sender\EnumType\StatusAccountType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\StatusAccountType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \app\modules\postal\sender\EnumType\StatusAccountType::getValidValues())), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
