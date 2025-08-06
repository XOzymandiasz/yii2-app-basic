<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;

/**
 * This class stands for EPOExtendedType StructType
 * Meta information extracted from the WSDL
 * - documentation: atrybut zasadySpecjalne zostanie usunięty z EPOExtendedType do końca 2016 roku
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EPOExtendedType extends EPOType
{
    /**
     * The zasadySpecjalne
     * @var string|null
     */
    protected ?string $zasadySpecjalne = null;
    /**
     * Constructor method for EPOExtendedType
     * @uses EPOExtendedType::setZasadySpecjalne()
     * @param string $zasadySpecjalne
     */
    public function __construct(?string $zasadySpecjalne = null)
    {
        $this
            ->setZasadySpecjalne($zasadySpecjalne);
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
     * @return \app\modules\postal\sender\StructType\EPOExtendedType
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
}
