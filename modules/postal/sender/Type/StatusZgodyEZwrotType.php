<?php

namespace app\modules\postal\sender\Type;

class StatusZgodyEZwrotType
{
    /**
     * @var non-empty-array<int<0,1>, \app\modules\postal\sender\Type\EZwrotPrzesylkiType>
     */
    private array $eZwrotPrzesylki;

    /**
     * @var null | string
     */
    private ?string $guidZgodaEZwrot = null;

    /**
     * @var null | \app\modules\postal\sender\Type\StatusZgodyEZwrotNameType
     */
    private ?\app\modules\postal\sender\Type\StatusZgodyEZwrotNameType $status = null;

    /**
     * @var null | bool
     */
    private ?bool $platnoscZaPrzesylke = null;

    /**
     * Kwota w groszach
     *
     * @var null | int
     */
    private ?int $kosztKontrahenta = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dataWygasnieciaZgody = null;

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

    /**
     * @return null | \app\modules\postal\sender\Type\StatusZgodyEZwrotNameType
     */
    public function getStatus() : ?\app\modules\postal\sender\Type\StatusZgodyEZwrotNameType
    {
        return $this->status;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\StatusZgodyEZwrotNameType $status
     * @return static
     */
    public function withStatus(?\app\modules\postal\sender\Type\StatusZgodyEZwrotNameType $status) : static
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPlatnoscZaPrzesylke() : ?bool
    {
        return $this->platnoscZaPrzesylke;
    }

    /**
     * @param null | bool $platnoscZaPrzesylke
     * @return static
     */
    public function withPlatnoscZaPrzesylke(?bool $platnoscZaPrzesylke) : static
    {
        $new = clone $this;
        $new->platnoscZaPrzesylke = $platnoscZaPrzesylke;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getKosztKontrahenta() : ?int
    {
        return $this->kosztKontrahenta;
    }

    /**
     * @param null | int $kosztKontrahenta
     * @return static
     */
    public function withKosztKontrahenta(?int $kosztKontrahenta) : static
    {
        $new = clone $this;
        $new->kosztKontrahenta = $kosztKontrahenta;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDataWygasnieciaZgody() : ?\DateTimeInterface
    {
        return $this->dataWygasnieciaZgody;
    }

    /**
     * @param null | \DateTimeInterface $dataWygasnieciaZgody
     * @return static
     */
    public function withDataWygasnieciaZgody(?\DateTimeInterface $dataWygasnieciaZgody) : static
    {
        $new = clone $this;
        $new->dataWygasnieciaZgody = $dataWygasnieciaZgody;

        return $new;
    }
}

