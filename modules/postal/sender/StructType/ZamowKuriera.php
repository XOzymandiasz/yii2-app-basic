<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zamowKuriera StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZamowKuriera extends AbstractStructBase
{
    /**
     * The miejsceOdbioru
     * @var \app\modules\postal\sender\StructType\AdresType|null
     */
    protected ?\app\modules\postal\sender\StructType\AdresType $miejsceOdbioru = null;
    /**
     * The nadawca
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\AdresType|null
     */
    protected ?\app\modules\postal\sender\StructType\AdresType $nadawca = null;
    /**
     * The oczekiwanaDataOdbioru
     * @var string|null
     */
    protected ?string $oczekiwanaDataOdbioru = null;
    /**
     * The oczekiwanaGodzinaOdbioru
     * @var string|null
     */
    protected ?string $oczekiwanaGodzinaOdbioru = null;
    /**
     * The szacowanaIloscPrzeslek
     * @var string|null
     */
    protected ?string $szacowanaIloscPrzeslek = null;
    /**
     * The szacowanaLacznaMasaPrzesylek
     * @var string|null
     */
    protected ?string $szacowanaLacznaMasaPrzesylek = null;
    /**
     * The potwierdzenieZamowieniaEmail
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 6
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $potwierdzenieZamowieniaEmail = null;
    /**
     * Constructor method for zamowKuriera
     * @uses ZamowKuriera::setMiejsceOdbioru()
     * @uses ZamowKuriera::setNadawca()
     * @uses ZamowKuriera::setOczekiwanaDataOdbioru()
     * @uses ZamowKuriera::setOczekiwanaGodzinaOdbioru()
     * @uses ZamowKuriera::setSzacowanaIloscPrzeslek()
     * @uses ZamowKuriera::setSzacowanaLacznaMasaPrzesylek()
     * @uses ZamowKuriera::setPotwierdzenieZamowieniaEmail()
     * @param \app\modules\postal\sender\StructType\AdresType $miejsceOdbioru
     * @param \app\modules\postal\sender\StructType\AdresType $nadawca
     * @param string $oczekiwanaDataOdbioru
     * @param string $oczekiwanaGodzinaOdbioru
     * @param string $szacowanaIloscPrzeslek
     * @param string $szacowanaLacznaMasaPrzesylek
     * @param string $potwierdzenieZamowieniaEmail
     */
    public function __construct(?\app\modules\postal\sender\StructType\AdresType $miejsceOdbioru = null, ?\app\modules\postal\sender\StructType\AdresType $nadawca = null, ?string $oczekiwanaDataOdbioru = null, ?string $oczekiwanaGodzinaOdbioru = null, ?string $szacowanaIloscPrzeslek = null, ?string $szacowanaLacznaMasaPrzesylek = null, ?string $potwierdzenieZamowieniaEmail = null)
    {
        $this
            ->setMiejsceOdbioru($miejsceOdbioru)
            ->setNadawca($nadawca)
            ->setOczekiwanaDataOdbioru($oczekiwanaDataOdbioru)
            ->setOczekiwanaGodzinaOdbioru($oczekiwanaGodzinaOdbioru)
            ->setSzacowanaIloscPrzeslek($szacowanaIloscPrzeslek)
            ->setSzacowanaLacznaMasaPrzesylek($szacowanaLacznaMasaPrzesylek)
            ->setPotwierdzenieZamowieniaEmail($potwierdzenieZamowieniaEmail);
    }
    /**
     * Get miejsceOdbioru value
     * @return \app\modules\postal\sender\StructType\AdresType|null
     */
    public function getMiejsceOdbioru(): ?\app\modules\postal\sender\StructType\AdresType
    {
        return $this->miejsceOdbioru;
    }
    /**
     * Set miejsceOdbioru value
     * @param \app\modules\postal\sender\StructType\AdresType $miejsceOdbioru
     * @return \app\modules\postal\sender\StructType\ZamowKuriera
     */
    public function setMiejsceOdbioru(?\app\modules\postal\sender\StructType\AdresType $miejsceOdbioru = null): self
    {
        $this->miejsceOdbioru = $miejsceOdbioru;
        
        return $this;
    }
    /**
     * Get nadawca value
     * @return \app\modules\postal\sender\StructType\AdresType|null
     */
    public function getNadawca(): ?\app\modules\postal\sender\StructType\AdresType
    {
        return $this->nadawca;
    }
    /**
     * Set nadawca value
     * @param \app\modules\postal\sender\StructType\AdresType $nadawca
     * @return \app\modules\postal\sender\StructType\ZamowKuriera
     */
    public function setNadawca(?\app\modules\postal\sender\StructType\AdresType $nadawca = null): self
    {
        $this->nadawca = $nadawca;
        
        return $this;
    }
    /**
     * Get oczekiwanaDataOdbioru value
     * @return string|null
     */
    public function getOczekiwanaDataOdbioru(): ?string
    {
        return $this->oczekiwanaDataOdbioru;
    }
    /**
     * Set oczekiwanaDataOdbioru value
     * @param string $oczekiwanaDataOdbioru
     * @return \app\modules\postal\sender\StructType\ZamowKuriera
     */
    public function setOczekiwanaDataOdbioru(?string $oczekiwanaDataOdbioru = null): self
    {
        // validation for constraint: string
        if (!is_null($oczekiwanaDataOdbioru) && !is_string($oczekiwanaDataOdbioru)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oczekiwanaDataOdbioru, true), gettype($oczekiwanaDataOdbioru)), __LINE__);
        }
        $this->oczekiwanaDataOdbioru = $oczekiwanaDataOdbioru;
        
        return $this;
    }
    /**
     * Get oczekiwanaGodzinaOdbioru value
     * @return string|null
     */
    public function getOczekiwanaGodzinaOdbioru(): ?string
    {
        return $this->oczekiwanaGodzinaOdbioru;
    }
    /**
     * Set oczekiwanaGodzinaOdbioru value
     * @param string $oczekiwanaGodzinaOdbioru
     * @return \app\modules\postal\sender\StructType\ZamowKuriera
     */
    public function setOczekiwanaGodzinaOdbioru(?string $oczekiwanaGodzinaOdbioru = null): self
    {
        // validation for constraint: string
        if (!is_null($oczekiwanaGodzinaOdbioru) && !is_string($oczekiwanaGodzinaOdbioru)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oczekiwanaGodzinaOdbioru, true), gettype($oczekiwanaGodzinaOdbioru)), __LINE__);
        }
        $this->oczekiwanaGodzinaOdbioru = $oczekiwanaGodzinaOdbioru;
        
        return $this;
    }
    /**
     * Get szacowanaIloscPrzeslek value
     * @return string|null
     */
    public function getSzacowanaIloscPrzeslek(): ?string
    {
        return $this->szacowanaIloscPrzeslek;
    }
    /**
     * Set szacowanaIloscPrzeslek value
     * @param string $szacowanaIloscPrzeslek
     * @return \app\modules\postal\sender\StructType\ZamowKuriera
     */
    public function setSzacowanaIloscPrzeslek(?string $szacowanaIloscPrzeslek = null): self
    {
        // validation for constraint: string
        if (!is_null($szacowanaIloscPrzeslek) && !is_string($szacowanaIloscPrzeslek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($szacowanaIloscPrzeslek, true), gettype($szacowanaIloscPrzeslek)), __LINE__);
        }
        $this->szacowanaIloscPrzeslek = $szacowanaIloscPrzeslek;
        
        return $this;
    }
    /**
     * Get szacowanaLacznaMasaPrzesylek value
     * @return string|null
     */
    public function getSzacowanaLacznaMasaPrzesylek(): ?string
    {
        return $this->szacowanaLacznaMasaPrzesylek;
    }
    /**
     * Set szacowanaLacznaMasaPrzesylek value
     * @param string $szacowanaLacznaMasaPrzesylek
     * @return \app\modules\postal\sender\StructType\ZamowKuriera
     */
    public function setSzacowanaLacznaMasaPrzesylek(?string $szacowanaLacznaMasaPrzesylek = null): self
    {
        // validation for constraint: string
        if (!is_null($szacowanaLacznaMasaPrzesylek) && !is_string($szacowanaLacznaMasaPrzesylek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($szacowanaLacznaMasaPrzesylek, true), gettype($szacowanaLacznaMasaPrzesylek)), __LINE__);
        }
        $this->szacowanaLacznaMasaPrzesylek = $szacowanaLacznaMasaPrzesylek;
        
        return $this;
    }
    /**
     * Get potwierdzenieZamowieniaEmail value
     * @return string|null
     */
    public function getPotwierdzenieZamowieniaEmail(): ?string
    {
        return $this->potwierdzenieZamowieniaEmail;
    }
    /**
     * Set potwierdzenieZamowieniaEmail value
     * @param string $potwierdzenieZamowieniaEmail
     * @return \app\modules\postal\sender\StructType\ZamowKuriera
     */
    public function setPotwierdzenieZamowieniaEmail(?string $potwierdzenieZamowieniaEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($potwierdzenieZamowieniaEmail) && !is_string($potwierdzenieZamowieniaEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($potwierdzenieZamowieniaEmail, true), gettype($potwierdzenieZamowieniaEmail)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($potwierdzenieZamowieniaEmail) && mb_strlen((string) $potwierdzenieZamowieniaEmail) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $potwierdzenieZamowieniaEmail)), __LINE__);
        }
        // validation for constraint: minLength(6)
        if (!is_null($potwierdzenieZamowieniaEmail) && mb_strlen((string) $potwierdzenieZamowieniaEmail) < 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 6', mb_strlen((string) $potwierdzenieZamowieniaEmail)), __LINE__);
        }
        $this->potwierdzenieZamowieniaEmail = $potwierdzenieZamowieniaEmail;
        
        return $this;
    }
}
