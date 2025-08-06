<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createProfil StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateProfil extends AbstractStructBase
{
    /**
     * The profil
     * @var \app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType|null
     */
    protected ?\app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType $profil = null;
    /**
     * Constructor method for createProfil
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType $profil
     * @uses CreateProfil::setProfil()
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
     * @return \app\modules\postal\sender\StructType\CreateProfil
     */
    public function setProfil(?\app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType $profil = null): self
    {
        $this->profil = $profil;
        
        return $this;
    }
}
