<?php

namespace app\modules\postal\sender\Type;

class PrzesylkaPaletowaType extends PrzesylkaRejestrowanaType
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
     * @var null | \app\modules\postal\sender\Type\AdresType
     */
    private ?\app\modules\postal\sender\Type\AdresType $miejsceOdbioru = null;

    /**
     * @var null | \app\modules\postal\sender\Type\AdresType
     */
    private ?\app\modules\postal\sender\Type\AdresType $miejsceDoreczenia = null;

    /**
     * @var \app\modules\postal\sender\Type\PaletaType
     */
    private \app\modules\postal\sender\Type\PaletaType $paleta;

    /**
     * @var null | \app\modules\postal\sender\Type\PlatnikType
     */
    private ?\app\modules\postal\sender\Type\PlatnikType $platnik = null;

    /**
     * @var null | \app\modules\postal\sender\Type\PobranieType
     */
    private ?\app\modules\postal\sender\Type\PobranieType $pobranie = null;

    /**
     * @var array<int<0,31>, \app\modules\postal\sender\Type\SubPrzesylkaPaletowaType>
     */
    private array $subPaleta;

    /**
     * @var array<int<0,9>, \app\modules\postal\sender\Type\DaneSentType>
     */
    private array $daneSent;

    /**
     * @var null | \app\modules\postal\sender\Type\AwizacjaType
     */
    private ?\app\modules\postal\sender\Type\AwizacjaType $awizacja = null;

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
     * @var null | string
     */
    private ?string $zawartosc = null;

    /**
     * @var null | int
     */
    private ?int $masa = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dataZaladunku = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dataDostawy = null;

    /**
     * @var null | int
     */
    private ?int $wartosc = null;

    /**
     * @var null | int
     */
    private ?int $iloscZwracanychPaletEUR = null;

    /**
     * @var null | string
     */
    private ?string $zalaczonaFV = null;

    /**
     * @var null | string
     */
    private ?string $zalaczonyWZ = null;

    /**
     * @var null | string
     */
    private ?string $zalaczoneInne = null;

    /**
     * @var null | string
     */
    private ?string $zwracanaFV = null;

    /**
     * @var null | string
     */
    private ?string $zwracanyWZ = null;

    /**
     * @var null | string
     */
    private ?string $zwracaneInne = null;

    /**
     * @var null | string
     */
    private ?string $powiadomienieNadawcy = null;

    /**
     * @var null | \app\modules\postal\sender\Type\ESposobPowiadomieniaType
     */
    private ?\app\modules\postal\sender\Type\ESposobPowiadomieniaType $powiadomienieOdbiorcy = null;

    /**
     * @var null | bool
     */
    private ?bool $dostawaWSobote = null;

    /**
     * @var null | bool
     */
    private ?bool $przygotowanieDokumentowPrzewozowych = null;

    /**
     * @var null | bool
     */
    private ?bool $dostawaSamochodemDedykowanym = null;

    /**
     * @var null | bool
     */
    private ?bool $zmianaDanychAdresowych = null;

    /**
     * @var null | bool
     */
    private ?bool $ustalenieTerminuDostawy = null;

    /**
     * @var null | bool
     */
    private ?bool $samochodZWinda = null;

    /**
     * @var null | bool
     */
    private ?bool $zabranieOpakowania = null;

    /**
     * @var null | bool
     */
    private ?bool $wniesienie = null;

    /**
     * @var null | bool
     */
    private ?bool $awizoSMS = null;

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
     * @return null | \app\modules\postal\sender\Type\AdresType
     */
    public function getMiejsceOdbioru() : ?\app\modules\postal\sender\Type\AdresType
    {
        return $this->miejsceOdbioru;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\AdresType $miejsceOdbioru
     * @return static
     */
    public function withMiejsceOdbioru(?\app\modules\postal\sender\Type\AdresType $miejsceOdbioru) : static
    {
        $new = clone $this;
        $new->miejsceOdbioru = $miejsceOdbioru;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\AdresType
     */
    public function getMiejsceDoreczenia() : ?\app\modules\postal\sender\Type\AdresType
    {
        return $this->miejsceDoreczenia;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\AdresType $miejsceDoreczenia
     * @return static
     */
    public function withMiejsceDoreczenia(?\app\modules\postal\sender\Type\AdresType $miejsceDoreczenia) : static
    {
        $new = clone $this;
        $new->miejsceDoreczenia = $miejsceDoreczenia;

        return $new;
    }

    /**
     * @return \app\modules\postal\sender\Type\PaletaType
     */
    public function getPaleta() : \app\modules\postal\sender\Type\PaletaType
    {
        return $this->paleta;
    }

    /**
     * @param \app\modules\postal\sender\Type\PaletaType $paleta
     * @return static
     */
    public function withPaleta(\app\modules\postal\sender\Type\PaletaType $paleta) : static
    {
        $new = clone $this;
        $new->paleta = $paleta;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\PlatnikType
     */
    public function getPlatnik() : ?\app\modules\postal\sender\Type\PlatnikType
    {
        return $this->platnik;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PlatnikType $platnik
     * @return static
     */
    public function withPlatnik(?\app\modules\postal\sender\Type\PlatnikType $platnik) : static
    {
        $new = clone $this;
        $new->platnik = $platnik;

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
     * @return array<int<0,31>, \app\modules\postal\sender\Type\SubPrzesylkaPaletowaType>
     */
    public function getSubPaleta() : array
    {
        return $this->subPaleta;
    }

    /**
     * @param array<int<0,31>, \app\modules\postal\sender\Type\SubPrzesylkaPaletowaType> $subPaleta
     * @return static
     */
    public function withSubPaleta(array $subPaleta) : static
    {
        $new = clone $this;
        $new->subPaleta = $subPaleta;

        return $new;
    }

    /**
     * @return array<int<0,9>, \app\modules\postal\sender\Type\DaneSentType>
     */
    public function getDaneSent() : array
    {
        return $this->daneSent;
    }

    /**
     * @param array<int<0,9>, \app\modules\postal\sender\Type\DaneSentType> $daneSent
     * @return static
     */
    public function withDaneSent(array $daneSent) : static
    {
        $new = clone $this;
        $new->daneSent = $daneSent;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\AwizacjaType
     */
    public function getAwizacja() : ?\app\modules\postal\sender\Type\AwizacjaType
    {
        return $this->awizacja;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\AwizacjaType $awizacja
     * @return static
     */
    public function withAwizacja(?\app\modules\postal\sender\Type\AwizacjaType $awizacja) : static
    {
        $new = clone $this;
        $new->awizacja = $awizacja;

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
     * @return null | \DateTimeInterface
     */
    public function getDataZaladunku() : ?\DateTimeInterface
    {
        return $this->dataZaladunku;
    }

    /**
     * @param null | \DateTimeInterface $dataZaladunku
     * @return static
     */
    public function withDataZaladunku(?\DateTimeInterface $dataZaladunku) : static
    {
        $new = clone $this;
        $new->dataZaladunku = $dataZaladunku;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDataDostawy() : ?\DateTimeInterface
    {
        return $this->dataDostawy;
    }

    /**
     * @param null | \DateTimeInterface $dataDostawy
     * @return static
     */
    public function withDataDostawy(?\DateTimeInterface $dataDostawy) : static
    {
        $new = clone $this;
        $new->dataDostawy = $dataDostawy;

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
    public function getIloscZwracanychPaletEUR() : ?int
    {
        return $this->iloscZwracanychPaletEUR;
    }

    /**
     * @param null | int $iloscZwracanychPaletEUR
     * @return static
     */
    public function withIloscZwracanychPaletEUR(?int $iloscZwracanychPaletEUR) : static
    {
        $new = clone $this;
        $new->iloscZwracanychPaletEUR = $iloscZwracanychPaletEUR;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getZalaczonaFV() : ?string
    {
        return $this->zalaczonaFV;
    }

    /**
     * @param null | string $zalaczonaFV
     * @return static
     */
    public function withZalaczonaFV(?string $zalaczonaFV) : static
    {
        $new = clone $this;
        $new->zalaczonaFV = $zalaczonaFV;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getZalaczonyWZ() : ?string
    {
        return $this->zalaczonyWZ;
    }

    /**
     * @param null | string $zalaczonyWZ
     * @return static
     */
    public function withZalaczonyWZ(?string $zalaczonyWZ) : static
    {
        $new = clone $this;
        $new->zalaczonyWZ = $zalaczonyWZ;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getZalaczoneInne() : ?string
    {
        return $this->zalaczoneInne;
    }

    /**
     * @param null | string $zalaczoneInne
     * @return static
     */
    public function withZalaczoneInne(?string $zalaczoneInne) : static
    {
        $new = clone $this;
        $new->zalaczoneInne = $zalaczoneInne;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getZwracanaFV() : ?string
    {
        return $this->zwracanaFV;
    }

    /**
     * @param null | string $zwracanaFV
     * @return static
     */
    public function withZwracanaFV(?string $zwracanaFV) : static
    {
        $new = clone $this;
        $new->zwracanaFV = $zwracanaFV;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getZwracanyWZ() : ?string
    {
        return $this->zwracanyWZ;
    }

    /**
     * @param null | string $zwracanyWZ
     * @return static
     */
    public function withZwracanyWZ(?string $zwracanyWZ) : static
    {
        $new = clone $this;
        $new->zwracanyWZ = $zwracanyWZ;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getZwracaneInne() : ?string
    {
        return $this->zwracaneInne;
    }

    /**
     * @param null | string $zwracaneInne
     * @return static
     */
    public function withZwracaneInne(?string $zwracaneInne) : static
    {
        $new = clone $this;
        $new->zwracaneInne = $zwracaneInne;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPowiadomienieNadawcy() : ?string
    {
        return $this->powiadomienieNadawcy;
    }

    /**
     * @param null | string $powiadomienieNadawcy
     * @return static
     */
    public function withPowiadomienieNadawcy(?string $powiadomienieNadawcy) : static
    {
        $new = clone $this;
        $new->powiadomienieNadawcy = $powiadomienieNadawcy;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\ESposobPowiadomieniaType
     */
    public function getPowiadomienieOdbiorcy() : ?\app\modules\postal\sender\Type\ESposobPowiadomieniaType
    {
        return $this->powiadomienieOdbiorcy;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ESposobPowiadomieniaType $powiadomienieOdbiorcy
     * @return static
     */
    public function withPowiadomienieOdbiorcy(?\app\modules\postal\sender\Type\ESposobPowiadomieniaType $powiadomienieOdbiorcy) : static
    {
        $new = clone $this;
        $new->powiadomienieOdbiorcy = $powiadomienieOdbiorcy;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getDostawaWSobote() : ?bool
    {
        return $this->dostawaWSobote;
    }

    /**
     * @param null | bool $dostawaWSobote
     * @return static
     */
    public function withDostawaWSobote(?bool $dostawaWSobote) : static
    {
        $new = clone $this;
        $new->dostawaWSobote = $dostawaWSobote;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPrzygotowanieDokumentowPrzewozowych() : ?bool
    {
        return $this->przygotowanieDokumentowPrzewozowych;
    }

    /**
     * @param null | bool $przygotowanieDokumentowPrzewozowych
     * @return static
     */
    public function withPrzygotowanieDokumentowPrzewozowych(?bool $przygotowanieDokumentowPrzewozowych) : static
    {
        $new = clone $this;
        $new->przygotowanieDokumentowPrzewozowych = $przygotowanieDokumentowPrzewozowych;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getDostawaSamochodemDedykowanym() : ?bool
    {
        return $this->dostawaSamochodemDedykowanym;
    }

    /**
     * @param null | bool $dostawaSamochodemDedykowanym
     * @return static
     */
    public function withDostawaSamochodemDedykowanym(?bool $dostawaSamochodemDedykowanym) : static
    {
        $new = clone $this;
        $new->dostawaSamochodemDedykowanym = $dostawaSamochodemDedykowanym;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getZmianaDanychAdresowych() : ?bool
    {
        return $this->zmianaDanychAdresowych;
    }

    /**
     * @param null | bool $zmianaDanychAdresowych
     * @return static
     */
    public function withZmianaDanychAdresowych(?bool $zmianaDanychAdresowych) : static
    {
        $new = clone $this;
        $new->zmianaDanychAdresowych = $zmianaDanychAdresowych;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getUstalenieTerminuDostawy() : ?bool
    {
        return $this->ustalenieTerminuDostawy;
    }

    /**
     * @param null | bool $ustalenieTerminuDostawy
     * @return static
     */
    public function withUstalenieTerminuDostawy(?bool $ustalenieTerminuDostawy) : static
    {
        $new = clone $this;
        $new->ustalenieTerminuDostawy = $ustalenieTerminuDostawy;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getSamochodZWinda() : ?bool
    {
        return $this->samochodZWinda;
    }

    /**
     * @param null | bool $samochodZWinda
     * @return static
     */
    public function withSamochodZWinda(?bool $samochodZWinda) : static
    {
        $new = clone $this;
        $new->samochodZWinda = $samochodZWinda;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getZabranieOpakowania() : ?bool
    {
        return $this->zabranieOpakowania;
    }

    /**
     * @param null | bool $zabranieOpakowania
     * @return static
     */
    public function withZabranieOpakowania(?bool $zabranieOpakowania) : static
    {
        $new = clone $this;
        $new->zabranieOpakowania = $zabranieOpakowania;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getWniesienie() : ?bool
    {
        return $this->wniesienie;
    }

    /**
     * @param null | bool $wniesienie
     * @return static
     */
    public function withWniesienie(?bool $wniesienie) : static
    {
        $new = clone $this;
        $new->wniesienie = $wniesienie;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getAwizoSMS() : ?bool
    {
        return $this->awizoSMS;
    }

    /**
     * @param null | bool $awizoSMS
     * @return static
     */
    public function withAwizoSMS(?bool $awizoSMS) : static
    {
        $new = clone $this;
        $new->awizoSMS = $awizoSMS;

        return $new;
    }
}

