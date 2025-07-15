<?php

namespace app\modules\postal\sender\Type;

class ReklamowanaPrzesylkaType
{
    /**
     * @var \app\modules\postal\sender\Type\PrzesylkaType
     */
    private \app\modules\postal\sender\Type\PrzesylkaType $przesylka;

    /**
     * @var \app\modules\postal\sender\Type\PowodReklamacjiType
     */
    private \app\modules\postal\sender\Type\PowodReklamacjiType $powodReklamacji;

    /**
     * @var null | string
     */
    private ?string $nrb = null;

    /**
     * @var null | string
     */
    private ?string $numerFaktury = null;

    /**
     * @var null | bool
     */
    private ?bool $ezgoda = null;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $dataNadania;

    /**
     * @var null | int
     */
    private ?int $urzadNadania = null;

    /**
     * @var null | string
     */
    private ?string $powodReklamacjiOpis = null;

    /**
     * @var null | int
     */
    private ?int $odszkodowanie = null;

    /**
     * @var null | int
     */
    private ?int $oplata = null;

    /**
     * @var null | int
     */
    private ?int $oczekiwaneOdszkodowanie = null;

    /**
     * @return \app\modules\postal\sender\Type\PrzesylkaType
     */
    public function getPrzesylka() : \app\modules\postal\sender\Type\PrzesylkaType
    {
        return $this->przesylka;
    }

    /**
     * @param \app\modules\postal\sender\Type\PrzesylkaType $przesylka
     * @return static
     */
    public function withPrzesylka(\app\modules\postal\sender\Type\PrzesylkaType $przesylka) : static
    {
        $new = clone $this;
        $new->przesylka = $przesylka;

        return $new;
    }

    /**
     * @return \app\modules\postal\sender\Type\PowodReklamacjiType
     */
    public function getPowodReklamacji() : \app\modules\postal\sender\Type\PowodReklamacjiType
    {
        return $this->powodReklamacji;
    }

    /**
     * @param \app\modules\postal\sender\Type\PowodReklamacjiType $powodReklamacji
     * @return static
     */
    public function withPowodReklamacji(\app\modules\postal\sender\Type\PowodReklamacjiType $powodReklamacji) : static
    {
        $new = clone $this;
        $new->powodReklamacji = $powodReklamacji;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNrb() : ?string
    {
        return $this->nrb;
    }

    /**
     * @param null | string $nrb
     * @return static
     */
    public function withNrb(?string $nrb) : static
    {
        $new = clone $this;
        $new->nrb = $nrb;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerFaktury() : ?string
    {
        return $this->numerFaktury;
    }

    /**
     * @param null | string $numerFaktury
     * @return static
     */
    public function withNumerFaktury(?string $numerFaktury) : static
    {
        $new = clone $this;
        $new->numerFaktury = $numerFaktury;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getEzgoda() : ?bool
    {
        return $this->ezgoda;
    }

    /**
     * @param null | bool $ezgoda
     * @return static
     */
    public function withEzgoda(?bool $ezgoda) : static
    {
        $new = clone $this;
        $new->ezgoda = $ezgoda;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDataNadania() : \DateTimeInterface
    {
        return $this->dataNadania;
    }

    /**
     * @param \DateTimeInterface $dataNadania
     * @return static
     */
    public function withDataNadania(\DateTimeInterface $dataNadania) : static
    {
        $new = clone $this;
        $new->dataNadania = $dataNadania;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getUrzadNadania() : ?int
    {
        return $this->urzadNadania;
    }

    /**
     * @param null | int $urzadNadania
     * @return static
     */
    public function withUrzadNadania(?int $urzadNadania) : static
    {
        $new = clone $this;
        $new->urzadNadania = $urzadNadania;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPowodReklamacjiOpis() : ?string
    {
        return $this->powodReklamacjiOpis;
    }

    /**
     * @param null | string $powodReklamacjiOpis
     * @return static
     */
    public function withPowodReklamacjiOpis(?string $powodReklamacjiOpis) : static
    {
        $new = clone $this;
        $new->powodReklamacjiOpis = $powodReklamacjiOpis;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getOdszkodowanie() : ?int
    {
        return $this->odszkodowanie;
    }

    /**
     * @param null | int $odszkodowanie
     * @return static
     */
    public function withOdszkodowanie(?int $odszkodowanie) : static
    {
        $new = clone $this;
        $new->odszkodowanie = $odszkodowanie;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getOplata() : ?int
    {
        return $this->oplata;
    }

    /**
     * @param null | int $oplata
     * @return static
     */
    public function withOplata(?int $oplata) : static
    {
        $new = clone $this;
        $new->oplata = $oplata;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getOczekiwaneOdszkodowanie() : ?int
    {
        return $this->oczekiwaneOdszkodowanie;
    }

    /**
     * @param null | int $oczekiwaneOdszkodowanie
     * @return static
     */
    public function withOczekiwaneOdszkodowanie(?int $oczekiwaneOdszkodowanie) : static
    {
        $new = clone $this;
        $new->oczekiwaneOdszkodowanie = $oczekiwaneOdszkodowanie;

        return $new;
    }
}

