<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddShipment implements RequestInterface
{
    /**
     * @var non-empty-array<int<0,499>, \app\modules\postal\sender\Type\PrzesylkaType>
     */
    private array $przesylki;

    /**
     * @var null | int
     */
    private ?int $idBufor = null;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,499>, \app\modules\postal\sender\Type\PrzesylkaType> $przesylki
     * @param null | int $idBufor
     */
    public function __construct(array $przesylki, ?int $idBufor)
    {
        $this->przesylki = $przesylki;
        $this->idBufor = $idBufor;
    }

    /**
     * @return non-empty-array<int<0,499>, \app\modules\postal\sender\Type\PrzesylkaType>
     */
    public function getPrzesylki() : array
    {
        return $this->przesylki;
    }

    /**
     * @param non-empty-array<int<0,499>, \app\modules\postal\sender\Type\PrzesylkaType> $przesylki
     * @return static
     */
    public function withPrzesylki(array $przesylki) : static
    {
        $new = clone $this;
        $new->przesylki = $przesylki;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdBufor() : ?int
    {
        return $this->idBufor;
    }

    /**
     * @param null | int $idBufor
     * @return static
     */
    public function withIdBufor(?int $idBufor) : static
    {
        $new = clone $this;
        $new->idBufor = $idBufor;

        return $new;
    }
}

