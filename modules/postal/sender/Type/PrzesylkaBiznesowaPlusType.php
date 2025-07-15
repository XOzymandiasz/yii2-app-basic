<?php

namespace app\modules\postal\sender\Type;

class PrzesylkaBiznesowaPlusType extends PrzesylkaRejestrowanaType
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
     * Wystarczy przesłac obiekt z ustawionym id
     *  reszta pól moż ezostać pominięta (aby zmniejszyć ilośc danych
     *  do tansmisji)
     *
     * @var null | \app\modules\postal\sender\Type\PlacowkaPocztowaType
     */
    private ?\app\modules\postal\sender\Type\PlacowkaPocztowaType $urzadWydaniaPrzesylki = null;

    /**
     * @var array<int<0,99>, \app\modules\postal\sender\Type\SubPrzesylkaBiznesowaPlusType>
     */
    private array $subPrzesylka;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dataDrugiejProbyDoreczenia = null;

    /**
     * @var null | int
     */
    private ?int $drugaProbaDoreczeniaPoLiczbieDni = null;

    /**
     * @var null | bool
     */
    private ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;

    /**
     * @var null | \app\modules\postal\sender\Type\PotwierdzenieOdbioruBiznesowaType
     */
    private ?\app\modules\postal\sender\Type\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru = null;

    /**
     * @var null | \app\modules\postal\sender\Type\DoreczenieBiznesowaType
     */
    private ?\app\modules\postal\sender\Type\DoreczenieBiznesowaType $doreczenie = null;

    /**
     * @var null | \app\modules\postal\sender\Type\ZwrotDokumentowBiznesowaType
     */
    private ?\app\modules\postal\sender\Type\ZwrotDokumentowBiznesowaType $zwrotDokumentow = null;

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
     * @var null | bool
     */
    private ?bool $posteRestante = null;

    /**
     * @var null | int
     */
    private ?int $masa = null;

    /**
     * @var null | \app\modules\postal\sender\Type\GabarytBiznesowaType
     */
    private ?\app\modules\postal\sender\Type\GabarytBiznesowaType $gabaryt = null;

    /**
     * @var null | int
     */
    private ?int $wartosc = null;

    /**
     * @var null | int
     */
    private ?int $kwotaTranzakcji = null;

    /**
     * @var null | bool
     */
    private ?bool $ostroznie = null;

    /**
     * @var null | \app\modules\postal\sender\Type\KategoriaType
     */
    private ?\app\modules\postal\sender\Type\KategoriaType $kategoria = null;

    /**
     * atrybut nieużywany, użyj potwierdzenieOdbioru
     *
     * @var null | int
     */
    private ?int $iloscPotwierdzenOdbioru = null;

    /**
     * @var null | string
     */
    private ?string $eKontaktAdresata = null;

    /**
     * @var null | \app\modules\postal\sender\Type\ESposobPowiadomieniaType
     */
    private ?\app\modules\postal\sender\Type\ESposobPowiadomieniaType $eSposobPowiadomieniaAdresata = null;

    /**
     * @var null | string
     */
    private ?string $numerPrzesylkiKlienta = null;

    /**
     * @var null | int
     */
    private ?int $iloscDniOczekiwaniaNaWydanie = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $oczekiwanyTerminDoreczenia = null;

    /**
     * @var null | \app\modules\postal\sender\Type\TerminRodzajPlusType
     */
    private ?\app\modules\postal\sender\Type\TerminRodzajPlusType $terminRodzajPlus = null;

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
     * @return null | \app\modules\postal\sender\Type\PlacowkaPocztowaType
     */
    public function getUrzadWydaniaPrzesylki() : ?\app\modules\postal\sender\Type\PlacowkaPocztowaType
    {
        return $this->urzadWydaniaPrzesylki;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PlacowkaPocztowaType $urzadWydaniaPrzesylki
     * @return static
     */
    public function withUrzadWydaniaPrzesylki(?\app\modules\postal\sender\Type\PlacowkaPocztowaType $urzadWydaniaPrzesylki) : static
    {
        $new = clone $this;
        $new->urzadWydaniaPrzesylki = $urzadWydaniaPrzesylki;

        return $new;
    }

    /**
     * @return array<int<0,99>, \app\modules\postal\sender\Type\SubPrzesylkaBiznesowaPlusType>
     */
    public function getSubPrzesylka() : array
    {
        return $this->subPrzesylka;
    }

    /**
     * @param array<int<0,99>, \app\modules\postal\sender\Type\SubPrzesylkaBiznesowaPlusType> $subPrzesylka
     * @return static
     */
    public function withSubPrzesylka(array $subPrzesylka) : static
    {
        $new = clone $this;
        $new->subPrzesylka = $subPrzesylka;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDataDrugiejProbyDoreczenia() : ?\DateTimeInterface
    {
        return $this->dataDrugiejProbyDoreczenia;
    }

    /**
     * @param null | \DateTimeInterface $dataDrugiejProbyDoreczenia
     * @return static
     */
    public function withDataDrugiejProbyDoreczenia(?\DateTimeInterface $dataDrugiejProbyDoreczenia) : static
    {
        $new = clone $this;
        $new->dataDrugiejProbyDoreczenia = $dataDrugiejProbyDoreczenia;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getDrugaProbaDoreczeniaPoLiczbieDni() : ?int
    {
        return $this->drugaProbaDoreczeniaPoLiczbieDni;
    }

    /**
     * @param null | int $drugaProbaDoreczeniaPoLiczbieDni
     * @return static
     */
    public function withDrugaProbaDoreczeniaPoLiczbieDni(?int $drugaProbaDoreczeniaPoLiczbieDni) : static
    {
        $new = clone $this;
        $new->drugaProbaDoreczeniaPoLiczbieDni = $drugaProbaDoreczeniaPoLiczbieDni;

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
     * @return null | \app\modules\postal\sender\Type\PotwierdzenieOdbioruBiznesowaType
     */
    public function getPotwierdzenieOdbioru() : ?\app\modules\postal\sender\Type\PotwierdzenieOdbioruBiznesowaType
    {
        return $this->potwierdzenieOdbioru;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru
     * @return static
     */
    public function withPotwierdzenieOdbioru(?\app\modules\postal\sender\Type\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru) : static
    {
        $new = clone $this;
        $new->potwierdzenieOdbioru = $potwierdzenieOdbioru;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\DoreczenieBiznesowaType
     */
    public function getDoreczenie() : ?\app\modules\postal\sender\Type\DoreczenieBiznesowaType
    {
        return $this->doreczenie;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\DoreczenieBiznesowaType $doreczenie
     * @return static
     */
    public function withDoreczenie(?\app\modules\postal\sender\Type\DoreczenieBiznesowaType $doreczenie) : static
    {
        $new = clone $this;
        $new->doreczenie = $doreczenie;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\ZwrotDokumentowBiznesowaType
     */
    public function getZwrotDokumentow() : ?\app\modules\postal\sender\Type\ZwrotDokumentowBiznesowaType
    {
        return $this->zwrotDokumentow;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ZwrotDokumentowBiznesowaType $zwrotDokumentow
     * @return static
     */
    public function withZwrotDokumentow(?\app\modules\postal\sender\Type\ZwrotDokumentowBiznesowaType $zwrotDokumentow) : static
    {
        $new = clone $this;
        $new->zwrotDokumentow = $zwrotDokumentow;

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
     * @return null | \app\modules\postal\sender\Type\GabarytBiznesowaType
     */
    public function getGabaryt() : ?\app\modules\postal\sender\Type\GabarytBiznesowaType
    {
        return $this->gabaryt;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\GabarytBiznesowaType $gabaryt
     * @return static
     */
    public function withGabaryt(?\app\modules\postal\sender\Type\GabarytBiznesowaType $gabaryt) : static
    {
        $new = clone $this;
        $new->gabaryt = $gabaryt;

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
    public function getKwotaTranzakcji() : ?int
    {
        return $this->kwotaTranzakcji;
    }

    /**
     * @param null | int $kwotaTranzakcji
     * @return static
     */
    public function withKwotaTranzakcji(?int $kwotaTranzakcji) : static
    {
        $new = clone $this;
        $new->kwotaTranzakcji = $kwotaTranzakcji;

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
    public function getIloscPotwierdzenOdbioru() : ?int
    {
        return $this->iloscPotwierdzenOdbioru;
    }

    /**
     * @param null | int $iloscPotwierdzenOdbioru
     * @return static
     */
    public function withIloscPotwierdzenOdbioru(?int $iloscPotwierdzenOdbioru) : static
    {
        $new = clone $this;
        $new->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEKontaktAdresata() : ?string
    {
        return $this->eKontaktAdresata;
    }

    /**
     * @param null | string $eKontaktAdresata
     * @return static
     */
    public function withEKontaktAdresata(?string $eKontaktAdresata) : static
    {
        $new = clone $this;
        $new->eKontaktAdresata = $eKontaktAdresata;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\ESposobPowiadomieniaType
     */
    public function getESposobPowiadomieniaAdresata() : ?\app\modules\postal\sender\Type\ESposobPowiadomieniaType
    {
        return $this->eSposobPowiadomieniaAdresata;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ESposobPowiadomieniaType $eSposobPowiadomieniaAdresata
     * @return static
     */
    public function withESposobPowiadomieniaAdresata(?\app\modules\postal\sender\Type\ESposobPowiadomieniaType $eSposobPowiadomieniaAdresata) : static
    {
        $new = clone $this;
        $new->eSposobPowiadomieniaAdresata = $eSposobPowiadomieniaAdresata;

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
    public function getIloscDniOczekiwaniaNaWydanie() : ?int
    {
        return $this->iloscDniOczekiwaniaNaWydanie;
    }

    /**
     * @param null | int $iloscDniOczekiwaniaNaWydanie
     * @return static
     */
    public function withIloscDniOczekiwaniaNaWydanie(?int $iloscDniOczekiwaniaNaWydanie) : static
    {
        $new = clone $this;
        $new->iloscDniOczekiwaniaNaWydanie = $iloscDniOczekiwaniaNaWydanie;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getOczekiwanyTerminDoreczenia() : ?\DateTimeInterface
    {
        return $this->oczekiwanyTerminDoreczenia;
    }

    /**
     * @param null | \DateTimeInterface $oczekiwanyTerminDoreczenia
     * @return static
     */
    public function withOczekiwanyTerminDoreczenia(?\DateTimeInterface $oczekiwanyTerminDoreczenia) : static
    {
        $new = clone $this;
        $new->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\TerminRodzajPlusType
     */
    public function getTerminRodzajPlus() : ?\app\modules\postal\sender\Type\TerminRodzajPlusType
    {
        return $this->terminRodzajPlus;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\TerminRodzajPlusType $terminRodzajPlus
     * @return static
     */
    public function withTerminRodzajPlus(?\app\modules\postal\sender\Type\TerminRodzajPlusType $terminRodzajPlus) : static
    {
        $new = clone $this;
        $new->terminRodzajPlus = $terminRodzajPlus;

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

