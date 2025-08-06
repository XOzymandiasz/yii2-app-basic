<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for oplacaOdbiorcaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OplacaOdbiorcaType extends AbstractStructBase
{
    /**
     * The typ
     * Meta information extracted from the WSDL
     * - documentation: Typ odbiorcy/adresata opłacającego przesyłkę. Dopuszczalne wartości: ADRESAT_INDYWIDUALNY, ADRESAT_UMOWNY, ODDZIAL.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $typ = null;
    /**
     * The karta
     * Meta information extracted from the WSDL
     * - documentation: Wymagalny dla typ=ADRESAT_UMOWNY i typ=ODDZIAL.
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\OplacaOdbiorcaKartaType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\OplacaOdbiorcaKartaType $karta = null;
    /**
     * Constructor method for oplacaOdbiorcaType
     * @param string $typ
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\OplacaOdbiorcaKartaType $karta
     *@uses  OplacaOdbiorcaType::setTyp()
     * @uses OplacaOdbiorcaType::setKarta()
     */
    public function __construct(?string $typ = null, ?\app\modules\postal\modules\poczta_polska\sender\StructType\OplacaOdbiorcaKartaType $karta = null)
    {
        $this
            ->setTyp($typ)
            ->setKarta($karta);
    }
    /**
     * Get typ value
     * @return string|null
     */
    public function getTyp(): ?string
    {
        return $this->typ;
    }
    /**
     * Set typ value
     * @param string $typ
     * @return \app\modules\postal\sender\StructType\OplacaOdbiorcaType
     *@throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\TypOplacaOdbiorcaEnum::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\TypOplacaOdbiorcaEnum::valueIsValid()
     */
    public function setTyp(?string $typ = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\TypOplacaOdbiorcaEnum::valueIsValid($typ)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\TypOplacaOdbiorcaEnum', is_array($typ) ? implode(', ', $typ) : var_export($typ, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\TypOplacaOdbiorcaEnum::getValidValues())), __LINE__);
        }
        $this->typ = $typ;
        
        return $this;
    }
    /**
     * Get karta value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\OplacaOdbiorcaKartaType|null
     */
    public function getKarta(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\OplacaOdbiorcaKartaType
    {
        return $this->karta;
    }
    /**
     * Set karta value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\OplacaOdbiorcaKartaType $karta
     * @return \app\modules\postal\sender\StructType\OplacaOdbiorcaType
     */
    public function setKarta(?\app\modules\postal\modules\poczta_polska\sender\StructType\OplacaOdbiorcaKartaType $karta = null): self
    {
        $this->karta = $karta;
        
        return $this;
    }
}
