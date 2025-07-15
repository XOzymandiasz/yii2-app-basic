<?php

namespace app\modules\postal\sender\Type;

class ReklamacjaInfoType
{
    /**
     * @var string
     */
    private string $idReklamacja;

    /**
     * @var string
     */
    private string $guidPrzesylki;

    /**
     * @return string
     */
    public function getIdReklamacja() : string
    {
        return $this->idReklamacja;
    }

    /**
     * @param string $idReklamacja
     * @return static
     */
    public function withIdReklamacja(string $idReklamacja) : static
    {
        $new = clone $this;
        $new->idReklamacja = $idReklamacja;

        return $new;
    }

    /**
     * @return string
     */
    public function getGuidPrzesylki() : string
    {
        return $this->guidPrzesylki;
    }

    /**
     * @param string $guidPrzesylki
     * @return static
     */
    public function withGuidPrzesylki(string $guidPrzesylki) : static
    {
        $new = clone $this;
        $new->guidPrzesylki = $guidPrzesylki;

        return $new;
    }
}

