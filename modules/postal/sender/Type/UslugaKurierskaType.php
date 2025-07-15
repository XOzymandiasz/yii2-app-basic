<?php

namespace app\modules\postal\sender\Type;

class UslugaKurierskaType extends PrzesylkaRejestrowanaType
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
     * @var null | \app\modules\postal\sender\Type\PobranieType
     */
    private ?\app\modules\postal\sender\Type\PobranieType $pobranie = null;

    /**
     * @var null | \app\modules\postal\sender\Type\OdbiorPrzesylkiOdNadawcyType
     */
    private ?\app\modules\postal\sender\Type\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy = null;

    /**
     * @var null | \app\modules\postal\sender\Type\PotwierdzenieDoreczeniaType
     */
    private ?\app\modules\postal\sender\Type\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;

    /**
     * @var null | \app\modules\postal\sender\Type\UrzadWydaniaEPrzesylkiType
     */
    private ?\app\modules\postal\sender\Type\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\SubUslugaKurierskaType>
     */
    private array $subPrzesylka;

    /**
     * @var null | \app\modules\postal\sender\Type\PotwierdzenieOdbioruKurierskaType
     */
    private ?\app\modules\postal\sender\Type\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru = null;

    /**
     * @var null | \app\modules\postal\sender\Type\UbezpieczenieType
     */
    private ?\app\modules\postal\sender\Type\UbezpieczenieType $ubezpieczenie = null;

    /**
     * @var null | \app\modules\postal\sender\Type\ZwrotDokumentowKurierskaType
     */
    private ?\app\modules\postal\sender\Type\ZwrotDokumentowKurierskaType $zwrotDokumentow = null;

    /**
     * @var null | int
     */
    private ?int $idDokumentyZwrotneAdresy = null;

    /**
     * @var null | \app\modules\postal\sender\Type\DoreczenieUslugaKurierskaType
     */
    private ?\app\modules\postal\sender\Type\DoreczenieUslugaKurierskaType $doreczenie = null;

    /**
     * @var null | \app\modules\postal\sender\Type\EPOType
     */
    private ?\app\modules\postal\sender\Type\EPOType $epo = null;

    /**
     * @var null | \app\modules\postal\sender\Type\AdresType
     */
    private ?\app\modules\postal\sender\Type\AdresType $adresDlaZwrotu = null;

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
     * @var null | \app\modules\postal\sender\Type\ZasadySpecjalneEnum
     */
    private ?\app\modules\postal\sender\Type\ZasadySpecjalneEnum $zasadySpecjalne = null;

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
    private ?bool $ponadgabaryt = null;

    /**
     * @var null | int
     */
    private ?int $odleglosc = null;

    /**
     * @var null | string
     */
    private ?string $zawartosc = null;

    /**
     * @var null | bool
     */
    private ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;

    /**
     * @var null | bool
     */
    private ?bool $ostroznie = null;

    /**
     * @var null | \app\modules\postal\sender\Type\UiszczaOplateType
     */
    private ?\app\modules\postal\sender\Type\UiszczaOplateType $uiszczaOplate = null;

    /**
     * @var null | \app\modules\postal\sender\Type\TerminKurierskaType
     */
    private ?\app\modules\postal\sender\Type\TerminKurierskaType $termin = null;

    /**
     * @var null | \app\modules\postal\sender\Type\OpakowanieKurierskaType
     */
    private ?\app\modules\postal\sender\Type\OpakowanieKurierskaType $opakowanie = null;

    /**
     * @var null | string
     */
    private ?string $numerPrzesylkiKlienta = null;

    /**
     * @var null | string
     */
    private ?string $numerTransakcjiOdbioru = null;

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
     * @return null | \app\modules\postal\sender\Type\OdbiorPrzesylkiOdNadawcyType
     */
    public function getOdbiorPrzesylkiOdNadawcy() : ?\app\modules\postal\sender\Type\OdbiorPrzesylkiOdNadawcyType
    {
        return $this->odbiorPrzesylkiOdNadawcy;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     * @return static
     */
    public function withOdbiorPrzesylkiOdNadawcy(?\app\modules\postal\sender\Type\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy) : static
    {
        $new = clone $this;
        $new->odbiorPrzesylkiOdNadawcy = $odbiorPrzesylkiOdNadawcy;

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
     * @return array<int<0,max>, \app\modules\postal\sender\Type\SubUslugaKurierskaType>
     */
    public function getSubPrzesylka() : array
    {
        return $this->subPrzesylka;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\SubUslugaKurierskaType> $subPrzesylka
     * @return static
     */
    public function withSubPrzesylka(array $subPrzesylka) : static
    {
        $new = clone $this;
        $new->subPrzesylka = $subPrzesylka;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\PotwierdzenieOdbioruKurierskaType
     */
    public function getPotwierdzenieOdbioru() : ?\app\modules\postal\sender\Type\PotwierdzenieOdbioruKurierskaType
    {
        return $this->potwierdzenieOdbioru;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru
     * @return static
     */
    public function withPotwierdzenieOdbioru(?\app\modules\postal\sender\Type\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru) : static
    {
        $new = clone $this;
        $new->potwierdzenieOdbioru = $potwierdzenieOdbioru;

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
     * @return null | \app\modules\postal\sender\Type\ZwrotDokumentowKurierskaType
     */
    public function getZwrotDokumentow() : ?\app\modules\postal\sender\Type\ZwrotDokumentowKurierskaType
    {
        return $this->zwrotDokumentow;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ZwrotDokumentowKurierskaType $zwrotDokumentow
     * @return static
     */
    public function withZwrotDokumentow(?\app\modules\postal\sender\Type\ZwrotDokumentowKurierskaType $zwrotDokumentow) : static
    {
        $new = clone $this;
        $new->zwrotDokumentow = $zwrotDokumentow;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdDokumentyZwrotneAdresy() : ?int
    {
        return $this->idDokumentyZwrotneAdresy;
    }

    /**
     * @param null | int $idDokumentyZwrotneAdresy
     * @return static
     */
    public function withIdDokumentyZwrotneAdresy(?int $idDokumentyZwrotneAdresy) : static
    {
        $new = clone $this;
        $new->idDokumentyZwrotneAdresy = $idDokumentyZwrotneAdresy;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\DoreczenieUslugaKurierskaType
     */
    public function getDoreczenie() : ?\app\modules\postal\sender\Type\DoreczenieUslugaKurierskaType
    {
        return $this->doreczenie;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\DoreczenieUslugaKurierskaType $doreczenie
     * @return static
     */
    public function withDoreczenie(?\app\modules\postal\sender\Type\DoreczenieUslugaKurierskaType $doreczenie) : static
    {
        $new = clone $this;
        $new->doreczenie = $doreczenie;

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
     * @return null | \app\modules\postal\sender\Type\AdresType
     */
    public function getAdresDlaZwrotu() : ?\app\modules\postal\sender\Type\AdresType
    {
        return $this->adresDlaZwrotu;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\AdresType $adresDlaZwrotu
     * @return static
     */
    public function withAdresDlaZwrotu(?\app\modules\postal\sender\Type\AdresType $adresDlaZwrotu) : static
    {
        $new = clone $this;
        $new->adresDlaZwrotu = $adresDlaZwrotu;

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
     * @return null | \app\modules\postal\sender\Type\ZasadySpecjalneEnum
     */
    public function getZasadySpecjalne() : ?\app\modules\postal\sender\Type\ZasadySpecjalneEnum
    {
        return $this->zasadySpecjalne;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ZasadySpecjalneEnum $zasadySpecjalne
     * @return static
     */
    public function withZasadySpecjalne(?\app\modules\postal\sender\Type\ZasadySpecjalneEnum $zasadySpecjalne) : static
    {
        $new = clone $this;
        $new->zasadySpecjalne = $zasadySpecjalne;

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
     * @return null | int
     */
    public function getOdleglosc() : ?int
    {
        return $this->odleglosc;
    }

    /**
     * @param null | int $odleglosc
     * @return static
     */
    public function withOdleglosc(?int $odleglosc) : static
    {
        $new = clone $this;
        $new->odleglosc = $odleglosc;

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
     * @return null | bool
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce() : ?bool
    {
        return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * @param null | bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @return static
     */
    public function withSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce) : static
    {
        $new = clone $this;
        $new->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;

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
     * @return null | \app\modules\postal\sender\Type\UiszczaOplateType
     */
    public function getUiszczaOplate() : ?\app\modules\postal\sender\Type\UiszczaOplateType
    {
        return $this->uiszczaOplate;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\UiszczaOplateType $uiszczaOplate
     * @return static
     */
    public function withUiszczaOplate(?\app\modules\postal\sender\Type\UiszczaOplateType $uiszczaOplate) : static
    {
        $new = clone $this;
        $new->uiszczaOplate = $uiszczaOplate;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\TerminKurierskaType
     */
    public function getTermin() : ?\app\modules\postal\sender\Type\TerminKurierskaType
    {
        return $this->termin;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\TerminKurierskaType $termin
     * @return static
     */
    public function withTermin(?\app\modules\postal\sender\Type\TerminKurierskaType $termin) : static
    {
        $new = clone $this;
        $new->termin = $termin;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\OpakowanieKurierskaType
     */
    public function getOpakowanie() : ?\app\modules\postal\sender\Type\OpakowanieKurierskaType
    {
        return $this->opakowanie;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\OpakowanieKurierskaType $opakowanie
     * @return static
     */
    public function withOpakowanie(?\app\modules\postal\sender\Type\OpakowanieKurierskaType $opakowanie) : static
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
     * @return null | string
     */
    public function getNumerTransakcjiOdbioru() : ?string
    {
        return $this->numerTransakcjiOdbioru;
    }

    /**
     * @param null | string $numerTransakcjiOdbioru
     * @return static
     */
    public function withNumerTransakcjiOdbioru(?string $numerTransakcjiOdbioru) : static
    {
        $new = clone $this;
        $new->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;

        return $new;
    }
}

