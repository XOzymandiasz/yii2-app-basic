<?php

namespace app\modules\postal\sender\Type;

class MarketingowaZAdresemType extends PrzesylkaType
{
    /**
     * @var \app\modules\postal\sender\Type\AdresType
     */
    private \app\modules\postal\sender\Type\AdresType $adres;

    /**
     * masa przesyłki podana w gramach
     *
     * @var null | int
     */
    private ?int $masa = null;

    /**
     * @var null | \app\modules\postal\sender\Type\GabarytType
     */
    private ?\app\modules\postal\sender\Type\GabarytType $gabaryt = null;

    /**
     * @return \app\modules\postal\sender\Type\AdresType
     */
    public function getAdres() : \app\modules\postal\sender\Type\AdresType
    {
        return $this->adres;
    }

    /**
     * @param \app\modules\postal\sender\Type\AdresType $adres
     * @return static
     */
    public function withAdres(\app\modules\postal\sender\Type\AdresType $adres) : static
    {
        $new = clone $this;
        $new->adres = $adres;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getMasa() : ?int
    {
        return $this->masa;
    }

    /**
     * @param null | int $masa
     * @return static
     */
    public function withMasa(?int $masa) : static
    {
        $new = clone $this;
        $new->masa = $masa;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\GabarytType
     */
    public function getGabaryt() : ?\app\modules\postal\sender\Type\GabarytType
    {
        return $this->gabaryt;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\GabarytType $gabaryt
     * @return static
     */
    public function withGabaryt(?\app\modules\postal\sender\Type\GabarytType $gabaryt) : static
    {
        $new = clone $this;
        $new->gabaryt = $gabaryt;

        return $new;
    }
}

