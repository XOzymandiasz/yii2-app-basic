<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetProfilListResponse implements ResultInterface
{
    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ProfilType>
     */
    private array $profil;

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ProfilType>
     */
    public function getProfil() : array
    {
        return $this->profil;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ProfilType> $profil
     * @return static
     */
    public function withProfil(array $profil) : static
    {
        $new = clone $this;
        $new->profil = $profil;

        return $new;
    }
}

