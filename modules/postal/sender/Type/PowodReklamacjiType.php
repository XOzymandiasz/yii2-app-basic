<?php

namespace app\modules\postal\sender\Type;

class PowodReklamacjiType
{
    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\PowodSzczegolowyType>
     */
    private array $powodSzczegolowy;

    /**
     * @var null | int
     */
    private ?int $idPowodGlowny = null;

    /**
     * @var null | string
     */
    private ?string $powodGlownyOpis = null;

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\PowodSzczegolowyType>
     */
    public function getPowodSzczegolowy() : array
    {
        return $this->powodSzczegolowy;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\PowodSzczegolowyType> $powodSzczegolowy
     * @return static
     */
    public function withPowodSzczegolowy(array $powodSzczegolowy) : static
    {
        $new = clone $this;
        $new->powodSzczegolowy = $powodSzczegolowy;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdPowodGlowny() : ?int
    {
        return $this->idPowodGlowny;
    }

    /**
     * @param null | int $idPowodGlowny
     * @return static
     */
    public function withIdPowodGlowny(?int $idPowodGlowny) : static
    {
        $new = clone $this;
        $new->idPowodGlowny = $idPowodGlowny;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPowodGlownyOpis() : ?string
    {
        return $this->powodGlownyOpis;
    }

    /**
     * @param null | string $powodGlownyOpis
     * @return static
     */
    public function withPowodGlownyOpis(?string $powodGlownyOpis) : static
    {
        $new = clone $this;
        $new->powodGlownyOpis = $powodGlownyOpis;

        return $new;
    }
}

