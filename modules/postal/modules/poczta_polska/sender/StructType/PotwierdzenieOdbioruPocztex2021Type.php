<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for potwierdzenieOdbioruPocztex2021Type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PotwierdzenieOdbioruPocztex2021Type extends AbstractStructBase
{
    /**
     * The ilosc
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $ilosc = null;
    /**
     * The sposobPotwierdzeniaOdbioru
     * @var string|null
     */
    protected ?string $sposobPotwierdzeniaOdbioru = null;
    /**
     * Constructor method for potwierdzenieOdbioruPocztex2021Type
     * @uses PotwierdzenieOdbioruPocztex2021Type::setIlosc()
     * @uses PotwierdzenieOdbioruPocztex2021Type::setSposobPotwierdzeniaOdbioru()
     * @param int $ilosc
     * @param string $sposobPotwierdzeniaOdbioru
     */
    public function __construct(?int $ilosc = null, ?string $sposobPotwierdzeniaOdbioru = null)
    {
        $this
            ->setIlosc($ilosc)
            ->setSposobPotwierdzeniaOdbioru($sposobPotwierdzeniaOdbioru);
    }
    /**
     * Get ilosc value
     * @return int|null
     */
    public function getIlosc(): ?int
    {
        return $this->ilosc;
    }
    /**
     * Set ilosc value
     * @param int $ilosc
     * @return \app\modules\postal\sender\StructType\PotwierdzenieOdbioruPocztex2021Type
     */
    public function setIlosc(?int $ilosc = null): self
    {
        // validation for constraint: int
        if (!is_null($ilosc) && !(is_int($ilosc) || ctype_digit($ilosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ilosc, true), gettype($ilosc)), __LINE__);
        }
        // validation for constraint: maxInclusive(9)
        if (!is_null($ilosc) && $ilosc > 9) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9', var_export($ilosc, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($ilosc) && $ilosc < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($ilosc, true)), __LINE__);
        }
        $this->ilosc = $ilosc;
        
        return $this;
    }
    /**
     * Get sposobPotwierdzeniaOdbioru value
     * @return string|null
     */
    public function getSposobPotwierdzeniaOdbioru(): ?string
    {
        return $this->sposobPotwierdzeniaOdbioru;
    }
    /**
     * Set sposobPotwierdzeniaOdbioru value
     * @param string $sposobPotwierdzeniaOdbioru
     * @return \app\modules\postal\sender\StructType\PotwierdzenieOdbioruPocztex2021Type
     * @throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum::valueIsValid()
     */
    public function setSposobPotwierdzeniaOdbioru(?string $sposobPotwierdzeniaOdbioru = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum::valueIsValid($sposobPotwierdzeniaOdbioru)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum', is_array($sposobPotwierdzeniaOdbioru) ? implode(', ', $sposobPotwierdzeniaOdbioru) : var_export($sposobPotwierdzeniaOdbioru, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\SposobPrzekazaniaPotwierdzeniaOdbioruPocztex2021Enum::getValidValues())), __LINE__);
        }
        $this->sposobPotwierdzeniaOdbioru = $sposobPotwierdzeniaOdbioru;
        
        return $this;
    }
}
