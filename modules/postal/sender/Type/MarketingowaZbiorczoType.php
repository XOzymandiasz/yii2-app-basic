<?php

namespace app\modules\postal\sender\Type;

class MarketingowaZbiorczoType extends PrzesylkaNieRejestrowanaType
{
    /**
     * masa przesyłki podana w gramach
     *
     * @var int
     */
    private int $masa;

    /**
     * @var null | \app\modules\postal\sender\Type\GabarytType
     */
    private ?\app\modules\postal\sender\Type\GabarytType $gabaryt = null;

    /**
     * @return int
     */
    public function getMasa() : int
    {
        return $this->masa;
    }

    /**
     * @param int $masa
     * @return static
     */
    public function withMasa(int $masa) : static
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

