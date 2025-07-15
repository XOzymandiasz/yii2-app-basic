<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendEnvelope implements RequestInterface
{
    /**
     * @var null | int
     */
    private ?int $urzadNadania = null;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\PakietType>
     */
    private array $pakiet;

    /**
     * @var null | int
     */
    private ?int $idBufor = null;

    /**
     * @var null | \app\modules\postal\sender\Type\ProfilType
     */
    private ?\app\modules\postal\sender\Type\ProfilType $profil = null;

    /**
     * Constructor
     *
     * @param null | int $urzadNadania
     * @param array<int<0,max>, \app\modules\postal\sender\Type\PakietType> $pakiet
     * @param null | int $idBufor
     * @param null | \app\modules\postal\sender\Type\ProfilType $profil
     */
    public function __construct(?int $urzadNadania, array $pakiet, ?int $idBufor, ?\app\modules\postal\sender\Type\ProfilType $profil)
    {
        $this->urzadNadania = $urzadNadania;
        $this->pakiet = $pakiet;
        $this->idBufor = $idBufor;
        $this->profil = $profil;
    }

    /**
     * @return null | int
     */
    public function getUrzadNadania() : ?int
    {
        return $this->urzadNadania;
    }

    /**
     * @param null | int $urzadNadania
     * @return static
     */
    public function withUrzadNadania(?int $urzadNadania) : static
    {
        $new = clone $this;
        $new->urzadNadania = $urzadNadania;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\PakietType>
     */
    public function getPakiet() : array
    {
        return $this->pakiet;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\PakietType> $pakiet
     * @return static
     */
    public function withPakiet(array $pakiet) : static
    {
        $new = clone $this;
        $new->pakiet = $pakiet;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdBufor() : ?int
    {
        return $this->idBufor;
    }

    /**
     * @param null | int $idBufor
     * @return static
     */
    public function withIdBufor(?int $idBufor) : static
    {
        $new = clone $this;
        $new->idBufor = $idBufor;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\ProfilType
     */
    public function getProfil() : ?\app\modules\postal\sender\Type\ProfilType
    {
        return $this->profil;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ProfilType $profil
     * @return static
     */
    public function withProfil(?\app\modules\postal\sender\Type\ProfilType $profil) : static
    {
        $new = clone $this;
        $new->profil = $profil;

        return $new;
    }
}

