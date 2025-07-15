<?php

namespace app\modules\postal\sender\Type;

class WspolrzednaGeograficznaType
{
    /**
     * @var null | float
     */
    private ?float $dec = null;

    /**
     * @var null | int
     */
    private ?int $stopien = null;

    /**
     * @var null | int
     */
    private ?int $minuta = null;

    /**
     * @var null | float
     */
    private ?float $sekunda = null;

    /**
     * @return null | float
     */
    public function getDec() : ?float
    {
        return $this->dec;
    }

    /**
     * @param null | float $dec
     * @return static
     */
    public function withDec(?float $dec) : static
    {
        $new = clone $this;
        $new->dec = $dec;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getStopien() : ?int
    {
        return $this->stopien;
    }

    /**
     * @param null | int $stopien
     * @return static
     */
    public function withStopien(?int $stopien) : static
    {
        $new = clone $this;
        $new->stopien = $stopien;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getMinuta() : ?int
    {
        return $this->minuta;
    }

    /**
     * @param null | int $minuta
     * @return static
     */
    public function withMinuta(?int $minuta) : static
    {
        $new = clone $this;
        $new->minuta = $minuta;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getSekunda() : ?float
    {
        return $this->sekunda;
    }

    /**
     * @param null | float $sekunda
     * @return static
     */
    public function withSekunda(?float $sekunda) : static
    {
        $new = clone $this;
        $new->sekunda = $sekunda;

        return $new;
    }
}

