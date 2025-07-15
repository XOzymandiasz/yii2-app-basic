<?php

namespace app\modules\postal\sender\Type;

class SposobDoreczeniaType
{
    /**
     * kod sposobu doręczenia (jeden z HOM, PCS, PCF,
     *  SHP)
     *
     * @var string
     */
    private string $kod;

    /**
     * Wartość alfanumeryczna o maksymalnej długości
     *  35
     *  znaków, nie wymagany dla kod=HOM
     *
     * @var null | string
     */
    private ?string $identyfikatorPunktuOdbioru = null;

    /**
     * @return string
     */
    public function getKod() : string
    {
        return $this->kod;
    }

    /**
     * @param string $kod
     * @return static
     */
    public function withKod(string $kod) : static
    {
        $new = clone $this;
        $new->kod = $kod;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIdentyfikatorPunktuOdbioru() : ?string
    {
        return $this->identyfikatorPunktuOdbioru;
    }

    /**
     * @param null | string $identyfikatorPunktuOdbioru
     * @return static
     */
    public function withIdentyfikatorPunktuOdbioru(?string $identyfikatorPunktuOdbioru) : static
    {
        $new = clone $this;
        $new->identyfikatorPunktuOdbioru = $identyfikatorPunktuOdbioru;

        return $new;
    }
}

