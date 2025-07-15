<?php

namespace app\modules\postal\sender\Type;

class ProfilType extends AdresType
{
    /**
     * @var null | string
     */
    private ?string $nazwa = null;

    /**
     * @var null | string
     */
    private ?string $nazwa2 = null;

    /**
     * @var null | string
     */
    private ?string $ulica = null;

    /**
     * @var null | string
     */
    private ?string $numerDomu = null;

    /**
     * @var null | string
     */
    private ?string $numerLokalu = null;

    /**
     * @var null | string
     */
    private ?string $miejscowosc = null;

    /**
     * @var null | string
     */
    private ?string $kodPocztowy = null;

    /**
     * @var null | string
     */
    private ?string $kraj = null;

    /**
     * @var null | string
     */
    private ?string $telefon = null;

    /**
     * @var null | string
     */
    private ?string $email = null;

    /**
     * @var null | string
     */
    private ?string $mobile = null;

    /**
     * @var null | string
     */
    private ?string $osobaKontaktowa = null;

    /**
     * @var null | string
     */
    private ?string $nip = null;

    /**
     * @var null | int
     */
    private ?int $idProfil = null;

    /**
     * @var null | string
     */
    private ?string $nazwaSkrocona = null;

    /**
     * @var null | string
     */
    private ?string $fax = null;

    /**
     * @var null | string
     */
    private ?string $mpk = null;

    /**
     * @return null | string
     */
    public function getNazwa() : ?string
    {
        return $this->nazwa;
    }

    /**
     * @param null | string $nazwa
     * @return static
     */
    public function withNazwa(?string $nazwa) : static
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
     * @return null | string
     */
    public function getUlica() : ?string
    {
        return $this->ulica;
    }

    /**
     * @param null | string $ulica
     * @return static
     */
    public function withUlica(?string $ulica) : static
    {
        $new = clone $this;
        $new->ulica = $ulica;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerDomu() : ?string
    {
        return $this->numerDomu;
    }

    /**
     * @param null | string $numerDomu
     * @return static
     */
    public function withNumerDomu(?string $numerDomu) : static
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
     * @return null | string
     */
    public function getMiejscowosc() : ?string
    {
        return $this->miejscowosc;
    }

    /**
     * @param null | string $miejscowosc
     * @return static
     */
    public function withMiejscowosc(?string $miejscowosc) : static
    {
        $new = clone $this;
        $new->miejscowosc = $miejscowosc;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getKodPocztowy() : ?string
    {
        return $this->kodPocztowy;
    }

    /**
     * @param null | string $kodPocztowy
     * @return static
     */
    public function withKodPocztowy(?string $kodPocztowy) : static
    {
        $new = clone $this;
        $new->kodPocztowy = $kodPocztowy;

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

    /**
     * @return null | string
     */
    public function getTelefon() : ?string
    {
        return $this->telefon;
    }

    /**
     * @param null | string $telefon
     * @return static
     */
    public function withTelefon(?string $telefon) : static
    {
        $new = clone $this;
        $new->telefon = $telefon;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }

    /**
     * @param null | string $email
     * @return static
     */
    public function withEmail(?string $email) : static
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMobile() : ?string
    {
        return $this->mobile;
    }

    /**
     * @param null | string $mobile
     * @return static
     */
    public function withMobile(?string $mobile) : static
    {
        $new = clone $this;
        $new->mobile = $mobile;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOsobaKontaktowa() : ?string
    {
        return $this->osobaKontaktowa;
    }

    /**
     * @param null | string $osobaKontaktowa
     * @return static
     */
    public function withOsobaKontaktowa(?string $osobaKontaktowa) : static
    {
        $new = clone $this;
        $new->osobaKontaktowa = $osobaKontaktowa;

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
     * @return null | int
     */
    public function getIdProfil() : ?int
    {
        return $this->idProfil;
    }

    /**
     * @param null | int $idProfil
     * @return static
     */
    public function withIdProfil(?int $idProfil) : static
    {
        $new = clone $this;
        $new->idProfil = $idProfil;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNazwaSkrocona() : ?string
    {
        return $this->nazwaSkrocona;
    }

    /**
     * @param null | string $nazwaSkrocona
     * @return static
     */
    public function withNazwaSkrocona(?string $nazwaSkrocona) : static
    {
        $new = clone $this;
        $new->nazwaSkrocona = $nazwaSkrocona;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFax() : ?string
    {
        return $this->fax;
    }

    /**
     * @param null | string $fax
     * @return static
     */
    public function withFax(?string $fax) : static
    {
        $new = clone $this;
        $new->fax = $fax;

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
}

