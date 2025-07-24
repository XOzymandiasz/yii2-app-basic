<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaRejestrowanaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class PrzesylkaRejestrowanaType extends PrzesylkaType
{
    /**
     * The adres
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\AdresType|null
     */
    protected ?\app\modules\postal\sender\StructType\AdresType $adres = null;
    /**
     * The nadawca
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\AdresType|null
     */
    protected ?\app\modules\postal\sender\StructType\AdresType $nadawca = null;
    /**
     * The relatedToAllegro
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\RelatedToAllegroType|null
     */
    protected ?\app\modules\postal\sender\StructType\RelatedToAllegroType $relatedToAllegro = null;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * @var string|null
     */
    protected ?string $numerNadania = null;
    /**
     * The sygnatura
     * Meta information extracted from the WSDL
     * - documentation: sygnatura np. sprawy/pisma nadanego przesyłką
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $sygnatura = null;
    /**
     * The terminSprawy
     * Meta information extracted from the WSDL
     * - documentation: termin np. rozprawy sądowej lub termin graniczny pisma nadanego przesyłką
     * - base: xsd:string
     * @var string|null
     */
    protected ?string $terminSprawy = null;
    /**
     * The rodzaj
     * Meta information extracted from the WSDL
     * - documentation: rodzaj przesyłki klienta np. postepowanie karne, cywilne, reklamacja, odwołanie, wezwanie do zapłaty itp.
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $rodzaj = null;
    /**
     * The weryfikacjaPlatnosci
     * @var bool|null
     */
    protected ?bool $weryfikacjaPlatnosci = null;
    /**
     * Constructor method for przesylkaRejestrowanaType
     * @uses PrzesylkaRejestrowanaType::setAdres()
     * @uses PrzesylkaRejestrowanaType::setNadawca()
     * @uses PrzesylkaRejestrowanaType::setRelatedToAllegro()
     * @uses PrzesylkaRejestrowanaType::setNumerNadania()
     * @uses PrzesylkaRejestrowanaType::setSygnatura()
     * @uses PrzesylkaRejestrowanaType::setTerminSprawy()
     * @uses PrzesylkaRejestrowanaType::setRodzaj()
     * @uses PrzesylkaRejestrowanaType::setWeryfikacjaPlatnosci()
     * @param \app\modules\postal\sender\StructType\AdresType $adres
     * @param \app\modules\postal\sender\StructType\AdresType $nadawca
     * @param \app\modules\postal\sender\StructType\RelatedToAllegroType $relatedToAllegro
     * @param string $numerNadania
     * @param string $sygnatura
     * @param string $terminSprawy
     * @param string $rodzaj
     * @param bool $weryfikacjaPlatnosci
     */
    public function __construct(?\app\modules\postal\sender\StructType\AdresType $adres = null, ?\app\modules\postal\sender\StructType\AdresType $nadawca = null, ?\app\modules\postal\sender\StructType\RelatedToAllegroType $relatedToAllegro = null, ?string $numerNadania = null, ?string $sygnatura = null, ?string $terminSprawy = null, ?string $rodzaj = null, ?bool $weryfikacjaPlatnosci = null)
    {
        $this
            ->setAdres($adres)
            ->setNadawca($nadawca)
            ->setRelatedToAllegro($relatedToAllegro)
            ->setNumerNadania($numerNadania)
            ->setSygnatura($sygnatura)
            ->setTerminSprawy($terminSprawy)
            ->setRodzaj($rodzaj)
            ->setWeryfikacjaPlatnosci($weryfikacjaPlatnosci);
    }
    /**
     * Get adres value
     * @return \app\modules\postal\sender\StructType\AdresType|null
     */
    public function getAdres(): ?\app\modules\postal\sender\StructType\AdresType
    {
        return $this->adres;
    }
    /**
     * Set adres value
     * @param \app\modules\postal\sender\StructType\AdresType $adres
     * @return \app\modules\postal\sender\StructType\PrzesylkaRejestrowanaType
     */
    public function setAdres(?\app\modules\postal\sender\StructType\AdresType $adres = null): self
    {
        $this->adres = $adres;
        
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaRejestrowanaType
     */
    public function setNadawca(?\app\modules\postal\sender\StructType\AdresType $nadawca = null): self
    {
        $this->nadawca = $nadawca;
        
        return $this;
    }
    /**
     * Get relatedToAllegro value
     * @return \app\modules\postal\sender\StructType\RelatedToAllegroType|null
     */
    public function getRelatedToAllegro(): ?\app\modules\postal\sender\StructType\RelatedToAllegroType
    {
        return $this->relatedToAllegro;
    }
    /**
     * Set relatedToAllegro value
     * @param \app\modules\postal\sender\StructType\RelatedToAllegroType $relatedToAllegro
     * @return \app\modules\postal\sender\StructType\PrzesylkaRejestrowanaType
     */
    public function setRelatedToAllegro(?\app\modules\postal\sender\StructType\RelatedToAllegroType $relatedToAllegro = null): self
    {
        $this->relatedToAllegro = $relatedToAllegro;
        
        return $this;
    }
    /**
     * Get numerNadania value
     * @return string|null
     */
    public function getNumerNadania(): ?string
    {
        return $this->numerNadania;
    }
    /**
     * Set numerNadania value
     * @param string $numerNadania
     * @return \app\modules\postal\sender\StructType\PrzesylkaRejestrowanaType
     */
    public function setNumerNadania(?string $numerNadania = null): self
    {
        // validation for constraint: string
        if (!is_null($numerNadania) && !is_string($numerNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadania, true), gettype($numerNadania)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $numerNadania)), __LINE__);
        }
        // validation for constraint: minLength(10)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) < 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 10', mb_strlen((string) $numerNadania)), __LINE__);
        }
        $this->numerNadania = $numerNadania;
        
        return $this;
    }
    /**
     * Get sygnatura value
     * @return string|null
     */
    public function getSygnatura(): ?string
    {
        return $this->sygnatura;
    }
    /**
     * Set sygnatura value
     * @param string $sygnatura
     * @return \app\modules\postal\sender\StructType\PrzesylkaRejestrowanaType
     */
    public function setSygnatura(?string $sygnatura = null): self
    {
        // validation for constraint: string
        if (!is_null($sygnatura) && !is_string($sygnatura)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sygnatura, true), gettype($sygnatura)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($sygnatura) && mb_strlen((string) $sygnatura) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $sygnatura)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($sygnatura) && mb_strlen((string) $sygnatura) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $sygnatura)), __LINE__);
        }
        $this->sygnatura = $sygnatura;
        
        return $this;
    }
    /**
     * Get terminSprawy value
     * @return string|null
     */
    public function getTerminSprawy(): ?string
    {
        return $this->terminSprawy;
    }
    /**
     * Set terminSprawy value
     * @param string $terminSprawy
     * @return \app\modules\postal\sender\StructType\PrzesylkaRejestrowanaType
     */
    public function setTerminSprawy(?string $terminSprawy = null): self
    {
        // validation for constraint: string
        if (!is_null($terminSprawy) && !is_string($terminSprawy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($terminSprawy, true), gettype($terminSprawy)), __LINE__);
        }
        $this->terminSprawy = $terminSprawy;
        
        return $this;
    }
    /**
     * Get rodzaj value
     * @return string|null
     */
    public function getRodzaj(): ?string
    {
        return $this->rodzaj;
    }
    /**
     * Set rodzaj value
     * @param string $rodzaj
     * @return \app\modules\postal\sender\StructType\PrzesylkaRejestrowanaType
     */
    public function setRodzaj(?string $rodzaj = null): self
    {
        // validation for constraint: string
        if (!is_null($rodzaj) && !is_string($rodzaj)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rodzaj, true), gettype($rodzaj)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($rodzaj) && mb_strlen((string) $rodzaj) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $rodzaj)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($rodzaj) && mb_strlen((string) $rodzaj) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $rodzaj)), __LINE__);
        }
        $this->rodzaj = $rodzaj;
        
        return $this;
    }
    /**
     * Get weryfikacjaPlatnosci value
     * @return bool|null
     */
    public function getWeryfikacjaPlatnosci(): ?bool
    {
        return $this->weryfikacjaPlatnosci;
    }
    /**
     * Set weryfikacjaPlatnosci value
     * @param bool $weryfikacjaPlatnosci
     * @return \app\modules\postal\sender\StructType\PrzesylkaRejestrowanaType
     */
    public function setWeryfikacjaPlatnosci(?bool $weryfikacjaPlatnosci = null): self
    {
        // validation for constraint: boolean
        if (!is_null($weryfikacjaPlatnosci) && !is_bool($weryfikacjaPlatnosci)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($weryfikacjaPlatnosci, true), gettype($weryfikacjaPlatnosci)), __LINE__);
        }
        $this->weryfikacjaPlatnosci = $weryfikacjaPlatnosci;
        
        return $this;
    }
}
