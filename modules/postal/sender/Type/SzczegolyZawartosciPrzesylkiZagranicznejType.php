<?php

namespace app\modules\postal\sender\Type;

class SzczegolyZawartosciPrzesylkiZagranicznejType
{
    /**
     * @var string
     */
    private string $okreslenieZawartosci;

    /**
     * @var int
     */
    private int $ilosc;

    /**
     * @var null | int
     */
    private ?int $masaNetto = null;

    /**
     * @var float
     */
    private float $wartosc;

    /**
     * Numer taryfy Zharmonizowanego Systemu (HS)
     *
     * @var null | string
     */
    private ?string $numerTaryfyHs = null;

    /**
     * Kod ISO (alfa-2) kraju pochodzenia opisywanej
     *  zawartości
     *
     * @var null | string
     */
    private ?string $krajPochodzeniaKodAlfa2 = null;

    /**
     * @return string
     */
    public function getOkreslenieZawartosci() : string
    {
        return $this->okreslenieZawartosci;
    }

    /**
     * @param string $okreslenieZawartosci
     * @return static
     */
    public function withOkreslenieZawartosci(string $okreslenieZawartosci) : static
    {
        $new = clone $this;
        $new->okreslenieZawartosci = $okreslenieZawartosci;

        return $new;
    }

    /**
     * @return int
     */
    public function getIlosc() : int
    {
        return $this->ilosc;
    }

    /**
     * @param int $ilosc
     * @return static
     */
    public function withIlosc(int $ilosc) : static
    {
        $new = clone $this;
        $new->ilosc = $ilosc;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getMasaNetto() : ?int
    {
        return $this->masaNetto;
    }

    /**
     * @param null | int $masaNetto
     * @return static
     */
    public function withMasaNetto(?int $masaNetto) : static
    {
        $new = clone $this;
        $new->masaNetto = $masaNetto;

        return $new;
    }

    /**
     * @return float
     */
    public function getWartosc() : float
    {
        return $this->wartosc;
    }

    /**
     * @param float $wartosc
     * @return static
     */
    public function withWartosc(float $wartosc) : static
    {
        $new = clone $this;
        $new->wartosc = $wartosc;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerTaryfyHs() : ?string
    {
        return $this->numerTaryfyHs;
    }

    /**
     * @param null | string $numerTaryfyHs
     * @return static
     */
    public function withNumerTaryfyHs(?string $numerTaryfyHs) : static
    {
        $new = clone $this;
        $new->numerTaryfyHs = $numerTaryfyHs;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getKrajPochodzeniaKodAlfa2() : ?string
    {
        return $this->krajPochodzeniaKodAlfa2;
    }

    /**
     * @param null | string $krajPochodzeniaKodAlfa2
     * @return static
     */
    public function withKrajPochodzeniaKodAlfa2(?string $krajPochodzeniaKodAlfa2) : static
    {
        $new = clone $this;
        $new->krajPochodzeniaKodAlfa2 = $krajPochodzeniaKodAlfa2;

        return $new;
    }
}

