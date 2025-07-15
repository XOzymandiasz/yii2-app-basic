<?php

namespace app\modules\postal\sender\Type;

class ObszarAdresowyType
{
    /**
     * @var null | string
     */
    private ?string $kodPocztowy = null;

    /**
     * @var null | string
     */
    private ?string $miejscowosc = null;

    /**
     * @var null | string
     */
    private ?string $ulica = null;

    /**
     * @var null | string
     */
    private ?string $numerDomu = null;

    /**
     * @var string
     */
    private string $guid;

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
     * @return string
     */
    public function getGuid() : string
    {
        return $this->guid;
    }

    /**
     * @param string $guid
     * @return static
     */
    public function withGuid(string $guid) : static
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }
}

