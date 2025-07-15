<?php

namespace app\modules\postal\sender\Type;

class PrzesylkaProceduralnaType extends PrzesylkaRejestrowanaType
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
     * @var null | \app\modules\postal\sender\Type\EPOType
     */
    private ?\app\modules\postal\sender\Type\EPOType $epo = null;

    /**
     * @var null | \app\modules\postal\sender\Type\UrzadWydaniaEPrzesylkiType
     */
    private ?\app\modules\postal\sender\Type\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null;

    /**
     * @var null | \app\modules\postal\sender\Type\PobranieType
     */
    private ?\app\modules\postal\sender\Type\PobranieType $pobranie = null;

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
     * @var null | \app\modules\postal\sender\Type\SerwisPrzesylkaProceduralnaType
     */
    private ?\app\modules\postal\sender\Type\SerwisPrzesylkaProceduralnaType $serwis = null;

    /**
     * @var null | string
     */
    private ?string $numerNadaniaPowrot1 = null;

    /**
     * @var null | string
     */
    private ?string $numerNadaniaPowrot2 = null;

    /**
     * @var null | int
     */
    private ?int $idPrzesylkaZawartosc = null;

    /**
     * @var null | int
     */
    private ?int $idListaCzynnosci = null;

    /**
     * @var null | int
     */
    private ?int $masa = null;

    /**
     * @var null | \app\modules\postal\sender\Type\OpakowaniePrzesylkaProceduralnaType
     */
    private ?\app\modules\postal\sender\Type\OpakowaniePrzesylkaProceduralnaType $opakowanie = null;

    /**
     * @var null | string
     */
    private ?string $numerPrzesylkiKlienta = null;

    /**
     * @var null | int
     */
    private ?int $wartosc = null;

    /**
     * @var null | int
     */
    private ?int $idAdresPrzesylkaPowrot = null;

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
     * @return null | \app\modules\postal\sender\Type\EPOType
     */
    public function getEpo() : ?\app\modules\postal\sender\Type\EPOType
    {
        return $this->epo;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\EPOType $epo
     * @return static
     */
    public function withEpo(?\app\modules\postal\sender\Type\EPOType $epo) : static
    {
        $new = clone $this;
        $new->epo = $epo;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\UrzadWydaniaEPrzesylkiType
     */
    public function getUrzadWydaniaEPrzesylki() : ?\app\modules\postal\sender\Type\UrzadWydaniaEPrzesylkiType
    {
        return $this->urzadWydaniaEPrzesylki;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @return static
     */
    public function withUrzadWydaniaEPrzesylki(?\app\modules\postal\sender\Type\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki) : static
    {
        $new = clone $this;
        $new->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\PobranieType
     */
    public function getPobranie() : ?\app\modules\postal\sender\Type\PobranieType
    {
        return $this->pobranie;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PobranieType $pobranie
     * @return static
     */
    public function withPobranie(?\app\modules\postal\sender\Type\PobranieType $pobranie) : static
    {
        $new = clone $this;
        $new->pobranie = $pobranie;

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
     * @return null | \app\modules\postal\sender\Type\SerwisPrzesylkaProceduralnaType
     */
    public function getSerwis() : ?\app\modules\postal\sender\Type\SerwisPrzesylkaProceduralnaType
    {
        return $this->serwis;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\SerwisPrzesylkaProceduralnaType $serwis
     * @return static
     */
    public function withSerwis(?\app\modules\postal\sender\Type\SerwisPrzesylkaProceduralnaType $serwis) : static
    {
        $new = clone $this;
        $new->serwis = $serwis;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerNadaniaPowrot1() : ?string
    {
        return $this->numerNadaniaPowrot1;
    }

    /**
     * @param null | string $numerNadaniaPowrot1
     * @return static
     */
    public function withNumerNadaniaPowrot1(?string $numerNadaniaPowrot1) : static
    {
        $new = clone $this;
        $new->numerNadaniaPowrot1 = $numerNadaniaPowrot1;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerNadaniaPowrot2() : ?string
    {
        return $this->numerNadaniaPowrot2;
    }

    /**
     * @param null | string $numerNadaniaPowrot2
     * @return static
     */
    public function withNumerNadaniaPowrot2(?string $numerNadaniaPowrot2) : static
    {
        $new = clone $this;
        $new->numerNadaniaPowrot2 = $numerNadaniaPowrot2;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdPrzesylkaZawartosc() : ?int
    {
        return $this->idPrzesylkaZawartosc;
    }

    /**
     * @param null | int $idPrzesylkaZawartosc
     * @return static
     */
    public function withIdPrzesylkaZawartosc(?int $idPrzesylkaZawartosc) : static
    {
        $new = clone $this;
        $new->idPrzesylkaZawartosc = $idPrzesylkaZawartosc;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdListaCzynnosci() : ?int
    {
        return $this->idListaCzynnosci;
    }

    /**
     * @param null | int $idListaCzynnosci
     * @return static
     */
    public function withIdListaCzynnosci(?int $idListaCzynnosci) : static
    {
        $new = clone $this;
        $new->idListaCzynnosci = $idListaCzynnosci;

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
     * @return null | \app\modules\postal\sender\Type\OpakowaniePrzesylkaProceduralnaType
     */
    public function getOpakowanie() : ?\app\modules\postal\sender\Type\OpakowaniePrzesylkaProceduralnaType
    {
        return $this->opakowanie;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\OpakowaniePrzesylkaProceduralnaType $opakowanie
     * @return static
     */
    public function withOpakowanie(?\app\modules\postal\sender\Type\OpakowaniePrzesylkaProceduralnaType $opakowanie) : static
    {
        $new = clone $this;
        $new->opakowanie = $opakowanie;

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
     * @return null | int
     */
    public function getIdAdresPrzesylkaPowrot() : ?int
    {
        return $this->idAdresPrzesylkaPowrot;
    }

    /**
     * @param null | int $idAdresPrzesylkaPowrot
     * @return static
     */
    public function withIdAdresPrzesylkaPowrot(?int $idAdresPrzesylkaPowrot) : static
    {
        $new = clone $this;
        $new->idAdresPrzesylkaPowrot = $idAdresPrzesylkaPowrot;

        return $new;
    }
}

