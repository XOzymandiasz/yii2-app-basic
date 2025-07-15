<?php

namespace app\modules\postal\sender\Type;

class DeklaracjaCelnaType
{
    /**
     * @var non-empty-array<int<0,4>, \app\modules\postal\sender\Type\SzczegolyDeklaracjiCelnejType>
     */
    private array $szczegoly;

    /**
     * @var null | bool
     */
    private ?bool $podarunek = null;

    /**
     * @var null | bool
     */
    private ?bool $dokument = null;

    /**
     * @var null | bool
     */
    private ?bool $probkaHandlowa = null;

    /**
     * @var null | bool
     */
    private ?bool $zwrotTowaru = null;

    /**
     * @var null | bool
     */
    private ?bool $towary = null;

    /**
     * @var null | bool
     */
    private ?bool $inny = null;

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
    private ?string $licencja = null;

    /**
     * @var null | string
     */
    private ?string $swiadectwo = null;

    /**
     * @var null | string
     */
    private ?string $faktura = null;

    /**
     * @var null | string
     */
    private ?string $numerReferencyjnyImportera = null;

    /**
     * @var null | string
     */
    private ?string $numerTelefonuImportera = null;

    /**
     * @var null | string
     */
    private ?string $waluta = null;

    /**
     * @return non-empty-array<int<0,4>, \app\modules\postal\sender\Type\SzczegolyDeklaracjiCelnejType>
     */
    public function getSzczegoly() : array
    {
        return $this->szczegoly;
    }

    /**
     * @param non-empty-array<int<0,4>, \app\modules\postal\sender\Type\SzczegolyDeklaracjiCelnejType> $szczegoly
     * @return static
     */
    public function withSzczegoly(array $szczegoly) : static
    {
        $new = clone $this;
        $new->szczegoly = $szczegoly;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPodarunek() : ?bool
    {
        return $this->podarunek;
    }

    /**
     * @param null | bool $podarunek
     * @return static
     */
    public function withPodarunek(?bool $podarunek) : static
    {
        $new = clone $this;
        $new->podarunek = $podarunek;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getDokument() : ?bool
    {
        return $this->dokument;
    }

    /**
     * @param null | bool $dokument
     * @return static
     */
    public function withDokument(?bool $dokument) : static
    {
        $new = clone $this;
        $new->dokument = $dokument;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getProbkaHandlowa() : ?bool
    {
        return $this->probkaHandlowa;
    }

    /**
     * @param null | bool $probkaHandlowa
     * @return static
     */
    public function withProbkaHandlowa(?bool $probkaHandlowa) : static
    {
        $new = clone $this;
        $new->probkaHandlowa = $probkaHandlowa;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getZwrotTowaru() : ?bool
    {
        return $this->zwrotTowaru;
    }

    /**
     * @param null | bool $zwrotTowaru
     * @return static
     */
    public function withZwrotTowaru(?bool $zwrotTowaru) : static
    {
        $new = clone $this;
        $new->zwrotTowaru = $zwrotTowaru;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getTowary() : ?bool
    {
        return $this->towary;
    }

    /**
     * @param null | bool $towary
     * @return static
     */
    public function withTowary(?bool $towary) : static
    {
        $new = clone $this;
        $new->towary = $towary;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getInny() : ?bool
    {
        return $this->inny;
    }

    /**
     * @param null | bool $inny
     * @return static
     */
    public function withInny(?bool $inny) : static
    {
        $new = clone $this;
        $new->inny = $inny;

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
    public function getLicencja() : ?string
    {
        return $this->licencja;
    }

    /**
     * @param null | string $licencja
     * @return static
     */
    public function withLicencja(?string $licencja) : static
    {
        $new = clone $this;
        $new->licencja = $licencja;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSwiadectwo() : ?string
    {
        return $this->swiadectwo;
    }

    /**
     * @param null | string $swiadectwo
     * @return static
     */
    public function withSwiadectwo(?string $swiadectwo) : static
    {
        $new = clone $this;
        $new->swiadectwo = $swiadectwo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFaktura() : ?string
    {
        return $this->faktura;
    }

    /**
     * @param null | string $faktura
     * @return static
     */
    public function withFaktura(?string $faktura) : static
    {
        $new = clone $this;
        $new->faktura = $faktura;

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
     * @return null | string
     */
    public function getWaluta() : ?string
    {
        return $this->waluta;
    }

    /**
     * @param null | string $waluta
     * @return static
     */
    public function withWaluta(?string $waluta) : static
    {
        $new = clone $this;
        $new->waluta = $waluta;

        return $new;
    }
}

