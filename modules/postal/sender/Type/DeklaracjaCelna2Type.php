<?php

namespace app\modules\postal\sender\Type;

class DeklaracjaCelna2Type
{
    /**
     * @var \app\modules\postal\sender\Type\DeklaracaCelnaRodzajEnum
     */
    private \app\modules\postal\sender\Type\DeklaracaCelnaRodzajEnum $rodzaj;

    /**
     * @var \app\modules\postal\sender\Type\ZawartoscPrzesylkiZagranicznejEnum
     */
    private \app\modules\postal\sender\Type\ZawartoscPrzesylkiZagranicznejEnum $zawartoscPrzesylki;

    /**
     * @var array<int<0,4>, \app\modules\postal\sender\Type\DokumentyTowarzyszaceType>
     */
    private array $dokumentyTowarzyszace;

    /**
     * @var null | string
     */
    private ?string $wyjasnienie = null;

    /**
     * @var null | string
     */
    private ?string $oplatyPocztowe = null;

    /**
     * @var null | string
     */
    private ?string $uwagi = null;

    /**
     * @var null | string
     */
    private ?string $numerReferencyjnyImportera = null;

    /**
     * @var null | string
     */
    private ?string $numerTelefonuImportera = null;

    /**
     * Kod ISO waluty w której wyrażone są wartości
     *  pozycji podanych w elemencie szczegolyZawartosciPrzesylki
     *
     * @var string
     */
    private string $walutaKodISO;

    /**
     * @var non-empty-array<int<0,4>, \app\modules\postal\sender\Type\SzczegolyZawartosciPrzesylkiZagranicznejType>
     */
    private array $szczegolyZawartosciPrzesylki;

    /**
     * @var null | string
     */
    private ?string $numerReferencyjnyCelny = null;

    /**
     * @return \app\modules\postal\sender\Type\DeklaracaCelnaRodzajEnum
     */
    public function getRodzaj() : \app\modules\postal\sender\Type\DeklaracaCelnaRodzajEnum
    {
        return $this->rodzaj;
    }

    /**
     * @param \app\modules\postal\sender\Type\DeklaracaCelnaRodzajEnum $rodzaj
     * @return static
     */
    public function withRodzaj(\app\modules\postal\sender\Type\DeklaracaCelnaRodzajEnum $rodzaj) : static
    {
        $new = clone $this;
        $new->rodzaj = $rodzaj;

        return $new;
    }

    /**
     * @return \app\modules\postal\sender\Type\ZawartoscPrzesylkiZagranicznejEnum
     */
    public function getZawartoscPrzesylki() : \app\modules\postal\sender\Type\ZawartoscPrzesylkiZagranicznejEnum
    {
        return $this->zawartoscPrzesylki;
    }

    /**
     * @param \app\modules\postal\sender\Type\ZawartoscPrzesylkiZagranicznejEnum $zawartoscPrzesylki
     * @return static
     */
    public function withZawartoscPrzesylki(\app\modules\postal\sender\Type\ZawartoscPrzesylkiZagranicznejEnum $zawartoscPrzesylki) : static
    {
        $new = clone $this;
        $new->zawartoscPrzesylki = $zawartoscPrzesylki;

        return $new;
    }

    /**
     * @return array<int<0,4>, \app\modules\postal\sender\Type\DokumentyTowarzyszaceType>
     */
    public function getDokumentyTowarzyszace() : array
    {
        return $this->dokumentyTowarzyszace;
    }

    /**
     * @param array<int<0,4>, \app\modules\postal\sender\Type\DokumentyTowarzyszaceType> $dokumentyTowarzyszace
     * @return static
     */
    public function withDokumentyTowarzyszace(array $dokumentyTowarzyszace) : static
    {
        $new = clone $this;
        $new->dokumentyTowarzyszace = $dokumentyTowarzyszace;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWyjasnienie() : ?string
    {
        return $this->wyjasnienie;
    }

    /**
     * @param null | string $wyjasnienie
     * @return static
     */
    public function withWyjasnienie(?string $wyjasnienie) : static
    {
        $new = clone $this;
        $new->wyjasnienie = $wyjasnienie;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOplatyPocztowe() : ?string
    {
        return $this->oplatyPocztowe;
    }

    /**
     * @param null | string $oplatyPocztowe
     * @return static
     */
    public function withOplatyPocztowe(?string $oplatyPocztowe) : static
    {
        $new = clone $this;
        $new->oplatyPocztowe = $oplatyPocztowe;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUwagi() : ?string
    {
        return $this->uwagi;
    }

    /**
     * @param null | string $uwagi
     * @return static
     */
    public function withUwagi(?string $uwagi) : static
    {
        $new = clone $this;
        $new->uwagi = $uwagi;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerReferencyjnyImportera() : ?string
    {
        return $this->numerReferencyjnyImportera;
    }

    /**
     * @param null | string $numerReferencyjnyImportera
     * @return static
     */
    public function withNumerReferencyjnyImportera(?string $numerReferencyjnyImportera) : static
    {
        $new = clone $this;
        $new->numerReferencyjnyImportera = $numerReferencyjnyImportera;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerTelefonuImportera() : ?string
    {
        return $this->numerTelefonuImportera;
    }

    /**
     * @param null | string $numerTelefonuImportera
     * @return static
     */
    public function withNumerTelefonuImportera(?string $numerTelefonuImportera) : static
    {
        $new = clone $this;
        $new->numerTelefonuImportera = $numerTelefonuImportera;

        return $new;
    }

    /**
     * @return string
     */
    public function getWalutaKodISO() : string
    {
        return $this->walutaKodISO;
    }

    /**
     * @param string $walutaKodISO
     * @return static
     */
    public function withWalutaKodISO(string $walutaKodISO) : static
    {
        $new = clone $this;
        $new->walutaKodISO = $walutaKodISO;

        return $new;
    }

    /**
     * @return non-empty-array<int<0,4>, \app\modules\postal\sender\Type\SzczegolyZawartosciPrzesylkiZagranicznejType>
     */
    public function getSzczegolyZawartosciPrzesylki() : array
    {
        return $this->szczegolyZawartosciPrzesylki;
    }

    /**
     * @param non-empty-array<int<0,4>, \app\modules\postal\sender\Type\SzczegolyZawartosciPrzesylkiZagranicznejType> $szczegolyZawartosciPrzesylki
     * @return static
     */
    public function withSzczegolyZawartosciPrzesylki(array $szczegolyZawartosciPrzesylki) : static
    {
        $new = clone $this;
        $new->szczegolyZawartosciPrzesylki = $szczegolyZawartosciPrzesylki;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerReferencyjnyCelny() : ?string
    {
        return $this->numerReferencyjnyCelny;
    }

    /**
     * @param null | string $numerReferencyjnyCelny
     * @return static
     */
    public function withNumerReferencyjnyCelny(?string $numerReferencyjnyCelny) : static
    {
        $new = clone $this;
        $new->numerReferencyjnyCelny = $numerReferencyjnyCelny;

        return $new;
    }
}

