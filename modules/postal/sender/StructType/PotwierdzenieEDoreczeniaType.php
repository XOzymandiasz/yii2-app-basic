<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for potwierdzenieEDoreczeniaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PotwierdzenieEDoreczeniaType extends AbstractStructBase
{
    /**
     * The sposob
     * @var string|null
     */
    protected ?string $sposob = null;
    /**
     * The kontakt
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 0
     * @var string|null
     */
    protected ?string $kontakt = null;
    /**
     * Constructor method for potwierdzenieEDoreczeniaType
     * @uses PotwierdzenieEDoreczeniaType::setSposob()
     * @uses PotwierdzenieEDoreczeniaType::setKontakt()
     * @param string $sposob
     * @param string $kontakt
     */
    public function __construct(?string $sposob = null, ?string $kontakt = null)
    {
        $this
            ->setSposob($sposob)
            ->setKontakt($kontakt);
    }
    /**
     * Get sposob value
     * @return string|null
     */
    public function getSposob(): ?string
    {
        return $this->sposob;
    }
    /**
     * Set sposob value
     * @uses \app\modules\postal\sender\EnumType\ESposobPowiadomieniaType::valueIsValid()
     * @uses \app\modules\postal\sender\EnumType\ESposobPowiadomieniaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sposob
     * @return \app\modules\postal\sender\StructType\PotwierdzenieEDoreczeniaType
     */
    public function setSposob(?string $sposob = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\sender\EnumType\ESposobPowiadomieniaType::valueIsValid($sposob)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\ESposobPowiadomieniaType', is_array($sposob) ? implode(', ', $sposob) : var_export($sposob, true), implode(', ', \app\modules\postal\sender\EnumType\ESposobPowiadomieniaType::getValidValues())), __LINE__);
        }
        $this->sposob = $sposob;
        
        return $this;
    }
    /**
     * Get kontakt value
     * @return string|null
     */
    public function getKontakt(): ?string
    {
        return $this->kontakt;
    }
    /**
     * Set kontakt value
     * @param string $kontakt
     * @return \app\modules\postal\sender\StructType\PotwierdzenieEDoreczeniaType
     */
    public function setKontakt(?string $kontakt = null): self
    {
        // validation for constraint: string
        if (!is_null($kontakt) && !is_string($kontakt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kontakt, true), gettype($kontakt)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($kontakt) && mb_strlen((string) $kontakt) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $kontakt)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($kontakt) && mb_strlen((string) $kontakt) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $kontakt)), __LINE__);
        }
        $this->kontakt = $kontakt;
        
        return $this;
    }
}
