<?php

namespace app\modules\postal\sender\Type;

class AdresKorespondencyjny extends AdresType
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
     * Identyfikator adresu korespondencyjnego
     *
     * @var null | int
     */
    private ?int $id = null;

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
    public function getId() : ?int
    {
        return $this->id;
    }

    /**
     * @param null | int $id
     * @return static
     */
    public function withId(?int $id) : static
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }
}

