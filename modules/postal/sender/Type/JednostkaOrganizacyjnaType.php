<?php

namespace app\modules\postal\sender\Type;

class JednostkaOrganizacyjnaType
{
    /**
     * Wystarczy przesłać obiekt z ustawionym
     *  id reszta pól może zostać pominięta (aby
     *  zmniejszyć ilość danych do transmisji)
     *
     * @var array<int<0,max>, \app\modules\postal\sender\Type\AccountType>
     */
    private array $account;

    /**
     * Wystarczy przesłać obiekt z ustawionym
     *  id reszta pól może zostać pominięta (aby
     *  zmniejszyć ilość danych do transmisji)
     *
     * @var null | \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType
     */
    private ?\app\modules\postal\sender\Type\JednostkaOrganizacyjnaType $jednostkaNadrzedna = null;

    /**
     * @var array<int<0,1>, \app\modules\postal\sender\Type\RodzajPrzypisaniaDoJednostkiEnum>
     */
    private array $rodzajPrzypisania;

    /**
     * @var null | int
     */
    private ?int $id = null;

    /**
     * @var null | string
     */
    private ?string $nazwa = null;

    /**
     * @var null | string
     */
    private ?string $opis = null;

    /**
     * @var null | string
     */
    private ?string $mpk = null;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\AccountType>
     */
    public function getAccount() : array
    {
        return $this->account;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\AccountType> $account
     * @return static
     */
    public function withAccount(array $account) : static
    {
        $new = clone $this;
        $new->account = $account;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType
     */
    public function getJednostkaNadrzedna() : ?\app\modules\postal\sender\Type\JednostkaOrganizacyjnaType
    {
        return $this->jednostkaNadrzedna;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\JednostkaOrganizacyjnaType $jednostkaNadrzedna
     * @return static
     */
    public function withJednostkaNadrzedna(?\app\modules\postal\sender\Type\JednostkaOrganizacyjnaType $jednostkaNadrzedna) : static
    {
        $new = clone $this;
        $new->jednostkaNadrzedna = $jednostkaNadrzedna;

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

