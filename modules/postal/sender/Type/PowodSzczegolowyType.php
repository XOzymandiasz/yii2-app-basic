<?php

namespace app\modules\postal\sender\Type;

class PowodSzczegolowyType
{
    /**
     * @var null | int
     */
    private ?int $idPowodSzczegolowy = null;

    /**
     * @var null | string
     */
    private ?string $powodSzczegolowyOpis = null;

    /**
     * @return null | int
     */
    public function getIdPowodSzczegolowy() : ?int
    {
        return $this->idPowodSzczegolowy;
    }

    /**
     * @param null | int $idPowodSzczegolowy
     * @return static
     */
    public function withIdPowodSzczegolowy(?int $idPowodSzczegolowy) : static
    {
        $new = clone $this;
        $new->idPowodSzczegolowy = $idPowodSzczegolowy;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPowodSzczegolowyOpis() : ?string
    {
        return $this->powodSzczegolowyOpis;
    }

    /**
     * @param null | string $powodSzczegolowyOpis
     * @return static
     */
    public function withPowodSzczegolowyOpis(?string $powodSzczegolowyOpis) : static
    {
        $new = clone $this;
        $new->powodSzczegolowyOpis = $powodSzczegolowyOpis;

        return $new;
    }
}

