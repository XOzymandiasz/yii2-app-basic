<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPlacowkiPocztowe StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPlacowkiPocztowe extends AbstractStructBase
{
    /**
     * The idWojewodztwo
     * @var string|null
     */
    protected ?string $idWojewodztwo = null;
    /**
     * Constructor method for getPlacowkiPocztowe
     * @uses GetPlacowkiPocztowe::setIdWojewodztwo()
     * @param string $idWojewodztwo
     */
    public function __construct(?string $idWojewodztwo = null)
    {
        $this
            ->setIdWojewodztwo($idWojewodztwo);
    }
    /**
     * Get idWojewodztwo value
     * @return string|null
     */
    public function getIdWojewodztwo(): ?string
    {
        return $this->idWojewodztwo;
    }
    /**
     * Set idWojewodztwo value
     * @param string $idWojewodztwo
     * @return \app\modules\postal\sender\StructType\GetPlacowkiPocztowe
     * @throws InvalidArgumentException
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\IdWojewodztwoType::getValidValues()
     * @uses \app\modules\postal\modules\poczta_polska\sender\EnumType\IdWojewodztwoType::valueIsValid()
     */
    public function setIdWojewodztwo(?string $idWojewodztwo = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\modules\poczta_polska\sender\EnumType\IdWojewodztwoType::valueIsValid($idWojewodztwo)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\IdWojewodztwoType', is_array($idWojewodztwo) ? implode(', ', $idWojewodztwo) : var_export($idWojewodztwo, true), implode(', ', \app\modules\postal\modules\poczta_polska\sender\EnumType\IdWojewodztwoType::getValidValues())), __LINE__);
        }
        $this->idWojewodztwo = $idWojewodztwo;
        
        return $this;
    }
}
