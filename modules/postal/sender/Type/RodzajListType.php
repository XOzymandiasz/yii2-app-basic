<?php

namespace app\modules\postal\sender\Type;

class RodzajListType
{
    /**
     * @var null | bool
     */
    private ?bool $polecony = null;

    /**
     * @var null | \app\modules\postal\sender\Type\KategoriaType
     */
    private ?\app\modules\postal\sender\Type\KategoriaType $kategoria = null;

    /**
     * @return null | bool
     */
    public function getPolecony() : ?bool
    {
        return $this->polecony;
    }

    /**
     * @param null | bool $polecony
     * @return static
     */
    public function withPolecony(?bool $polecony) : static
    {
        $new = clone $this;
        $new->polecony = $polecony;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\KategoriaType
     */
    public function getKategoria() : ?\app\modules\postal\sender\Type\KategoriaType
    {
        return $this->kategoria;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\KategoriaType $kategoria
     * @return static
     */
    public function withKategoria(?\app\modules\postal\sender\Type\KategoriaType $kategoria) : static
    {
        $new = clone $this;
        $new->kategoria = $kategoria;

        return $new;
    }
}

