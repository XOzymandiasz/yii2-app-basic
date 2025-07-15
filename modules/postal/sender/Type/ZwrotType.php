<?php

namespace app\modules\postal\sender\Type;

class ZwrotType
{
    /**
     * @var null | int
     */
    private ?int $zwrotPoLiczbieDni = null;

    /**
     * @var null | bool
     */
    private ?bool $traktowacJakPorzucona = null;

    /**
     * @var null | \app\modules\postal\sender\Type\SposobZwrotuType
     */
    private ?\app\modules\postal\sender\Type\SposobZwrotuType $sposobZwrotu = null;

    /**
     * @return null | int
     */
    public function getZwrotPoLiczbieDni() : ?int
    {
        return $this->zwrotPoLiczbieDni;
    }

    /**
     * @param null | int $zwrotPoLiczbieDni
     * @return static
     */
    public function withZwrotPoLiczbieDni(?int $zwrotPoLiczbieDni) : static
    {
        $new = clone $this;
        $new->zwrotPoLiczbieDni = $zwrotPoLiczbieDni;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getTraktowacJakPorzucona() : ?bool
    {
        return $this->traktowacJakPorzucona;
    }

    /**
     * @param null | bool $traktowacJakPorzucona
     * @return static
     */
    public function withTraktowacJakPorzucona(?bool $traktowacJakPorzucona) : static
    {
        $new = clone $this;
        $new->traktowacJakPorzucona = $traktowacJakPorzucona;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\SposobZwrotuType
     */
    public function getSposobZwrotu() : ?\app\modules\postal\sender\Type\SposobZwrotuType
    {
        return $this->sposobZwrotu;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\SposobZwrotuType $sposobZwrotu
     * @return static
     */
    public function withSposobZwrotu(?\app\modules\postal\sender\Type\SposobZwrotuType $sposobZwrotu) : static
    {
        $new = clone $this;
        $new->sposobZwrotu = $sposobZwrotu;

        return $new;
    }
}

