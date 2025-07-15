<?php

namespace app\modules\postal\sender\Type;

class OplacaOdbiorcaKartaType
{
    /**
     * Identyfikator karty odbiorcy opłacającego
     *  przesyłkę.
     *
     * @var int
     */
    private int $idKarta;

    /**
     * Identyfikator jednego z adresów
     *  korespondencyjnych zdefiniowanych dla karty. Wymagalny dla
     *  typ=ADRESAT_UMOWNY.
     *
     * @var null | int
     */
    private ?int $idAdresKorespondencyjny = null;

    /**
     * @return int
     */
    public function getIdKarta() : int
    {
        return $this->idKarta;
    }

    /**
     * @param int $idKarta
     * @return static
     */
    public function withIdKarta(int $idKarta) : static
    {
        $new = clone $this;
        $new->idKarta = $idKarta;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdAdresKorespondencyjny() : ?int
    {
        return $this->idAdresKorespondencyjny;
    }

    /**
     * @param null | int $idAdresKorespondencyjny
     * @return static
     */
    public function withIdAdresKorespondencyjny(?int $idAdresKorespondencyjny) : static
    {
        $new = clone $this;
        $new->idAdresKorespondencyjny = $idAdresKorespondencyjny;

        return $new;
    }
}

