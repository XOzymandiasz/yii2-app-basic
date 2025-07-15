<?php

namespace app\modules\postal\sender\Type;

class KategoriePowodowReklamacjiType
{
    /**
     * @var string
     */
    private string $nazwa;

    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\PowodReklamacjiType>
     */
    private array $powodReklamacji;

    /**
     * @return string
     */
    public function getNazwa() : string
    {
        return $this->nazwa;
    }

    /**
     * @param string $nazwa
     * @return static
     */
    public function withNazwa(string $nazwa) : static
    {
        $new = clone $this;
        $new->nazwa = $nazwa;

        return $new;
    }

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\PowodReklamacjiType>
     */
    public function getPowodReklamacji() : array
    {
        return $this->powodReklamacji;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\PowodReklamacjiType> $powodReklamacji
     * @return static
     */
    public function withPowodReklamacji(array $powodReklamacji) : static
    {
        $new = clone $this;
        $new->powodReklamacji = $powodReklamacji;

        return $new;
    }
}

