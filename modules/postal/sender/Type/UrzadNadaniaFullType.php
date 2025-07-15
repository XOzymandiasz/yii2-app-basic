<?php

namespace app\modules\postal\sender\Type;

class UrzadNadaniaFullType
{
    /**
     * @var null | int
     */
    private ?int $urzadNadania = null;

    /**
     * @var null | string
     */
    private ?string $opis = null;

    /**
     * @var null | string
     */
    private ?string $nazwaWydruk = null;

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
     * @return null | string
     */
    public function getOpis() : ?string
    {
        return $this->opis;
    }

    /**
     * @param null | string $opis
     * @return static
     */
    public function withOpis(?string $opis) : static
    {
        $new = clone $this;
        $new->opis = $opis;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNazwaWydruk() : ?string
    {
        return $this->nazwaWydruk;
    }

    /**
     * @param null | string $nazwaWydruk
     * @return static
     */
    public function withNazwaWydruk(?string $nazwaWydruk) : static
    {
        $new = clone $this;
        $new->nazwaWydruk = $nazwaWydruk;

        return $new;
    }
}

