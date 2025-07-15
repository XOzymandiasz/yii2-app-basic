<?php

namespace app\modules\postal\sender\Type;

class EZwrotKartaType
{
    /**
     * @var int
     */
    private int $idKarta;

    /**
     * @var int
     */
    private int $idAdresKorespondencyjny;

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
     * @return int
     */
    public function getIdAdresKorespondencyjny() : int
    {
        return $this->idAdresKorespondencyjny;
    }

    /**
     * @param int $idAdresKorespondencyjny
     * @return static
     */
    public function withIdAdresKorespondencyjny(int $idAdresKorespondencyjny) : static
    {
        $new = clone $this;
        $new->idAdresKorespondencyjny = $idAdresKorespondencyjny;

        return $new;
    }
}

