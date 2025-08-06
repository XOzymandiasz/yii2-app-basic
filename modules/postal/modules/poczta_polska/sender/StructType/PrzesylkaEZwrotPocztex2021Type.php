<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;

/**
 * This class stands for przesylkaEZwrotPocztex2021Type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaEZwrotPocztex2021Type extends PrzesylkaRejestrowanaType
{
    /**
     * The numerNadaniaZwrot
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * @var string|null
     */
    protected ?string $numerNadaniaZwrot = null;
    /**
     * The idSklepEZwrot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idSklepEZwrot = null;
    /**
     * The format
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * Constructor method for przesylkaEZwrotPocztex2021Type
     * @uses PrzesylkaEZwrotPocztex2021Type::setNumerNadaniaZwrot()
     * @uses PrzesylkaEZwrotPocztex2021Type::setIdSklepEZwrot()
     * @uses PrzesylkaEZwrotPocztex2021Type::setFormat()
     * @param string $numerNadaniaZwrot
     * @param int $idSklepEZwrot
     * @param string $format
     */
    public function __construct(?string $numerNadaniaZwrot = null, ?int $idSklepEZwrot = null, ?string $format = null)
    {
        $this
            ->setNumerNadaniaZwrot($numerNadaniaZwrot)
            ->setIdSklepEZwrot($idSklepEZwrot)
            ->setFormat($format);
    }
    /**
     * Get numerNadaniaZwrot value
     * @return string|null
     */
    public function getNumerNadaniaZwrot(): ?string
    {
        return $this->numerNadaniaZwrot;
    }
    /**
     * Set numerNadaniaZwrot value
     * @param string $numerNadaniaZwrot
     * @return \app\modules\postal\sender\StructType\PrzesylkaEZwrotPocztex2021Type
     */
    public function setNumerNadaniaZwrot(?string $numerNadaniaZwrot = null): self
    {
        // validation for constraint: string
        if (!is_null($numerNadaniaZwrot) && !is_string($numerNadaniaZwrot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadaniaZwrot, true), gettype($numerNadaniaZwrot)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadaniaZwrot) && mb_strlen((string) $numerNadaniaZwrot) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $numerNadaniaZwrot)), __LINE__);
        }
        // validation for constraint: minLength(10)
        if (!is_null($numerNadaniaZwrot) && mb_strlen((string) $numerNadaniaZwrot) < 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 10', mb_strlen((string) $numerNadaniaZwrot)), __LINE__);
        }
        $this->numerNadaniaZwrot = $numerNadaniaZwrot;
        
        return $this;
    }
    /**
     * Get idSklepEZwrot value
     * @return int|null
     */
    public function getIdSklepEZwrot(): ?int
    {
        return $this->idSklepEZwrot;
    }
    /**
     * Set idSklepEZwrot value
     * @param int $idSklepEZwrot
     * @return \app\modules\postal\sender\StructType\PrzesylkaEZwrotPocztex2021Type
     */
    public function setIdSklepEZwrot(?int $idSklepEZwrot = null): self
    {
        // validation for constraint: int
        if (!is_null($idSklepEZwrot) && !(is_int($idSklepEZwrot) || ctype_digit($idSklepEZwrot))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idSklepEZwrot, true), gettype($idSklepEZwrot)), __LINE__);
        }
        $this->idSklepEZwrot = $idSklepEZwrot;
        
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
     * @return \app\modules\postal\sender\StructType\PrzesylkaEZwrotPocztex2021Type
     * @throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\FormatPocztex2021Type::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\FormatPocztex2021Type::valueIsValid()
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\FormatPocztex2021Type::valueIsValid($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\FormatPocztex2021Type', is_array($format) ? implode(', ', $format) : var_export($format, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\FormatPocztex2021Type::getValidValues())), __LINE__);
        }
        $this->format = $format;
        
        return $this;
    }
}
