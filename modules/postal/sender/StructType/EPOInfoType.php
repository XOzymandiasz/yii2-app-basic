<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EPOInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EPOInfoType extends AbstractStructBase
{
    /**
     * The awizoPrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\AwizoPrzesylkiType|null
     */
    protected ?\app\modules\postal\sender\StructType\AwizoPrzesylkiType $awizoPrzesylki = null;
    /**
     * The doreczeniePrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\DoreczeniePrzesylkiType|null
     */
    protected ?\app\modules\postal\sender\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null;
    /**
     * The zwrotPrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\sender\StructType\ZwrotPrzesylkiType|null
     */
    protected ?\app\modules\postal\sender\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null;
    /**
     * Constructor method for EPOInfoType
     * @uses EPOInfoType::setAwizoPrzesylki()
     * @uses EPOInfoType::setDoreczeniePrzesylki()
     * @uses EPOInfoType::setZwrotPrzesylki()
     * @param \app\modules\postal\sender\StructType\AwizoPrzesylkiType $awizoPrzesylki
     * @param \app\modules\postal\sender\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki
     * @param \app\modules\postal\sender\StructType\ZwrotPrzesylkiType $zwrotPrzesylki
     */
    public function __construct(?\app\modules\postal\sender\StructType\AwizoPrzesylkiType $awizoPrzesylki = null, ?\app\modules\postal\sender\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null, ?\app\modules\postal\sender\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null)
    {
        $this
            ->setAwizoPrzesylki($awizoPrzesylki)
            ->setDoreczeniePrzesylki($doreczeniePrzesylki)
            ->setZwrotPrzesylki($zwrotPrzesylki);
    }
    /**
     * Get awizoPrzesylki value
     * @return \app\modules\postal\sender\StructType\AwizoPrzesylkiType|null
     */
    public function getAwizoPrzesylki(): ?\app\modules\postal\sender\StructType\AwizoPrzesylkiType
    {
        return $this->awizoPrzesylki;
    }
    /**
     * Set awizoPrzesylki value
     * @param \app\modules\postal\sender\StructType\AwizoPrzesylkiType $awizoPrzesylki
     * @return \app\modules\postal\sender\StructType\EPOInfoType
     */
    public function setAwizoPrzesylki(?\app\modules\postal\sender\StructType\AwizoPrzesylkiType $awizoPrzesylki = null): self
    {
        $this->awizoPrzesylki = $awizoPrzesylki;
        
        return $this;
    }
    /**
     * Get doreczeniePrzesylki value
     * @return \app\modules\postal\sender\StructType\DoreczeniePrzesylkiType|null
     */
    public function getDoreczeniePrzesylki(): ?\app\modules\postal\sender\StructType\DoreczeniePrzesylkiType
    {
        return $this->doreczeniePrzesylki;
    }
    /**
     * Set doreczeniePrzesylki value
     * @param \app\modules\postal\sender\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki
     * @return \app\modules\postal\sender\StructType\EPOInfoType
     */
    public function setDoreczeniePrzesylki(?\app\modules\postal\sender\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null): self
    {
        $this->doreczeniePrzesylki = $doreczeniePrzesylki;
        
        return $this;
    }
    /**
     * Get zwrotPrzesylki value
     * @return \app\modules\postal\sender\StructType\ZwrotPrzesylkiType|null
     */
    public function getZwrotPrzesylki(): ?\app\modules\postal\sender\StructType\ZwrotPrzesylkiType
    {
        return $this->zwrotPrzesylki;
    }
    /**
     * Set zwrotPrzesylki value
     * @param \app\modules\postal\sender\StructType\ZwrotPrzesylkiType $zwrotPrzesylki
     * @return \app\modules\postal\sender\StructType\EPOInfoType
     */
    public function setZwrotPrzesylki(?\app\modules\postal\sender\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null): self
    {
        $this->zwrotPrzesylki = $zwrotPrzesylki;
        
        return $this;
    }
}
