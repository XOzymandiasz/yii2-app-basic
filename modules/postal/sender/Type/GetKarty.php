<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetKarty implements RequestInterface
{
    /**
     * @var array<int<0,max>, int>
     */
    private array $idKarta;

    /**
     * Constructor
     *
     * @param array<int<0,max>, int> $idKarta
     */
    public function __construct(array $idKarta)
    {
        $this->idKarta = $idKarta;
    }

    /**
     * @return array<int<0,max>, int>
     */
    public function getIdKarta() : array
    {
        return $this->idKarta;
    }

    /**
     * @param array<int<0,max>, int> $idKarta
     * @return static
     */
    public function withIdKarta(array $idKarta) : static
    {
        $new = clone $this;
        $new->idKarta = $idKarta;

        return $new;
    }
}

