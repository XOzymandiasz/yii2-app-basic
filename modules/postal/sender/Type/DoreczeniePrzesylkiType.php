<?php

namespace app\modules\postal\sender\Type;

class DoreczeniePrzesylkiType
{
    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $data = null;

    /**
     * @var null | string
     */
    private ?string $osobaOdbierajaca = null;

    /**
     * @var null | \app\modules\postal\sender\Type\PodmiotDoreczeniaEnum
     */
    private ?\app\modules\postal\sender\Type\PodmiotDoreczeniaEnum $podmiotDoreczenia = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dataPelnomocnictwa = null;

    /**
     * @var null | string
     */
    private ?string $numerPelnomocnictwa = null;

    /**
     * @var null | bool
     */
    private ?bool $pieczecFirmowa = null;

    /**
     * @var null | \app\modules\postal\sender\Type\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum
     */
    private ?\app\modules\postal\sender\Type\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum $miejscePozostawieniaZawiadomieniaODoreczeniu = null;

    /**
     * @return null | \DateTimeInterface
     */
    public function getData() : ?\DateTimeInterface
    {
        return $this->data;
    }

    /**
     * @param null | \DateTimeInterface $data
     * @return static
     */
    public function withData(?\DateTimeInterface $data) : static
    {
        $new = clone $this;
        $new->data = $data;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOsobaOdbierajaca() : ?string
    {
        return $this->osobaOdbierajaca;
    }

    /**
     * @param null | string $osobaOdbierajaca
     * @return static
     */
    public function withOsobaOdbierajaca(?string $osobaOdbierajaca) : static
    {
        $new = clone $this;
        $new->osobaOdbierajaca = $osobaOdbierajaca;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\PodmiotDoreczeniaEnum
     */
    public function getPodmiotDoreczenia() : ?\app\modules\postal\sender\Type\PodmiotDoreczeniaEnum
    {
        return $this->podmiotDoreczenia;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PodmiotDoreczeniaEnum $podmiotDoreczenia
     * @return static
     */
    public function withPodmiotDoreczenia(?\app\modules\postal\sender\Type\PodmiotDoreczeniaEnum $podmiotDoreczenia) : static
    {
        $new = clone $this;
        $new->podmiotDoreczenia = $podmiotDoreczenia;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDataPelnomocnictwa() : ?\DateTimeInterface
    {
        return $this->dataPelnomocnictwa;
    }

    /**
     * @param null | \DateTimeInterface $dataPelnomocnictwa
     * @return static
     */
    public function withDataPelnomocnictwa(?\DateTimeInterface $dataPelnomocnictwa) : static
    {
        $new = clone $this;
        $new->dataPelnomocnictwa = $dataPelnomocnictwa;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerPelnomocnictwa() : ?string
    {
        return $this->numerPelnomocnictwa;
    }

    /**
     * @param null | string $numerPelnomocnictwa
     * @return static
     */
    public function withNumerPelnomocnictwa(?string $numerPelnomocnictwa) : static
    {
        $new = clone $this;
        $new->numerPelnomocnictwa = $numerPelnomocnictwa;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPieczecFirmowa() : ?bool
    {
        return $this->pieczecFirmowa;
    }

    /**
     * @param null | bool $pieczecFirmowa
     * @return static
     */
    public function withPieczecFirmowa(?bool $pieczecFirmowa) : static
    {
        $new = clone $this;
        $new->pieczecFirmowa = $pieczecFirmowa;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum
     */
    public function getMiejscePozostawieniaZawiadomieniaODoreczeniu() : ?\app\modules\postal\sender\Type\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum
    {
        return $this->miejscePozostawieniaZawiadomieniaODoreczeniu;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum $miejscePozostawieniaZawiadomieniaODoreczeniu
     * @return static
     */
    public function withMiejscePozostawieniaZawiadomieniaODoreczeniu(?\app\modules\postal\sender\Type\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum $miejscePozostawieniaZawiadomieniaODoreczeniu) : static
    {
        $new = clone $this;
        $new->miejscePozostawieniaZawiadomieniaODoreczeniu = $miejscePozostawieniaZawiadomieniaODoreczeniu;

        return $new;
    }
}

