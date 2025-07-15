<?php

namespace app\modules\postal\sender\Type;

class PrzesylkaFullType
{
    /**
     * @var \app\modules\postal\sender\Type\PrzesylkaShortType
     */
    private \app\modules\postal\sender\Type\PrzesylkaShortType $przesylkaShort;

    /**
     * @var \app\modules\postal\sender\Type\PrzesylkaType
     */
    private \app\modules\postal\sender\Type\PrzesylkaType $przesylkaFull;

    /**
     * @return \app\modules\postal\sender\Type\PrzesylkaShortType
     */
    public function getPrzesylkaShort() : \app\modules\postal\sender\Type\PrzesylkaShortType
    {
        return $this->przesylkaShort;
    }

    /**
     * @param \app\modules\postal\sender\Type\PrzesylkaShortType $przesylkaShort
     * @return static
     */
    public function withPrzesylkaShort(\app\modules\postal\sender\Type\PrzesylkaShortType $przesylkaShort) : static
    {
        $new = clone $this;
        $new->przesylkaShort = $przesylkaShort;

        return $new;
    }

    /**
     * @return \app\modules\postal\sender\Type\PrzesylkaType
     */
    public function getPrzesylkaFull() : \app\modules\postal\sender\Type\PrzesylkaType
    {
        return $this->przesylkaFull;
    }

    /**
     * @param \app\modules\postal\sender\Type\PrzesylkaType $przesylkaFull
     * @return static
     */
    public function withPrzesylkaFull(\app\modules\postal\sender\Type\PrzesylkaType $przesylkaFull) : static
    {
        $new = clone $this;
        $new->przesylkaFull = $przesylkaFull;

        return $new;
    }
}

