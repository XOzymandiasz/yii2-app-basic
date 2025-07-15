<?php

namespace app\modules\postal\sender\Type;

class WplataCKPType
{
    /**
     * @var string
     */
    private string $tytulPobrania;

    /**
     * @var string
     */
    private string $unikalnyIdentyfikatorWplaty;

    /**
     * @var string
     */
    private string $numerNadania;

    /**
     * Kwota w groszach
     *
     * @var int
     */
    private int $kwota;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $dataPobrania;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dataPrzelewu = null;

    /**
     * @var int
     */
    private int $idUmowy;

    /**
     * @var string
     */
    private string $tytulPrzelewuZbiorczego;

    /**
     * @return string
     */
    public function getTytulPobrania() : string
    {
        return $this->tytulPobrania;
    }

    /**
     * @param string $tytulPobrania
     * @return static
     */
    public function withTytulPobrania(string $tytulPobrania) : static
    {
        $new = clone $this;
        $new->tytulPobrania = $tytulPobrania;

        return $new;
    }

    /**
     * @return string
     */
    public function getUnikalnyIdentyfikatorWplaty() : string
    {
        return $this->unikalnyIdentyfikatorWplaty;
    }

    /**
     * @param string $unikalnyIdentyfikatorWplaty
     * @return static
     */
    public function withUnikalnyIdentyfikatorWplaty(string $unikalnyIdentyfikatorWplaty) : static
    {
        $new = clone $this;
        $new->unikalnyIdentyfikatorWplaty = $unikalnyIdentyfikatorWplaty;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumerNadania() : string
    {
        return $this->numerNadania;
    }

    /**
     * @param string $numerNadania
     * @return static
     */
    public function withNumerNadania(string $numerNadania) : static
    {
        $new = clone $this;
        $new->numerNadania = $numerNadania;

        return $new;
    }

    /**
     * @return int
     */
    public function getKwota() : int
    {
        return $this->kwota;
    }

    /**
     * @param int $kwota
     * @return static
     */
    public function withKwota(int $kwota) : static
    {
        $new = clone $this;
        $new->kwota = $kwota;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDataPobrania() : \DateTimeInterface
    {
        return $this->dataPobrania;
    }

    /**
     * @param \DateTimeInterface $dataPobrania
     * @return static
     */
    public function withDataPobrania(\DateTimeInterface $dataPobrania) : static
    {
        $new = clone $this;
        $new->dataPobrania = $dataPobrania;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDataPrzelewu() : ?\DateTimeInterface
    {
        return $this->dataPrzelewu;
    }

    /**
     * @param null | \DateTimeInterface $dataPrzelewu
     * @return static
     */
    public function withDataPrzelewu(?\DateTimeInterface $dataPrzelewu) : static
    {
        $new = clone $this;
        $new->dataPrzelewu = $dataPrzelewu;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdUmowy() : int
    {
        return $this->idUmowy;
    }

    /**
     * @param int $idUmowy
     * @return static
     */
    public function withIdUmowy(int $idUmowy) : static
    {
        $new = clone $this;
        $new->idUmowy = $idUmowy;

        return $new;
    }

    /**
     * @return string
     */
    public function getTytulPrzelewuZbiorczego() : string
    {
        return $this->tytulPrzelewuZbiorczego;
    }

    /**
     * @param string $tytulPrzelewuZbiorczego
     * @return static
     */
    public function withTytulPrzelewuZbiorczego(string $tytulPrzelewuZbiorczego) : static
    {
        $new = clone $this;
        $new->tytulPrzelewuZbiorczego = $tytulPrzelewuZbiorczego;

        return $new;
    }
}

