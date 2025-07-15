<?php

namespace app\modules\postal\sender\Type;

abstract class Pocztex2021Type extends PrzesylkaRejestrowanaType
{
    /**
     * @var null | \app\modules\postal\sender\Type\PobranieType
     */
    private ?\app\modules\postal\sender\Type\PobranieType $pobranie = null;

    /**
     * @var null | \app\modules\postal\sender\Type\PotwierdzenieEDoreczeniaType
     */
    private ?\app\modules\postal\sender\Type\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia = null;

    /**
     * @var null | \app\modules\postal\sender\Type\PotwierdzenieOdbioruPocztex2021Type
     */
    private ?\app\modules\postal\sender\Type\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru = null;

    /**
     * @var null | \app\modules\postal\sender\Type\UbezpieczenieType
     */
    private ?\app\modules\postal\sender\Type\UbezpieczenieType $ubezpieczenie = null;

    /**
     * masa przesyłki podana w gramach
     *
     * @var null | int
     */
    private ?int $masa = null;

    /**
     * zadeklarowana wartość przesyłki w groszach
     *
     * @var null | int
     */
    private ?int $wartosc = null;

    /**
     * @var null | bool
     */
    private ?bool $ostroznie = null;

    /**
     * @var null | bool
     */
    private ?bool $ponadgabaryt = null;

    /**
     * Format przesyłki:
     *  S -
     *  M -
     *  L -
     *  XL -
     *  2XL -
     *
     * @var null | \app\modules\postal\sender\Type\FormatPocztex2021Type
     */
    private ?\app\modules\postal\sender\Type\FormatPocztex2021Type $format = null;

    /**
     * @var null | string
     */
    private ?string $numerPrzesylkiKlienta = null;

    /**
     * @var null | \app\modules\postal\sender\Type\ZwrotDokumentowPocztex2021Enum
     */
    private ?\app\modules\postal\sender\Type\ZwrotDokumentowPocztex2021Enum $zwrotDokumentow = null;

    /**
     * @var null | int
     */
    private ?int $idDokumentyZwrotneAdresy = null;

    /**
     * @var null | \app\modules\postal\sender\Type\EPOType
     */
    private ?\app\modules\postal\sender\Type\EPOType $epo = null;

    /**
     * @var null | \app\modules\postal\sender\Type\AdresType
     */
    private ?\app\modules\postal\sender\Type\AdresType $adresDlaZwrotu = null;

    /**
     * @var null | bool
     */
    private ?bool $odbiorWSobote = null;

    /**
     * @var null | \app\modules\postal\sender\Type\ZasadySpecjalneEnum
     */
    private ?\app\modules\postal\sender\Type\ZasadySpecjalneEnum $zasadySpecjalne = null;

    /**
     * @var null | \app\modules\postal\sender\Type\ZawartoscPocztex2021Type
     */
    private ?\app\modules\postal\sender\Type\ZawartoscPocztex2021Type $zawartosc = null;

    /**
     * @var null | bool
     */
    private ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;

    /**
     * @var null | \app\modules\postal\sender\Type\UiszczaOplateType
     */
    private ?\app\modules\postal\sender\Type\UiszczaOplateType $uiszczaOplate = null;

    /**
     * @var null | bool
     */
    private ?bool $doreczenieDoRakWlasnych = null;

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
     * @return null | \app\modules\postal\sender\Type\PotwierdzenieEDoreczeniaType
     */
    public function getPotwierdzenieDoreczenia() : ?\app\modules\postal\sender\Type\PotwierdzenieEDoreczeniaType
    {
        return $this->potwierdzenieDoreczenia;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia
     * @return static
     */
    public function withPotwierdzenieDoreczenia(?\app\modules\postal\sender\Type\PotwierdzenieEDoreczeniaType $potwierdzenieDoreczenia) : static
    {
        $new = clone $this;
        $new->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\PotwierdzenieOdbioruPocztex2021Type
     */
    public function getPotwierdzenieOdbioru() : ?\app\modules\postal\sender\Type\PotwierdzenieOdbioruPocztex2021Type
    {
        return $this->potwierdzenieOdbioru;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru
     * @return static
     */
    public function withPotwierdzenieOdbioru(?\app\modules\postal\sender\Type\PotwierdzenieOdbioruPocztex2021Type $potwierdzenieOdbioru) : static
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
     * @return null | \app\modules\postal\sender\Type\FormatPocztex2021Type
     */
    public function getFormat() : ?\app\modules\postal\sender\Type\FormatPocztex2021Type
    {
        return $this->format;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\FormatPocztex2021Type $format
     * @return static
     */
    public function withFormat(?\app\modules\postal\sender\Type\FormatPocztex2021Type $format) : static
    {
        $new = clone $this;
        $new->format = $format;

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
     * @return null | \app\modules\postal\sender\Type\ZwrotDokumentowPocztex2021Enum
     */
    public function getZwrotDokumentow() : ?\app\modules\postal\sender\Type\ZwrotDokumentowPocztex2021Enum
    {
        return $this->zwrotDokumentow;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ZwrotDokumentowPocztex2021Enum $zwrotDokumentow
     * @return static
     */
    public function withZwrotDokumentow(?\app\modules\postal\sender\Type\ZwrotDokumentowPocztex2021Enum $zwrotDokumentow) : static
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
     * @return null | bool
     */
    public function getOdbiorWSobote() : ?bool
    {
        return $this->odbiorWSobote;
    }

    /**
     * @param null | bool $odbiorWSobote
     * @return static
     */
    public function withOdbiorWSobote(?bool $odbiorWSobote) : static
    {
        $new = clone $this;
        $new->odbiorWSobote = $odbiorWSobote;

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
     * @return null | \app\modules\postal\sender\Type\ZawartoscPocztex2021Type
     */
    public function getZawartosc() : ?\app\modules\postal\sender\Type\ZawartoscPocztex2021Type
    {
        return $this->zawartosc;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ZawartoscPocztex2021Type $zawartosc
     * @return static
     */
    public function withZawartosc(?\app\modules\postal\sender\Type\ZawartoscPocztex2021Type $zawartosc) : static
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
     * @return null | bool
     */
    public function getDoreczenieDoRakWlasnych() : ?bool
    {
        return $this->doreczenieDoRakWlasnych;
    }

    /**
     * @param null | bool $doreczenieDoRakWlasnych
     * @return static
     */
    public function withDoreczenieDoRakWlasnych(?bool $doreczenieDoRakWlasnych) : static
    {
        $new = clone $this;
        $new->doreczenieDoRakWlasnych = $doreczenieDoRakWlasnych;

        return $new;
    }
}

