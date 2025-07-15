<?php

namespace app\modules\postal\sender\Type;

class UbezpieczenieType
{
    /**
     * @var string
     */
    private string $rodzaj;

    /**
     * @var float
     */
    private float $kwota;

    /**
     * @var null | bool
     */
    private ?bool $akceptacjaOWU = null;

    /**
     * @return string
     */
    public function getRodzaj() : string
    {
        return $this->rodzaj;
    }

    /**
     * @param string $rodzaj
     * @return static
     */
    public function withRodzaj(string $rodzaj) : static
    {
        $new = clone $this;
        $new->rodzaj = $rodzaj;

        return $new;
    }

    /**
     * @return float
     */
    public function getKwota() : float
    {
        return $this->kwota;
    }

    /**
     * @param float $kwota
     * @return static
     */
    public function withKwota(float $kwota) : static
    {
        $new = clone $this;
        $new->kwota = $kwota;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getAkceptacjaOWU() : ?bool
    {
        return $this->akceptacjaOWU;
    }

    /**
     * @param null | bool $akceptacjaOWU
     * @return static
     */
    public function withAkceptacjaOWU(?bool $akceptacjaOWU) : static
    {
        $new = clone $this;
        $new->akceptacjaOWU = $akceptacjaOWU;

        return $new;
    }
}

