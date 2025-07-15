<?php

namespace app\modules\postal\sender\Type;

class EMSType extends PrzesylkaRejestrowanaType
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
     * Opcjonalne informacje o powiązaniu przesyłki ze
     *  sprzedażą w serwisie Allegro
     *
     * @var null | \app\modules\postal\sender\Type\RelatedToAllegroType
     */
    private ?\app\modules\postal\sender\Type\RelatedToAllegroType $relatedToAllegro = null;

    /**
     * @var null | \app\modules\postal\sender\Type\UbezpieczenieType
     */
    private ?\app\modules\postal\sender\Type\UbezpieczenieType $ubezpieczenie = null;

    /**
     * Deklaracja celna - "deprecated"
     *  - zalecane
     *  jest ustawianie
     *  elementu deklaracjaCelna2
     *
     * @var null | \app\modules\postal\sender\Type\DeklaracjaCelnaType
     */
    private ?\app\modules\postal\sender\Type\DeklaracjaCelnaType $deklaracjaCelna = null;

    /**
     * @var null | \app\modules\postal\sender\Type\PotwierdzenieDoreczeniaType
     */
    private ?\app\modules\postal\sender\Type\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;

    /**
     * @var null | \app\modules\postal\sender\Type\DeklaracjaCelna2Type
     */
    private ?\app\modules\postal\sender\Type\DeklaracjaCelna2Type $deklaracjaCelna2 = null;

    /**
     * Umożliwia określenie sposobu nadania przesyłki w
     *  ramach systemu Interconnect.
     *  Obsługiwane wartości:
     *  -
     *  ODBIOR_Z_ADRESU_PRYWATNEGO
     *  - ODBIOR_Z_ADRESU_FIRMOWEGO
     *  -
     *  NADANIE_W_PLACOWCE_POCZTOWEJ
     *
     * @var null | string
     */
    private ?string $sposobNadaniaInterconnect = null;

    /**
     * @var null | \app\modules\postal\sender\Type\SposobDoreczeniaType
     */
    private ?\app\modules\postal\sender\Type\SposobDoreczeniaType $sposobDoreczenia = null;

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
     * @var null | string
     */
    private ?string $sygnatura = null;

    /**
     * @var null | string
     */
    private ?string $terminSprawy = null;

    /**
     * @var null | string
     */
    private ?string $rodzaj = null;

    /**
     * @var null | bool
     */
    private ?bool $weryfikacjaPlatnosci = null;

    /**
     * @var null | \app\modules\postal\sender\Type\EMSTypOpakowaniaType
     */
    private ?\app\modules\postal\sender\Type\EMSTypOpakowaniaType $typOpakowania = null;

    /**
     * @var null | int
     */
    private ?int $masa = null;

    /**
     * @var null | bool
     */
    private ?bool $zalaczoneDokumenty = null;

    /**
     * @var null | string
     */
    private ?string $numerPrzesylkiKlienta = null;

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
     * @return null | \app\modules\postal\sender\Type\RelatedToAllegroType
     */
    public function getRelatedToAllegro() : ?\app\modules\postal\sender\Type\RelatedToAllegroType
    {
        return $this->relatedToAllegro;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\RelatedToAllegroType $relatedToAllegro
     * @return static
     */
    public function withRelatedToAllegro(?\app\modules\postal\sender\Type\RelatedToAllegroType $relatedToAllegro) : static
    {
        $new = clone $this;
        $new->relatedToAllegro = $relatedToAllegro;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\UbezpieczenieType
     */
    public function getUbezpieczenie() : ?\app\modules\postal\sender\Type\UbezpieczenieType
    {
        return $this->ubezpieczenie;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\UbezpieczenieType $ubezpieczenie
     * @return static
     */
    public function withUbezpieczenie(?\app\modules\postal\sender\Type\UbezpieczenieType $ubezpieczenie) : static
    {
        $new = clone $this;
        $new->ubezpieczenie = $ubezpieczenie;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\DeklaracjaCelnaType
     */
    public function getDeklaracjaCelna() : ?\app\modules\postal\sender\Type\DeklaracjaCelnaType
    {
        return $this->deklaracjaCelna;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\DeklaracjaCelnaType $deklaracjaCelna
     * @return static
     */
    public function withDeklaracjaCelna(?\app\modules\postal\sender\Type\DeklaracjaCelnaType $deklaracjaCelna) : static
    {
        $new = clone $this;
        $new->deklaracjaCelna = $deklaracjaCelna;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\PotwierdzenieDoreczeniaType
     */
    public function getPotwierdzenieDoreczenia() : ?\app\modules\postal\sender\Type\PotwierdzenieDoreczeniaType
    {
        return $this->potwierdzenieDoreczenia;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @return static
     */
    public function withPotwierdzenieDoreczenia(?\app\modules\postal\sender\Type\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia) : static
    {
        $new = clone $this;
        $new->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;

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
    public function getSposobNadaniaInterconnect() : ?string
    {
        return $this->sposobNadaniaInterconnect;
    }

    /**
     * @param null | string $sposobNadaniaInterconnect
     * @return static
     */
    public function withSposobNadaniaInterconnect(?string $sposobNadaniaInterconnect) : static
    {
        $new = clone $this;
        $new->sposobNadaniaInterconnect = $sposobNadaniaInterconnect;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\SposobDoreczeniaType
     */
    public function getSposobDoreczenia() : ?\app\modules\postal\sender\Type\SposobDoreczeniaType
    {
        return $this->sposobDoreczenia;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\SposobDoreczeniaType $sposobDoreczenia
     * @return static
     */
    public function withSposobDoreczenia(?\app\modules\postal\sender\Type\SposobDoreczeniaType $sposobDoreczenia) : static
    {
        $new = clone $this;
        $new->sposobDoreczenia = $sposobDoreczenia;

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
     * @return null | string
     */
    public function getSygnatura() : ?string
    {
        return $this->sygnatura;
    }

    /**
     * @param null | string $sygnatura
     * @return static
     */
    public function withSygnatura(?string $sygnatura) : static
    {
        $new = clone $this;
        $new->sygnatura = $sygnatura;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTerminSprawy() : ?string
    {
        return $this->terminSprawy;
    }

    /**
     * @param null | string $terminSprawy
     * @return static
     */
    public function withTerminSprawy(?string $terminSprawy) : static
    {
        $new = clone $this;
        $new->terminSprawy = $terminSprawy;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRodzaj() : ?string
    {
        return $this->rodzaj;
    }

    /**
     * @param null | string $rodzaj
     * @return static
     */
    public function withRodzaj(?string $rodzaj) : static
    {
        $new = clone $this;
        $new->rodzaj = $rodzaj;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getWeryfikacjaPlatnosci() : ?bool
    {
        return $this->weryfikacjaPlatnosci;
    }

    /**
     * @param null | bool $weryfikacjaPlatnosci
     * @return static
     */
    public function withWeryfikacjaPlatnosci(?bool $weryfikacjaPlatnosci) : static
    {
        $new = clone $this;
        $new->weryfikacjaPlatnosci = $weryfikacjaPlatnosci;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\EMSTypOpakowaniaType
     */
    public function getTypOpakowania() : ?\app\modules\postal\sender\Type\EMSTypOpakowaniaType
    {
        return $this->typOpakowania;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\EMSTypOpakowaniaType $typOpakowania
     * @return static
     */
    public function withTypOpakowania(?\app\modules\postal\sender\Type\EMSTypOpakowaniaType $typOpakowania) : static
    {
        $new = clone $this;
        $new->typOpakowania = $typOpakowania;

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
    public function getZalaczoneDokumenty() : ?bool
    {
        return $this->zalaczoneDokumenty;
    }

    /**
     * @param null | bool $zalaczoneDokumenty
     * @return static
     */
    public function withZalaczoneDokumenty(?bool $zalaczoneDokumenty) : static
    {
        $new = clone $this;
        $new->zalaczoneDokumenty = $zalaczoneDokumenty;

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
}

