<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateProfil implements RequestInterface
{
    /**
     * @var \app\modules\postal\sender\Type\ProfilType
     */
    private \app\modules\postal\sender\Type\ProfilType $profil;

    /**
     * Constructor
     *
     * @param \app\modules\postal\sender\Type\ProfilType $profil
     */
    public function __construct(\app\modules\postal\sender\Type\ProfilType $profil)
    {
        $this->profil = $profil;
    }

    /**
     * @return \app\modules\postal\sender\Type\ProfilType
     */
    public function getProfil() : \app\modules\postal\sender\Type\ProfilType
    {
        return $this->profil;
    }

    /**
     * @param \app\modules\postal\sender\Type\ProfilType $profil
     * @return static
     */
    public function withProfil(\app\modules\postal\sender\Type\ProfilType $profil) : static
    {
        $new = clone $this;
        $new->profil = $profil;

        return $new;
    }
}

