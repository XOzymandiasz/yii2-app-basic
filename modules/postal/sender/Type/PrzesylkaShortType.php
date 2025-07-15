<?php

namespace app\modules\postal\sender\Type;

class PrzesylkaShortType
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\CzynnoscUpustowaType>
     */
    private array $czynnosciUpustowe;

    /**
     * @var null | string
     */
    private ?string $numerNadania = null;

    /**
     * @var string
     */
    private string $guid;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dataNadania = null;

    /**
     * @var null | int
     */
    private ?int $razem = null;

    /**
     * @var null | int
     */
    private ?int $pobranie = null;

    /**
     * @var null | \app\modules\postal\sender\Type\StatusType
     */
    private ?\app\modules\postal\sender\Type\StatusType $status = null;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\CzynnoscUpustowaType>
     */
    public function getCzynnosciUpustowe() : array
    {
        return $this->czynnosciUpustowe;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\CzynnoscUpustowaType> $czynnosciUpustowe
     * @return static
     */
    public function withCzynnosciUpustowe(array $czynnosciUpustowe) : static
    {
        $new = clone $this;
        $new->czynnosciUpustowe = $czynnosciUpustowe;

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
     * @return null | int
     */
    public function getRazem() : ?int
    {
        return $this->razem;
    }

    /**
     * @param null | int $razem
     * @return static
     */
    public function withRazem(?int $razem) : static
    {
        $new = clone $this;
        $new->razem = $razem;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPobranie() : ?int
    {
        return $this->pobranie;
    }

    /**
     * @param null | int $pobranie
     * @return static
     */
    public function withPobranie(?int $pobranie) : static
    {
        $new = clone $this;
        $new->pobranie = $pobranie;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\StatusType
     */
    public function getStatus() : ?\app\modules\postal\sender\Type\StatusType
    {
        return $this->status;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\StatusType $status
     * @return static
     */
    public function withStatus(?\app\modules\postal\sender\Type\StatusType $status) : static
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }
}

