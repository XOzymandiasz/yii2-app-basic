<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getJednostkaOrganizacyjna StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetJednostkaOrganizacyjna extends AbstractStructBase
{
    /**
     * The jednostka
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType $jednostka = null;
    /**
     * Constructor method for getJednostkaOrganizacyjna
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType $jednostka
     * @uses GetJednostkaOrganizacyjna::setJednostka()
     */
    public function __construct(?\app\modules\postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType $jednostka = null)
    {
        $this
            ->setJednostka($jednostka);
    }
    /**
     * Get jednostka value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType|null
     */
    public function getJednostka(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType
    {
        return $this->jednostka;
    }
    /**
     * Set jednostka value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType $jednostka
     * @return \app\modules\postal\sender\StructType\GetJednostkaOrganizacyjna
     */
    public function setJednostka(?\app\modules\postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType $jednostka = null): self
    {
        $this->jednostka = $jednostka;
        
        return $this;
    }
}
