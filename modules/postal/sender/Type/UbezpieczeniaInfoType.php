<?php

namespace app\modules\postal\sender\Type;

class UbezpieczeniaInfoType
{
    /**
     * @var null | string
     */
    private ?string $typPrzesylki = null;

    /**
     * @var null | float
     */
    private ?float $kwota = null;

    /**
     * @return null | string
     */
    public function getTypPrzesylki() : ?string
    {
        return $this->typPrzesylki;
    }

    /**
     * @param null | string $typPrzesylki
     * @return static
     */
    public function withTypPrzesylki(?string $typPrzesylki) : static
    {
        $new = clone $this;
        $new->typPrzesylki = $typPrzesylki;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getKwota() : ?float
    {
        return $this->kwota;
    }

    /**
     * @param null | float $kwota
     * @return static
     */
    public function withKwota(?float $kwota) : static
    {
        $new = clone $this;
        $new->kwota = $kwota;

        return $new;
    }
}

