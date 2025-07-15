<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetListaPowodowReklamacjiResponse implements ResultInterface
{
    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\KategoriePowodowReklamacjiType>
     */
    private array $kategoriePowodowReklamacji;

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\KategoriePowodowReklamacjiType>
     */
    public function getKategoriePowodowReklamacji() : array
    {
        return $this->kategoriePowodowReklamacji;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\KategoriePowodowReklamacjiType> $kategoriePowodowReklamacji
     * @return static
     */
    public function withKategoriePowodowReklamacji(array $kategoriePowodowReklamacji) : static
    {
        $new = clone $this;
        $new->kategoriePowodowReklamacji = $kategoriePowodowReklamacji;

        return $new;
    }
}

