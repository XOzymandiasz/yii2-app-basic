<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class IsObszarMiasto implements RequestInterface
{
    /**
     * @var non-empty-array<int<0,499>, \app\modules\postal\sender\Type\ObszarAdresowyType>
     */
    private array $adres;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,499>, \app\modules\postal\sender\Type\ObszarAdresowyType> $adres
     */
    public function __construct(array $adres)
    {
        $this->adres = $adres;
    }

    /**
     * @return non-empty-array<int<0,499>, \app\modules\postal\sender\Type\ObszarAdresowyType>
     */
    public function getAdres() : array
    {
        return $this->adres;
    }

    /**
     * @param non-empty-array<int<0,499>, \app\modules\postal\sender\Type\ObszarAdresowyType> $adres
     * @return static
     */
    public function withAdres(array $adres) : static
    {
        $new = clone $this;
        $new->adres = $adres;

        return $new;
    }
}

