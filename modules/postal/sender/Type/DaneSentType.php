<?php

namespace app\modules\postal\sender\Type;

class DaneSentType
{
    /**
     * @var string
     */
    private string $numer;

    /**
     * @var string
     */
    private string $kluczPrzewoznika;

    /**
     * @var null | string
     */
    private ?string $kodCN = null;

    /**
     * @var null | string
     */
    private ?string $kodPKWiU = null;

    /**
     * @var null | float
     */
    private ?float $masa = null;

    /**
     * @var null | bool
     */
    private ?bool $proceduraAwaryjna = null;

    /**
     * @return string
     */
    public function getNumer() : string
    {
        return $this->numer;
    }

    /**
     * @param string $numer
     * @return static
     */
    public function withNumer(string $numer) : static
    {
        $new = clone $this;
        $new->numer = $numer;

        return $new;
    }

    /**
     * @return string
     */
    public function getKluczPrzewoznika() : string
    {
        return $this->kluczPrzewoznika;
    }

    /**
     * @param string $kluczPrzewoznika
     * @return static
     */
    public function withKluczPrzewoznika(string $kluczPrzewoznika) : static
    {
        $new = clone $this;
        $new->kluczPrzewoznika = $kluczPrzewoznika;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getKodCN() : ?string
    {
        return $this->kodCN;
    }

    /**
     * @param null | string $kodCN
     * @return static
     */
    public function withKodCN(?string $kodCN) : static
    {
        $new = clone $this;
        $new->kodCN = $kodCN;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getKodPKWiU() : ?string
    {
        return $this->kodPKWiU;
    }

    /**
     * @param null | string $kodPKWiU
     * @return static
     */
    public function withKodPKWiU(?string $kodPKWiU) : static
    {
        $new = clone $this;
        $new->kodPKWiU = $kodPKWiU;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getMasa() : ?float
    {
        return $this->masa;
    }

    /**
     * @param null | float $masa
     * @return static
     */
    public function withMasa(?float $masa) : static
    {
        $new = clone $this;
        $new->masa = $masa;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getProceduraAwaryjna() : ?bool
    {
        return $this->proceduraAwaryjna;
    }

    /**
     * @param null | bool $proceduraAwaryjna
     * @return static
     */
    public function withProceduraAwaryjna(?bool $proceduraAwaryjna) : static
    {
        $new = clone $this;
        $new->proceduraAwaryjna = $proceduraAwaryjna;

        return $new;
    }
}

