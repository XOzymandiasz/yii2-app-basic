<?php

namespace app\modules\postal\sender\Type;

class DataZlozeniaType
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $od;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $do;

    /**
     * @return \DateTimeInterface
     */
    public function getOd() : \DateTimeInterface
    {
        return $this->od;
    }

    /**
     * @param \DateTimeInterface $od
     * @return static
     */
    public function withOd(\DateTimeInterface $od) : static
    {
        $new = clone $this;
        $new->od = $od;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDo() : \DateTimeInterface
    {
        return $this->do;
    }

    /**
     * @param \DateTimeInterface $do
     * @return static
     */
    public function withDo(\DateTimeInterface $do) : static
    {
        $new = clone $this;
        $new->do = $do;

        return $new;
    }
}

