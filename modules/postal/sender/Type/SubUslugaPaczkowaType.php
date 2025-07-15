<?php

namespace app\modules\postal\sender\Type;

class SubUslugaPaczkowaType extends PrzesylkaType
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
     * @var \app\modules\postal\sender\Type\PobranieType
     */
    private \app\modules\postal\sender\Type\PobranieType $pobranie;

    /**
     * @var \app\modules\postal\sender\Type\UbezpieczenieType
     */
    private \app\modules\postal\sender\Type\UbezpieczenieType $ubezpieczenie;

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
     * @var null | string
     */
    private ?string $numerNadania = null;

    /**
     * @var null | int
     */
    private ?int $masa = null;

    /**
     * @var null | int
     */
    private ?int $wartosc = null;

    /**
     * @var null | bool
     */
    private ?bool $ostroznie = null;

    /**
     * @var null | \app\modules\postal\sender\Type\OpakowaniePocztowaType
     */
    private ?\app\modules\postal\sender\Type\OpakowaniePocztowaType $opakowanie = null;

    /**
     * @var null | bool
     */
    private ?bool $ponadgabaryt = null;

    /**
     * @var null | string
     */
    private ?string $numerPrzesylkiKlienta = null;

    /**
     * @var null | \app\modules\postal\sender\Type\GabarytType
     */
    private ?\app\modules\postal\sender\Type\GabarytType $gabaryt = null;

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
     * @return \app\modules\postal\sender\Type\PobranieType
     */
    public function getPobranie() : \app\modules\postal\sender\Type\PobranieType
    {
        return $this->pobranie;
    }

    /**
     * @param \app\modules\postal\sender\Type\PobranieType $pobranie
     * @return static
     */
    public function withPobranie(\app\modules\postal\sender\Type\PobranieType $pobranie) : static
    {
        $new = clone $this;
        $new->pobranie = $pobranie;

        return $new;
    }

    /**
     * @return \app\modules\postal\sender\Type\UbezpieczenieType
     */
    public function getUbezpieczenie() : \app\modules\postal\sender\Type\UbezpieczenieType
    {
        return $this->ubezpieczenie;
    }

    /**
     * @param \app\modules\postal\sender\Type\UbezpieczenieType $ubezpieczenie
     * @return static
     */
    public function withUbezpieczenie(\app\modules\postal\sender\Type\UbezpieczenieType $ubezpieczenie) : static
    {
        $new = clone $this;
        $new->ubezpieczenie = $ubezpieczenie;

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
     * @return null | string
     */
    public function getNumerNadania() : ?string
    {
        return $this->numerNadania;
    }

    /**
     * @param null | string $numerNadania
     * @return static
     */
    public function withNumerNadania(?string $numerNadania) : static
    {
        $new = clone $this;
        $new->numerNadania = $numerNadania;

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
     * @return null | int
     */
    public function getWartosc() : ?int
    {
        return $this->wartosc;
    }

    /**
     * @param null | int $wartosc
     * @return static
     */
    public function withWartosc(?int $wartosc) : static
    {
        $new = clone $this;
        $new->wartosc = $wartosc;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getOstroznie() : ?bool
    {
        return $this->ostroznie;
    }

    /**
     * @param null | bool $ostroznie
     * @return static
     */
    public function withOstroznie(?bool $ostroznie) : static
    {
        $new = clone $this;
        $new->ostroznie = $ostroznie;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\OpakowaniePocztowaType
     */
    public function getOpakowanie() : ?\app\modules\postal\sender\Type\OpakowaniePocztowaType
    {
        return $this->opakowanie;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\OpakowaniePocztowaType $opakowanie
     * @return static
     */
    public function withOpakowanie(?\app\modules\postal\sender\Type\OpakowaniePocztowaType $opakowanie) : static
    {
        $new = clone $this;
        $new->opakowanie = $opakowanie;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPonadgabaryt() : ?bool
    {
        return $this->ponadgabaryt;
    }

    /**
     * @param null | bool $ponadgabaryt
     * @return static
     */
    public function withPonadgabaryt(?bool $ponadgabaryt) : static
    {
        $new = clone $this;
        $new->ponadgabaryt = $ponadgabaryt;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerPrzesylkiKlienta() : ?string
    {
        return $this->numerPrzesylkiKlienta;
    }

    /**
     * @param null | string $numerPrzesylkiKlienta
     * @return static
     */
    public function withNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta) : static
    {
        $new = clone $this;
        $new->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\GabarytType
     */
    public function getGabaryt() : ?\app\modules\postal\sender\Type\GabarytType
    {
        return $this->gabaryt;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\GabarytType $gabaryt
     * @return static
     */
    public function withGabaryt(?\app\modules\postal\sender\Type\GabarytType $gabaryt) : static
    {
        $new = clone $this;
        $new->gabaryt = $gabaryt;

        return $new;
    }
}

