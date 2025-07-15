<?php

namespace app\modules\postal\sender\Type;

class PrintResultType
{
    /**
     * @var null | string
     */
    private ?string $guid = null;

    /**
     * @var null | mixed
     */
    private mixed $print = null;

    /**
     * @return null | string
     */
    public function getGuid() : ?string
    {
        return $this->guid;
    }

    /**
     * @param null | string $guid
     * @return static
     */
    public function withGuid(?string $guid) : static
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getPrint() : mixed
    {
        return $this->print;
    }

    /**
     * @param null | mixed $print
     * @return static
     */
    public function withPrint(mixed $print) : static
    {
        $new = clone $this;
        $new->print = $print;

        return $new;
    }
}

