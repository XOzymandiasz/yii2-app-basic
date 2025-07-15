<?php

namespace app\modules\postal\sender\Type;

class AwizacjaType
{
    /**
     * @var mixed
     */
    private mixed $od;

    /**
     * @var mixed
     */
    private mixed $do;

    /**
     * @return mixed
     */
    public function getOd() : mixed
    {
        return $this->od;
    }

    /**
     * @param mixed $od
     * @return static
     */
    public function withOd(mixed $od) : static
    {
        $new = clone $this;
        $new->od = $od;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getDo() : mixed
    {
        return $this->do;
    }

    /**
     * @param mixed $do
     * @return static
     */
    public function withDo(mixed $do) : static
    {
        $new = clone $this;
        $new->do = $do;

        return $new;
    }
}

