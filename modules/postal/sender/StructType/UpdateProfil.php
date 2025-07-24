<?php

declare(strict_types=1);

namespace app\modules\postal\sender\StructType;

use InvalidArgumentException;
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
     * @var \app\modules\postal\sender\StructType\ProfilType|null
     */
    protected ?\app\modules\postal\sender\StructType\ProfilType $profil = null;
    /**
     * Constructor method for updateProfil
     * @uses UpdateProfil::setProfil()
     * @param \app\modules\postal\sender\StructType\ProfilType $profil
     */
    public function __construct(?\app\modules\postal\sender\StructType\ProfilType $profil = null)
    {
        $this
            ->setProfil($profil);
    }
    /**
     * Get profil value
     * @return \app\modules\postal\sender\StructType\ProfilType|null
     */
    public function getProfil(): ?\app\modules\postal\sender\StructType\ProfilType
    {
        return $this->profil;
    }
    /**
     * Set profil value
     * @param \app\modules\postal\sender\StructType\ProfilType $profil
     * @return \app\modules\postal\sender\StructType\UpdateProfil
     */
    public function setProfil(?\app\modules\postal\sender\StructType\ProfilType $profil = null): self
    {
        $this->profil = $profil;
        
        return $this;
    }
}
