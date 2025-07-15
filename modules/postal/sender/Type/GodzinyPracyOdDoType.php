<?php

namespace app\modules\postal\sender\Type;

class GodzinyPracyOdDoType
{
    /**
     * @var null | mixed
     */
    private mixed $od = null;

    /**
     * @var null | mixed
     */
    private mixed $do = null;

    /**
     * @return null | mixed
     */
    public function getOd() : mixed
    {
        return $this->od;
    }

    /**
     * @param null | mixed $od
     * @return static
     */
    public function withOd(mixed $od) : static
    {
        $new = clone $this;
        $new->od = $od;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getDo() : mixed
    {
        return $this->do;
    }

    /**
     * @param null | mixed $do
     * @return static
     */
    public function withDo(mixed $do) : static
    {
        $new = clone $this;
        $new->do = $do;

        return $new;
    }
}

