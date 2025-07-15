<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddZalacznikDoReklamacji implements RequestInterface
{
    /**
     * @var string
     */
    private string $idReklamacja;

    /**
     * @var non-empty-array<int<0,4>, \app\modules\postal\sender\Type\ZalacznikDoReklamacjiType>
     */
    private array $zalacznik;

    /**
     * Constructor
     *
     * @param string $idReklamacja
     * @param non-empty-array<int<0,4>, \app\modules\postal\sender\Type\ZalacznikDoReklamacjiType> $zalacznik
     */
    public function __construct(string $idReklamacja, array $zalacznik)
    {
        $this->idReklamacja = $idReklamacja;
        $this->zalacznik = $zalacznik;
    }

    /**
     * @return string
     */
    public function getIdReklamacja() : string
    {
        return $this->idReklamacja;
    }

    /**
     * @param string $idReklamacja
     * @return static
     */
    public function withIdReklamacja(string $idReklamacja) : static
    {
        $new = clone $this;
        $new->idReklamacja = $idReklamacja;

        return $new;
    }

    /**
     * @return non-empty-array<int<0,4>, \app\modules\postal\sender\Type\ZalacznikDoReklamacjiType>
     */
    public function getZalacznik() : array
    {
        return $this->zalacznik;
    }

    /**
     * @param non-empty-array<int<0,4>, \app\modules\postal\sender\Type\ZalacznikDoReklamacjiType> $zalacznik
     * @return static
     */
    public function withZalacznik(array $zalacznik) : static
    {
        $new = clone $this;
        $new->zalacznik = $zalacznik;

        return $new;
    }
}

