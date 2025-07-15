<?php

namespace app\modules\postal\sender\Type;

class ShopEZwrotyType
{
    /**
     * @var non-empty-array<int<0,1>, \app\modules\postal\sender\Type\EZwrotPrzesylkiType>
     */
    private array $eZwrotPrzesylki;

    /**
     * @var null | \app\modules\postal\sender\Type\EZwrotKartaType
     */
    private ?\app\modules\postal\sender\Type\EZwrotKartaType $eZwrotKarta = null;

    /**
     * @var null | int
     */
    private ?int $idShop = null;

    /**
     * @var string
     */
    private string $nazwa;

    /**
     * @var null | string
     */
    private ?string $nazwa2 = null;

    /**
     * @var string
     */
    private string $przyjaznaNazwa;

    /**
     * @var string
     */
    private string $ulica;

    /**
     * @var string
     */
    private string $numerDomu;

    /**
     * @var null | string
     */
    private ?string $numerLokalu = null;

    /**
     * @var string
     */
    private string $miejscowosc;

    /**
     * @var string
     */
    private string $kodPocztowy;

    /**
     * @var string
     */
    private string $mobile;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var null | string
     */
    private ?string $nip = null;

    /**
     * @var null | string
     */
    private ?string $regon = null;

    /**
     * @var null | string
     */
    private ?string $krs = null;

    /**
     * @var null | \app\modules\postal\sender\Type\EZwrotTypZgodyType
     */
    private ?\app\modules\postal\sender\Type\EZwrotTypZgodyType $eZwrotTyp = null;

    /**
     * @var null | \app\modules\postal\sender\Type\WymagalnoscNumeruIdentyfikujacegoPrzesylkeEnum
     */
    private ?\app\modules\postal\sender\Type\WymagalnoscNumeruIdentyfikujacegoPrzesylkeEnum $wymagalnoscNumeruIdentyfikujacegoPrzesylke = null;

    /**
     * @var null | bool
     */
    private ?bool $availableOnWebsite = null;

    /**
     * @var null | string
     */
    private ?string $emailForEZwrot = null;

    /**
     * @var null | bool
     */
    private ?bool $paid = null;

    /**
     * @var null | int
     */
    private ?int $consentValidFor = null;

    /**
     * @var null | int
     */
    private ?int $contractorCost = null;

    /**
     * @var null | string
     */
    private ?string $infoForClient = null;

    /**
     * @return non-empty-array<int<0,1>, \app\modules\postal\sender\Type\EZwrotPrzesylkiType>
     */
    public function getEZwrotPrzesylki() : array
    {
        return $this->eZwrotPrzesylki;
    }

    /**
     * @param non-empty-array<int<0,1>, \app\modules\postal\sender\Type\EZwrotPrzesylkiType> $eZwrotPrzesylki
     * @return static
     */
    public function withEZwrotPrzesylki(array $eZwrotPrzesylki) : static
    {
        $new = clone $this;
        $new->eZwrotPrzesylki = $eZwrotPrzesylki;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\EZwrotKartaType
     */
    public function getEZwrotKarta() : ?\app\modules\postal\sender\Type\EZwrotKartaType
    {
        return $this->eZwrotKarta;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\EZwrotKartaType $eZwrotKarta
     * @return static
     */
    public function withEZwrotKarta(?\app\modules\postal\sender\Type\EZwrotKartaType $eZwrotKarta) : static
    {
        $new = clone $this;
        $new->eZwrotKarta = $eZwrotKarta;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdShop() : ?int
    {
        return $this->idShop;
    }

    /**
     * @param null | int $idShop
     * @return static
     */
    public function withIdShop(?int $idShop) : static
    {
        $new = clone $this;
        $new->idShop = $idShop;

        return $new;
    }

    /**
     * @return string
     */
    public function getNazwa() : string
    {
        return $this->nazwa;
    }

    /**
     * @param string $nazwa
     * @return static
     */
    public function withNazwa(string $nazwa) : static
    {
        $new = clone $this;
        $new->nazwa = $nazwa;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNazwa2() : ?string
    {
        return $this->nazwa2;
    }

    /**
     * @param null | string $nazwa2
     * @return static
     */
    public function withNazwa2(?string $nazwa2) : static
    {
        $new = clone $this;
        $new->nazwa2 = $nazwa2;

        return $new;
    }

    /**
     * @return string
     */
    public function getPrzyjaznaNazwa() : string
    {
        return $this->przyjaznaNazwa;
    }

    /**
     * @param string $przyjaznaNazwa
     * @return static
     */
    public function withPrzyjaznaNazwa(string $przyjaznaNazwa) : static
    {
        $new = clone $this;
        $new->przyjaznaNazwa = $przyjaznaNazwa;

        return $new;
    }

    /**
     * @return string
     */
    public function getUlica() : string
    {
        return $this->ulica;
    }

    /**
     * @param string $ulica
     * @return static
     */
    public function withUlica(string $ulica) : static
    {
        $new = clone $this;
        $new->ulica = $ulica;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumerDomu() : string
    {
        return $this->numerDomu;
    }

    /**
     * @param string $numerDomu
     * @return static
     */
    public function withNumerDomu(string $numerDomu) : static
    {
        $new = clone $this;
        $new->numerDomu = $numerDomu;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerLokalu() : ?string
    {
        return $this->numerLokalu;
    }

    /**
     * @param null | string $numerLokalu
     * @return static
     */
    public function withNumerLokalu(?string $numerLokalu) : static
    {
        $new = clone $this;
        $new->numerLokalu = $numerLokalu;

        return $new;
    }

    /**
     * @return string
     */
    public function getMiejscowosc() : string
    {
        return $this->miejscowosc;
    }

    /**
     * @param string $miejscowosc
     * @return static
     */
    public function withMiejscowosc(string $miejscowosc) : static
    {
        $new = clone $this;
        $new->miejscowosc = $miejscowosc;

        return $new;
    }

    /**
     * @return string
     */
    public function getKodPocztowy() : string
    {
        return $this->kodPocztowy;
    }

    /**
     * @param string $kodPocztowy
     * @return static
     */
    public function withKodPocztowy(string $kodPocztowy) : static
    {
        $new = clone $this;
        $new->kodPocztowy = $kodPocztowy;

        return $new;
    }

    /**
     * @return string
     */
    public function getMobile() : string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     * @return static
     */
    public function withMobile(string $mobile) : static
    {
        $new = clone $this;
        $new->mobile = $mobile;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return static
     */
    public function withEmail(string $email) : static
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNip() : ?string
    {
        return $this->nip;
    }

    /**
     * @param null | string $nip
     * @return static
     */
    public function withNip(?string $nip) : static
    {
        $new = clone $this;
        $new->nip = $nip;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRegon() : ?string
    {
        return $this->regon;
    }

    /**
     * @param null | string $regon
     * @return static
     */
    public function withRegon(?string $regon) : static
    {
        $new = clone $this;
        $new->regon = $regon;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getKrs() : ?string
    {
        return $this->krs;
    }

    /**
     * @param null | string $krs
     * @return static
     */
    public function withKrs(?string $krs) : static
    {
        $new = clone $this;
        $new->krs = $krs;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\EZwrotTypZgodyType
     */
    public function getEZwrotTyp() : ?\app\modules\postal\sender\Type\EZwrotTypZgodyType
    {
        return $this->eZwrotTyp;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\EZwrotTypZgodyType $eZwrotTyp
     * @return static
     */
    public function withEZwrotTyp(?\app\modules\postal\sender\Type\EZwrotTypZgodyType $eZwrotTyp) : static
    {
        $new = clone $this;
        $new->eZwrotTyp = $eZwrotTyp;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\WymagalnoscNumeruIdentyfikujacegoPrzesylkeEnum
     */
    public function getWymagalnoscNumeruIdentyfikujacegoPrzesylke() : ?\app\modules\postal\sender\Type\WymagalnoscNumeruIdentyfikujacegoPrzesylkeEnum
    {
        return $this->wymagalnoscNumeruIdentyfikujacegoPrzesylke;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\WymagalnoscNumeruIdentyfikujacegoPrzesylkeEnum $wymagalnoscNumeruIdentyfikujacegoPrzesylke
     * @return static
     */
    public function withWymagalnoscNumeruIdentyfikujacegoPrzesylke(?\app\modules\postal\sender\Type\WymagalnoscNumeruIdentyfikujacegoPrzesylkeEnum $wymagalnoscNumeruIdentyfikujacegoPrzesylke) : static
    {
        $new = clone $this;
        $new->wymagalnoscNumeruIdentyfikujacegoPrzesylke = $wymagalnoscNumeruIdentyfikujacegoPrzesylke;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getAvailableOnWebsite() : ?bool
    {
        return $this->availableOnWebsite;
    }

    /**
     * @param null | bool $availableOnWebsite
     * @return static
     */
    public function withAvailableOnWebsite(?bool $availableOnWebsite) : static
    {
        $new = clone $this;
        $new->availableOnWebsite = $availableOnWebsite;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEmailForEZwrot() : ?string
    {
        return $this->emailForEZwrot;
    }

    /**
     * @param null | string $emailForEZwrot
     * @return static
     */
    public function withEmailForEZwrot(?string $emailForEZwrot) : static
    {
        $new = clone $this;
        $new->emailForEZwrot = $emailForEZwrot;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPaid() : ?bool
    {
        return $this->paid;
    }

    /**
     * @param null | bool $paid
     * @return static
     */
    public function withPaid(?bool $paid) : static
    {
        $new = clone $this;
        $new->paid = $paid;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getConsentValidFor() : ?int
    {
        return $this->consentValidFor;
    }

    /**
     * @param null | int $consentValidFor
     * @return static
     */
    public function withConsentValidFor(?int $consentValidFor) : static
    {
        $new = clone $this;
        $new->consentValidFor = $consentValidFor;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getContractorCost() : ?int
    {
        return $this->contractorCost;
    }

    /**
     * @param null | int $contractorCost
     * @return static
     */
    public function withContractorCost(?int $contractorCost) : static
    {
        $new = clone $this;
        $new->contractorCost = $contractorCost;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getInfoForClient() : ?string
    {
        return $this->infoForClient;
    }

    /**
     * @param null | string $infoForClient
     * @return static
     */
    public function withInfoForClient(?string $infoForClient) : static
    {
        $new = clone $this;
        $new->infoForClient = $infoForClient;

        return $new;
    }
}

