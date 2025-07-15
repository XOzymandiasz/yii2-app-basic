<?php

namespace app\modules\postal\sender\Type;

class OczekujeNaZgodeEZwrotType
{
    /**
     * @var null | \app\modules\postal\sender\Type\ShopEZwrotyType
     */
    private ?\app\modules\postal\sender\Type\ShopEZwrotyType $sklepEZwrot = null;

    /**
     * @var null | int
     */
    private ?int $idZgody = null;

    /**
     * @var null | string
     */
    private ?string $nazwaProduktu = null;

    /**
     * @var null | string
     */
    private ?string $numerZamowienia = null;

    /**
     * @var null | string
     */
    private ?string $numerNadania = null;

    /**
     * @var null | string
     */
    private ?string $email = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dataNadania = null;

    /**
     * @var null | string
     */
    private ?string $guidZgodaEZwrot = null;

    /**
     * @return null | \app\modules\postal\sender\Type\ShopEZwrotyType
     */
    public function getSklepEZwrot() : ?\app\modules\postal\sender\Type\ShopEZwrotyType
    {
        return $this->sklepEZwrot;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ShopEZwrotyType $sklepEZwrot
     * @return static
     */
    public function withSklepEZwrot(?\app\modules\postal\sender\Type\ShopEZwrotyType $sklepEZwrot) : static
    {
        $new = clone $this;
        $new->sklepEZwrot = $sklepEZwrot;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdZgody() : ?int
    {
        return $this->idZgody;
    }

    /**
     * @param null | int $idZgody
     * @return static
     */
    public function withIdZgody(?int $idZgody) : static
    {
        $new = clone $this;
        $new->idZgody = $idZgody;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNazwaProduktu() : ?string
    {
        return $this->nazwaProduktu;
    }

    /**
     * @param null | string $nazwaProduktu
     * @return static
     */
    public function withNazwaProduktu(?string $nazwaProduktu) : static
    {
        $new = clone $this;
        $new->nazwaProduktu = $nazwaProduktu;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerZamowienia() : ?string
    {
        return $this->numerZamowienia;
    }

    /**
     * @param null | string $numerZamowienia
     * @return static
     */
    public function withNumerZamowienia(?string $numerZamowienia) : static
    {
        $new = clone $this;
        $new->numerZamowienia = $numerZamowienia;

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
     * @return null | \DateTimeInterface
     */
    public function getDataNadania() : ?\DateTimeInterface
    {
        return $this->dataNadania;
    }

    /**
     * @param null | \DateTimeInterface $dataNadania
     * @return static
     */
    public function withDataNadania(?\DateTimeInterface $dataNadania) : static
    {
        $new = clone $this;
        $new->dataNadania = $dataNadania;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGuidZgodaEZwrot() : ?string
    {
        return $this->guidZgodaEZwrot;
    }

    /**
     * @param null | string $guidZgodaEZwrot
     * @return static
     */
    public function withGuidZgodaEZwrot(?string $guidZgodaEZwrot) : static
    {
        $new = clone $this;
        $new->guidZgodaEZwrot = $guidZgodaEZwrot;

        return $new;
    }
}

