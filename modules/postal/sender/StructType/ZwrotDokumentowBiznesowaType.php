<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zwrotDokumentowBiznesowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZwrotDokumentowBiznesowaType extends AbstractStructBase
{
    /**
     * The rodzaj
     * @var string|null
     */
    protected ?string $rodzaj = null;
    /**
     * The idDokumentyZwrotneAdresy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idDokumentyZwrotneAdresy = null;
    /**
     * Constructor method for zwrotDokumentowBiznesowaType
     * @uses ZwrotDokumentowBiznesowaType::setRodzaj()
     * @uses ZwrotDokumentowBiznesowaType::setIdDokumentyZwrotneAdresy()
     * @param string $rodzaj
     * @param int $idDokumentyZwrotneAdresy
     */
    public function __construct(?string $rodzaj = null, ?int $idDokumentyZwrotneAdresy = null)
    {
        $this
            ->setRodzaj($rodzaj)
            ->setIdDokumentyZwrotneAdresy($idDokumentyZwrotneAdresy);
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
     * @uses \app\modules\postal\sender\EnumType\TerminZwrotDokumentowBiznesowaType::valueIsValid()
     * @uses \app\modules\postal\sender\EnumType\TerminZwrotDokumentowBiznesowaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rodzaj
     * @return \app\modules\postal\sender\StructType\ZwrotDokumentowBiznesowaType
     */
    public function setRodzaj(?string $rodzaj = null): self
    {
        // validation for constraint: enumeration
        if (!\app\modules\postal\sender\EnumType\TerminZwrotDokumentowBiznesowaType::valueIsValid($rodzaj)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \app\modules\postal\sender\EnumType\TerminZwrotDokumentowBiznesowaType', is_array($rodzaj) ? implode(', ', $rodzaj) : var_export($rodzaj, true), implode(', ', \app\modules\postal\sender\EnumType\TerminZwrotDokumentowBiznesowaType::getValidValues())), __LINE__);
        }
        $this->rodzaj = $rodzaj;
        
        return $this;
    }
    /**
     * Get idDokumentyZwrotneAdresy value
     * @return int|null
     */
    public function getIdDokumentyZwrotneAdresy(): ?int
    {
        return $this->idDokumentyZwrotneAdresy;
    }
    /**
     * Set idDokumentyZwrotneAdresy value
     * @param int $idDokumentyZwrotneAdresy
     * @return \app\modules\postal\sender\StructType\ZwrotDokumentowBiznesowaType
     */
    public function setIdDokumentyZwrotneAdresy(?int $idDokumentyZwrotneAdresy = null): self
    {
        // validation for constraint: int
        if (!is_null($idDokumentyZwrotneAdresy) && !(is_int($idDokumentyZwrotneAdresy) || ctype_digit($idDokumentyZwrotneAdresy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idDokumentyZwrotneAdresy, true), gettype($idDokumentyZwrotneAdresy)), __LINE__);
        }
        $this->idDokumentyZwrotneAdresy = $idDokumentyZwrotneAdresy;
        
        return $this;
    }
}
