<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetParcelContentList implements RequestInterface
{
    /**
     * @var int
     */
    private int $idKarta;

    /**
     * Constructor
     *
     * @param int $idKarta
     */
    public function __construct(int $idKarta)
    {
        $this->idKarta = $idKarta;
    }

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
}

