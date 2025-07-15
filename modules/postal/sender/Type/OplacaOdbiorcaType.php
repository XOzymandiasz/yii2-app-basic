<?php

namespace app\modules\postal\sender\Type;

class OplacaOdbiorcaType
{
    /**
     * Typ odbiorcy/adresata opłacającego przesyłkę.
     *  Dopuszczalne wartości: ADRESAT_INDYWIDUALNY, ADRESAT_UMOWNY,
     *  ODDZIAL.
     *
     * @var null | \app\modules\postal\sender\Type\TypOplacaOdbiorcaEnum
     */
    private ?\app\modules\postal\sender\Type\TypOplacaOdbiorcaEnum $typ = null;

    /**
     * Wymagalny dla typ=ADRESAT_UMOWNY i
     *  typ=ODDZIAL.
     *
     * @var null | \app\modules\postal\sender\Type\OplacaOdbiorcaKartaType
     */
    private ?\app\modules\postal\sender\Type\OplacaOdbiorcaKartaType $karta = null;

    /**
     * @return null | \app\modules\postal\sender\Type\TypOplacaOdbiorcaEnum
     */
    public function getTyp() : ?\app\modules\postal\sender\Type\TypOplacaOdbiorcaEnum
    {
        return $this->typ;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\TypOplacaOdbiorcaEnum $typ
     * @return static
     */
    public function withTyp(?\app\modules\postal\sender\Type\TypOplacaOdbiorcaEnum $typ) : static
    {
        $new = clone $this;
        $new->typ = $typ;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\OplacaOdbiorcaKartaType
     */
    public function getKarta() : ?\app\modules\postal\sender\Type\OplacaOdbiorcaKartaType
    {
        return $this->karta;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\OplacaOdbiorcaKartaType $karta
     * @return static
     */
    public function withKarta(?\app\modules\postal\sender\Type\OplacaOdbiorcaKartaType $karta) : static
    {
        $new = clone $this;
        $new->karta = $karta;

        return $new;
    }
}

