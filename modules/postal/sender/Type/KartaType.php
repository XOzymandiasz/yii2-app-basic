<?php

namespace app\modules\postal\sender\Type;

class KartaType
{
    /**
     * Lista dostępnych produktów dla karty
     *
     * @var null | \app\modules\postal\sender\Type\ProduktyInKartaType
     */
    private ?\app\modules\postal\sender\Type\ProduktyInKartaType $produktyInKarta = null;

    /**
     * Lista adresów korespondencyjnych dla kart typu
     *  2
     *
     * @var array<int<0,max>, \app\modules\postal\sender\Type\AdresKorespondencyjny>
     */
    private array $adresKorespondencyjny;

    /**
     * @var null | int
     */
    private ?int $idKarta = null;

    /**
     * @var null | string
     */
    private ?string $opis = null;

    /**
     * @var null | bool
     */
    private ?bool $aktywna = null;

    /**
     * Typ karty. Dopuszczalne wartości: 1-do
     *  nadawania, 2-do definicji adresów OPNA. Lista obsługiwanych
     *  wartości może być rozszerzona w przyszłości.
     *
     * @var null | int
     */
    private ?int $typ = null;

    /**
     * @return null | \app\modules\postal\sender\Type\ProduktyInKartaType
     */
    public function getProduktyInKarta() : ?\app\modules\postal\sender\Type\ProduktyInKartaType
    {
        return $this->produktyInKarta;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ProduktyInKartaType $produktyInKarta
     * @return static
     */
    public function withProduktyInKarta(?\app\modules\postal\sender\Type\ProduktyInKartaType $produktyInKarta) : static
    {
        $new = clone $this;
        $new->produktyInKarta = $produktyInKarta;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\AdresKorespondencyjny>
     */
    public function getAdresKorespondencyjny() : array
    {
        return $this->adresKorespondencyjny;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\AdresKorespondencyjny> $adresKorespondencyjny
     * @return static
     */
    public function withAdresKorespondencyjny(array $adresKorespondencyjny) : static
    {
        $new = clone $this;
        $new->adresKorespondencyjny = $adresKorespondencyjny;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdKarta() : ?int
    {
        return $this->idKarta;
    }

    /**
     * @param null | int $idKarta
     * @return static
     */
    public function withIdKarta(?int $idKarta) : static
    {
        $new = clone $this;
        $new->idKarta = $idKarta;

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
     * @return null | bool
     */
    public function getAktywna() : ?bool
    {
        return $this->aktywna;
    }

    /**
     * @param null | bool $aktywna
     * @return static
     */
    public function withAktywna(?bool $aktywna) : static
    {
        $new = clone $this;
        $new->aktywna = $aktywna;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTyp() : ?int
    {
        return $this->typ;
    }

    /**
     * @param null | int $typ
     * @return static
     */
    public function withTyp(?int $typ) : static
    {
        $new = clone $this;
        $new->typ = $typ;

        return $new;
    }
}

