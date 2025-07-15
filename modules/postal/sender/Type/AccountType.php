<?php

namespace app\modules\postal\sender\Type;

class AccountType
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\KartaType>
     */
    private array $karta;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\PermisionType>
     */
    private array $permision;

    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ProfilType>
     */
    private array $profil;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType>
     */
    private array $jednostka;

    /**
     * @var null | \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType
     */
    private ?\app\modules\postal\sender\Type\JednostkaOrganizacyjnaType $domyslnaJednostka = null;

    /**
     * @var null | \app\modules\postal\sender\Type\ProfilType
     */
    private ?\app\modules\postal\sender\Type\ProfilType $domyslnyProfil = null;

    /**
     * @var array<int<0,max>, string>
     */
    private array $dostepPoAdresieIP;

    /**
     * @var null | int
     */
    private ?int $idDomyslnyProfilDokZwrKlient = null;

    /**
     * @var null | int
     */
    private ?int $idDomyslnyProfilDokZwrUzytk = null;

    /**
     * @var array<int<0,1>, \app\modules\postal\sender\Type\RodzajPrzypisaniaDoJednostkiEnum>
     */
    private array $rodzajPrzypisania;

    /**
     * @var null | string
     */
    private ?string $userName = null;

    /**
     * @var null | string
     */
    private ?string $firstName = null;

    /**
     * @var null | string
     */
    private ?string $lastName = null;

    /**
     * @var null | string
     */
    private ?string $email = null;

    /**
     * @var null | \app\modules\postal\sender\Type\StatusAccountType
     */
    private ?\app\modules\postal\sender\Type\StatusAccountType $status = null;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\KartaType>
     */
    public function getKarta() : array
    {
        return $this->karta;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\KartaType> $karta
     * @return static
     */
    public function withKarta(array $karta) : static
    {
        $new = clone $this;
        $new->karta = $karta;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\PermisionType>
     */
    public function getPermision() : array
    {
        return $this->permision;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\PermisionType> $permision
     * @return static
     */
    public function withPermision(array $permision) : static
    {
        $new = clone $this;
        $new->permision = $permision;

        return $new;
    }

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ProfilType>
     */
    public function getProfil() : array
    {
        return $this->profil;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ProfilType> $profil
     * @return static
     */
    public function withProfil(array $profil) : static
    {
        $new = clone $this;
        $new->profil = $profil;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType>
     */
    public function getJednostka() : array
    {
        return $this->jednostka;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType> $jednostka
     * @return static
     */
    public function withJednostka(array $jednostka) : static
    {
        $new = clone $this;
        $new->jednostka = $jednostka;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType
     */
    public function getDomyslnaJednostka() : ?\app\modules\postal\sender\Type\JednostkaOrganizacyjnaType
    {
        return $this->domyslnaJednostka;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType $domyslnaJednostka
     * @return static
     */
    public function withDomyslnaJednostka(?\app\modules\postal\sender\Type\JednostkaOrganizacyjnaType $domyslnaJednostka) : static
    {
        $new = clone $this;
        $new->domyslnaJednostka = $domyslnaJednostka;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\ProfilType
     */
    public function getDomyslnyProfil() : ?\app\modules\postal\sender\Type\ProfilType
    {
        return $this->domyslnyProfil;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ProfilType $domyslnyProfil
     * @return static
     */
    public function withDomyslnyProfil(?\app\modules\postal\sender\Type\ProfilType $domyslnyProfil) : static
    {
        $new = clone $this;
        $new->domyslnyProfil = $domyslnyProfil;

        return $new;
    }

    /**
     * @return array<int<0,max>, string>
     */
    public function getDostepPoAdresieIP() : array
    {
        return $this->dostepPoAdresieIP;
    }

    /**
     * @param array<int<0,max>, string> $dostepPoAdresieIP
     * @return static
     */
    public function withDostepPoAdresieIP(array $dostepPoAdresieIP) : static
    {
        $new = clone $this;
        $new->dostepPoAdresieIP = $dostepPoAdresieIP;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdDomyslnyProfilDokZwrKlient() : ?int
    {
        return $this->idDomyslnyProfilDokZwrKlient;
    }

    /**
     * @param null | int $idDomyslnyProfilDokZwrKlient
     * @return static
     */
    public function withIdDomyslnyProfilDokZwrKlient(?int $idDomyslnyProfilDokZwrKlient) : static
    {
        $new = clone $this;
        $new->idDomyslnyProfilDokZwrKlient = $idDomyslnyProfilDokZwrKlient;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdDomyslnyProfilDokZwrUzytk() : ?int
    {
        return $this->idDomyslnyProfilDokZwrUzytk;
    }

    /**
     * @param null | int $idDomyslnyProfilDokZwrUzytk
     * @return static
     */
    public function withIdDomyslnyProfilDokZwrUzytk(?int $idDomyslnyProfilDokZwrUzytk) : static
    {
        $new = clone $this;
        $new->idDomyslnyProfilDokZwrUzytk = $idDomyslnyProfilDokZwrUzytk;

        return $new;
    }

    /**
     * @return array<int<0,1>, \app\modules\postal\sender\Type\RodzajPrzypisaniaDoJednostkiEnum>
     */
    public function getRodzajPrzypisania() : array
    {
        return $this->rodzajPrzypisania;
    }

    /**
     * @param array<int<0,1>, \app\modules\postal\sender\Type\RodzajPrzypisaniaDoJednostkiEnum> $rodzajPrzypisania
     * @return static
     */
    public function withRodzajPrzypisania(array $rodzajPrzypisania) : static
    {
        $new = clone $this;
        $new->rodzajPrzypisania = $rodzajPrzypisania;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUserName() : ?string
    {
        return $this->userName;
    }

    /**
     * @param null | string $userName
     * @return static
     */
    public function withUserName(?string $userName) : static
    {
        $new = clone $this;
        $new->userName = $userName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }

    /**
     * @param null | string $firstName
     * @return static
     */
    public function withFirstName(?string $firstName) : static
    {
        $new = clone $this;
        $new->firstName = $firstName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }

    /**
     * @param null | string $lastName
     * @return static
     */
    public function withLastName(?string $lastName) : static
    {
        $new = clone $this;
        $new->lastName = $lastName;

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
     * @return null | \app\modules\postal\sender\Type\StatusAccountType
     */
    public function getStatus() : ?\app\modules\postal\sender\Type\StatusAccountType
    {
        return $this->status;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\StatusAccountType $status
     * @return static
     */
    public function withStatus(?\app\modules\postal\sender\Type\StatusAccountType $status) : static
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }
}

