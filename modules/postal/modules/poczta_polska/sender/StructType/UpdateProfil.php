<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateProfil StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateProfil extends AbstractStructBase
{
    /**
     * The profil
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType $profil = null;
    /**
     * Constructor method for updateProfil
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType $profil
     * @uses UpdateProfil::setProfil()
     */
    public function __construct(?\app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType $profil = null)
    {
        $this
            ->setProfil($profil);
    }
    /**
     * Get profil value
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType|null
     */
    public function getProfil(): ?\app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType
    {
        return $this->profil;
    }
    /**
     * Set profil value
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType $profil
     * @return \app\modules\postal\sender\StructType\UpdateProfil
     */
    public function setProfil(?\app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType $profil = null): self
    {
        $this->profil = $profil;
        
        return $this;
    }
}
