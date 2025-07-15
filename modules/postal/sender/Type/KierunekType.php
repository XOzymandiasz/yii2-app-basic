<?php

namespace app\modules\postal\sender\Type;

class KierunekType
{
    /**
     * @var array<int<0,max>, mixed>
     */
    private array $kodPocztowy;

    /**
     * @var int
     */
    private int $id;

    /**
     * @var null | string
     */
    private ?string $opis = null;

    /**
     * @var null | string
     */
    private ?string $pna = null;

    /**
     * @return array<int<0,max>, mixed>
     */
    public function getKodPocztowy() : array
    {
        return $this->kodPocztowy;
    }

    /**
     * @param array<int<0,max>, mixed> $kodPocztowy
     * @return static
     */
    public function withKodPocztowy(array $kodPocztowy) : static
    {
        $new = clone $this;
        $new->kodPocztowy = $kodPocztowy;

        return $new;
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return static
     */
    public function withId(int $id) : static
    {
        $new = clone $this;
        $new->id = $id;

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
    public function getPna() : ?string
    {
        return $this->pna;
    }

    /**
     * @param null | string $pna
     * @return static
     */
    public function withPna(?string $pna) : static
    {
        $new = clone $this;
        $new->pna = $pna;

        return $new;
    }
}

