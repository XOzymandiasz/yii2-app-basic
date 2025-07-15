<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ZamowKuriera implements RequestInterface
{
    /**
     * @var \app\modules\postal\sender\Type\AdresType
     */
    private \app\modules\postal\sender\Type\AdresType $miejsceOdbioru;

    /**
     * @var null | \app\modules\postal\sender\Type\AdresType
     */
    private ?\app\modules\postal\sender\Type\AdresType $nadawca = null;

    /**
     * @var string
     */
    private string $oczekiwanaDataOdbioru;

    /**
     * @var string
     */
    private string $oczekiwanaGodzinaOdbioru;

    /**
     * @var string
     */
    private string $szacowanaIloscPrzeslek;

    /**
     * @var string
     */
    private string $szacowanaLacznaMasaPrzesylek;

    /**
     * @var null | string
     */
    private ?string $potwierdzenieZamowieniaEmail = null;

    /**
     * Constructor
     *
     * @param \app\modules\postal\sender\Type\AdresType $miejsceOdbioru
     * @param null | \app\modules\postal\sender\Type\AdresType $nadawca
     * @param string $oczekiwanaDataOdbioru
     * @param string $oczekiwanaGodzinaOdbioru
     * @param string $szacowanaIloscPrzeslek
     * @param string $szacowanaLacznaMasaPrzesylek
     * @param null | string $potwierdzenieZamowieniaEmail
     */
    public function __construct(\app\modules\postal\sender\Type\AdresType $miejsceOdbioru, ?\app\modules\postal\sender\Type\AdresType $nadawca, string $oczekiwanaDataOdbioru, string $oczekiwanaGodzinaOdbioru, string $szacowanaIloscPrzeslek, string $szacowanaLacznaMasaPrzesylek, ?string $potwierdzenieZamowieniaEmail)
    {
        $this->miejsceOdbioru = $miejsceOdbioru;
        $this->nadawca = $nadawca;
        $this->oczekiwanaDataOdbioru = $oczekiwanaDataOdbioru;
        $this->oczekiwanaGodzinaOdbioru = $oczekiwanaGodzinaOdbioru;
        $this->szacowanaIloscPrzeslek = $szacowanaIloscPrzeslek;
        $this->szacowanaLacznaMasaPrzesylek = $szacowanaLacznaMasaPrzesylek;
        $this->potwierdzenieZamowieniaEmail = $potwierdzenieZamowieniaEmail;
    }

    /**
     * @return \app\modules\postal\sender\Type\AdresType
     */
    public function getMiejsceOdbioru() : \app\modules\postal\sender\Type\AdresType
    {
        return $this->miejsceOdbioru;
    }

    /**
     * @param \app\modules\postal\sender\Type\AdresType $miejsceOdbioru
     * @return static
     */
    public function withMiejsceOdbioru(\app\modules\postal\sender\Type\AdresType $miejsceOdbioru) : static
    {
        $new = clone $this;
        $new->miejsceOdbioru = $miejsceOdbioru;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\AdresType
     */
    public function getNadawca() : ?\app\modules\postal\sender\Type\AdresType
    {
        return $this->nadawca;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\AdresType $nadawca
     * @return static
     */
    public function withNadawca(?\app\modules\postal\sender\Type\AdresType $nadawca) : static
    {
        $new = clone $this;
        $new->nadawca = $nadawca;

        return $new;
    }

    /**
     * @return string
     */
    public function getOczekiwanaDataOdbioru() : string
    {
        return $this->oczekiwanaDataOdbioru;
    }

    /**
     * @param string $oczekiwanaDataOdbioru
     * @return static
     */
    public function withOczekiwanaDataOdbioru(string $oczekiwanaDataOdbioru) : static
    {
        $new = clone $this;
        $new->oczekiwanaDataOdbioru = $oczekiwanaDataOdbioru;

        return $new;
    }

    /**
     * @return string
     */
    public function getOczekiwanaGodzinaOdbioru() : string
    {
        return $this->oczekiwanaGodzinaOdbioru;
    }

    /**
     * @param string $oczekiwanaGodzinaOdbioru
     * @return static
     */
    public function withOczekiwanaGodzinaOdbioru(string $oczekiwanaGodzinaOdbioru) : static
    {
        $new = clone $this;
        $new->oczekiwanaGodzinaOdbioru = $oczekiwanaGodzinaOdbioru;

        return $new;
    }

    /**
     * @return string
     */
    public function getSzacowanaIloscPrzeslek() : string
    {
        return $this->szacowanaIloscPrzeslek;
    }

    /**
     * @param string $szacowanaIloscPrzeslek
     * @return static
     */
    public function withSzacowanaIloscPrzeslek(string $szacowanaIloscPrzeslek) : static
    {
        $new = clone $this;
        $new->szacowanaIloscPrzeslek = $szacowanaIloscPrzeslek;

        return $new;
    }

    /**
     * @return string
     */
    public function getSzacowanaLacznaMasaPrzesylek() : string
    {
        return $this->szacowanaLacznaMasaPrzesylek;
    }

    /**
     * @param string $szacowanaLacznaMasaPrzesylek
     * @return static
     */
    public function withSzacowanaLacznaMasaPrzesylek(string $szacowanaLacznaMasaPrzesylek) : static
    {
        $new = clone $this;
        $new->szacowanaLacznaMasaPrzesylek = $szacowanaLacznaMasaPrzesylek;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPotwierdzenieZamowieniaEmail() : ?string
    {
        return $this->potwierdzenieZamowieniaEmail;
    }

    /**
     * @param null | string $potwierdzenieZamowieniaEmail
     * @return static
     */
    public function withPotwierdzenieZamowieniaEmail(?string $potwierdzenieZamowieniaEmail) : static
    {
        $new = clone $this;
        $new->potwierdzenieZamowieniaEmail = $potwierdzenieZamowieniaEmail;

        return $new;
    }
}

