<?php

namespace app\modules\postal\sender\Type;

class ProduktInKartaType
{
    /**
     * @var string
     */
    private string $symbolIWD;

    /**
     * @var string
     */
    private string $nazwaWyswietlana;

    /**
     * @var string
     */
    private string $nazwaProduktu;

    /**
     * @return string
     */
    public function getSymbolIWD() : string
    {
        return $this->symbolIWD;
    }

    /**
     * @param string $symbolIWD
     * @return static
     */
    public function withSymbolIWD(string $symbolIWD) : static
    {
        $new = clone $this;
        $new->symbolIWD = $symbolIWD;

        return $new;
    }

    /**
     * @return string
     */
    public function getNazwaWyswietlana() : string
    {
        return $this->nazwaWyswietlana;
    }

    /**
     * @param string $nazwaWyswietlana
     * @return static
     */
    public function withNazwaWyswietlana(string $nazwaWyswietlana) : static
    {
        $new = clone $this;
        $new->nazwaWyswietlana = $nazwaWyswietlana;

        return $new;
    }

    /**
     * @return string
     */
    public function getNazwaProduktu() : string
    {
        return $this->nazwaProduktu;
    }

    /**
     * @param string $nazwaProduktu
     * @return static
     */
    public function withNazwaProduktu(string $nazwaProduktu) : static
    {
        $new = clone $this;
        $new->nazwaProduktu = $nazwaProduktu;

        return $new;
    }
}

