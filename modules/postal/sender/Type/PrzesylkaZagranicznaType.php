<?php

namespace app\modules\postal\sender\Type;

class PrzesylkaZagranicznaType extends PrzesylkaNieRejestrowanaType
{
    /**
     * @var null | \app\modules\postal\sender\Type\OplacaOdbiorcaType
     */
    private ?\app\modules\postal\sender\Type\OplacaOdbiorcaType $oplacaOdbiorca = null;

    /**
     * @var null | string
     */
    private ?string $mpk = null;

    /**
     * @var null | \app\modules\postal\sender\Type\AdresType
     */
    private ?\app\modules\postal\sender\Type\AdresType $adres = null;

    /**
     * @var null | \app\modules\postal\sender\Type\AdresType
     */
    private ?\app\modules\postal\sender\Type\AdresType $nadawca = null;

    /**
     * @var null | \app\modules\postal\sender\Type\DeklaracjaCelna2Type
     */
    private ?\app\modules\postal\sender\Type\DeklaracjaCelna2Type $deklaracjaCelna2 = null;

    /**
     * Element określający zawartość przesyłki.
     *  Aktualnie dopuszczalne wartości:
     *  KORESPONDENCJA
     *  DOKUMENTY_PONIZEJ_250G
     *  DOKUMENTY_POWYZEJ_250G
     *  TOWARY
     *
     * @var null | string
     */
    private ?string $zawartosc = null;

    /**
     * @var string
     */
    private string $guid;

    /**
     * @var null | string
     */
    private ?string $pakietGuid = null;

    /**
     * @var null | string
     */
    private ?string $opakowanieGuid = null;

    /**
     * @var null | string
     */
    private ?string $opis = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $planowanaDataNadania = null;

    /**
     * @var null | int
     */
    private ?int $ilosc = null;

    /**
     * @var null | bool
     */
    private ?bool $posteRestante = null;

    /**
     * @var null | \app\modules\postal\sender\Type\KategoriaType
     */
    private ?\app\modules\postal\sender\Type\KategoriaType $kategoria = null;

    /**
     * @var null | int
     */
    private ?int $masa = null;

    /**
     * @var null | bool
     */
    private ?bool $ekspres = null;

    /**
     * @var null | string
     */
    private ?string $kraj = null;

    /**
     * @return null | \app\modules\postal\sender\Type\OplacaOdbiorcaType
     */
    public function getOplacaOdbiorca() : ?\app\modules\postal\sender\Type\OplacaOdbiorcaType
    {
        return $this->oplacaOdbiorca;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\OplacaOdbiorcaType $oplacaOdbiorca
     * @return static
     */
    public function withOplacaOdbiorca(?\app\modules\postal\sender\Type\OplacaOdbiorcaType $oplacaOdbiorca) : static
    {
        $new = clone $this;
        $new->oplacaOdbiorca = $oplacaOdbiorca;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMpk() : ?string
    {
        return $this->mpk;
    }

    /**
     * @param null | string $mpk
     * @return static
     */
    public function withMpk(?string $mpk) : static
    {
        $new = clone $this;
        $new->mpk = $mpk;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\AdresType
     */
    public function getAdres() : ?\app\modules\postal\sender\Type\AdresType
    {
        return $this->adres;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\AdresType $adres
     * @return static
     */
    public function withAdres(?\app\modules\postal\sender\Type\AdresType $adres) : static
    {
        $new = clone $this;
        $new->adres = $adres;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\AdresType
     */
    public function getNadawca() : ?\app\modules\postal\sender\Type\AdresType
    {
        return $this->nadawca;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\AdresType $nadawca
     * @return static
     */
    public function withNadawca(?\app\modules\postal\sender\Type\AdresType $nadawca) : static
    {
        $new = clone $this;
        $new->nadawca = $nadawca;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\DeklaracjaCelna2Type
     */
    public function getDeklaracjaCelna2() : ?\app\modules\postal\sender\Type\DeklaracjaCelna2Type
    {
        return $this->deklaracjaCelna2;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\DeklaracjaCelna2Type $deklaracjaCelna2
     * @return static
     */
    public function withDeklaracjaCelna2(?\app\modules\postal\sender\Type\DeklaracjaCelna2Type $deklaracjaCelna2) : static
    {
        $new = clone $this;
        $new->deklaracjaCelna2 = $deklaracjaCelna2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getZawartosc() : ?string
    {
        return $this->zawartosc;
    }

    /**
     * @param null | string $zawartosc
     * @return static
     */
    public function withZawartosc(?string $zawartosc) : static
    {
        $new = clone $this;
        $new->zawartosc = $zawartosc;

        return $new;
    }

    /**
     * @return string
     */
    public function getGuid() : string
    {
        return $this->guid;
    }

    /**
     * @param string $guid
     * @return static
     */
    public function withGuid(string $guid) : static
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPakietGuid() : ?string
    {
        return $this->pakietGuid;
    }

    /**
     * @param null | string $pakietGuid
     * @return static
     */
    public function withPakietGuid(?string $pakietGuid) : static
    {
        $new = clone $this;
        $new->pakietGuid = $pakietGuid;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOpakowanieGuid() : ?string
    {
        return $this->opakowanieGuid;
    }

    /**
     * @param null | string $opakowanieGuid
     * @return static
     */
    public function withOpakowanieGuid(?string $opakowanieGuid) : static
    {
        $new = clone $this;
        $new->opakowanieGuid = $opakowanieGuid;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOpis() : ?string
    {
        return $this->opis;
    }

    /**
     * @param null | string $opis
     * @return static
     */
    public function withOpis(?string $opis) : static
    {
        $new = clone $this;
        $new->opis = $opis;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getPlanowanaDataNadania() : ?\DateTimeInterface
    {
        return $this->planowanaDataNadania;
    }

    /**
     * @param null | \DateTimeInterface $planowanaDataNadania
     * @return static
     */
    public function withPlanowanaDataNadania(?\DateTimeInterface $planowanaDataNadania) : static
    {
        $new = clone $this;
        $new->planowanaDataNadania = $planowanaDataNadania;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIlosc() : ?int
    {
        return $this->ilosc;
    }

    /**
     * @param null | int $ilosc
     * @return static
     */
    public function withIlosc(?int $ilosc) : static
    {
        $new = clone $this;
        $new->ilosc = $ilosc;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPosteRestante() : ?bool
    {
        return $this->posteRestante;
    }

    /**
     * @param null | bool $posteRestante
     * @return static
     */
    public function withPosteRestante(?bool $posteRestante) : static
    {
        $new = clone $this;
        $new->posteRestante = $posteRestante;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\KategoriaType
     */
    public function getKategoria() : ?\app\modules\postal\sender\Type\KategoriaType
    {
        return $this->kategoria;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\KategoriaType $kategoria
     * @return static
     */
    public function withKategoria(?\app\modules\postal\sender\Type\KategoriaType $kategoria) : static
    {
        $new = clone $this;
        $new->kategoria = $kategoria;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getMasa() : ?int
    {
        return $this->masa;
    }

    /**
     * @param null | int $masa
     * @return static
     */
    public function withMasa(?int $masa) : static
    {
        $new = clone $this;
        $new->masa = $masa;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getEkspres() : ?bool
    {
        return $this->ekspres;
    }

    /**
     * @param null | bool $ekspres
     * @return static
     */
    public function withEkspres(?bool $ekspres) : static
    {
        $new = clone $this;
        $new->ekspres = $ekspres;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getKraj() : ?string
    {
        return $this->kraj;
    }

    /**
     * @param null | string $kraj
     * @return static
     */
    public function withKraj(?string $kraj) : static
    {
        $new = clone $this;
        $new->kraj = $kraj;

        return $new;
    }
}

