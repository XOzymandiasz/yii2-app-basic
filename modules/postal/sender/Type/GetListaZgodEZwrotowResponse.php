<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetListaZgodEZwrotowResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\OczekujeNaZgodeEZwrotType>
     */
    private array $lista;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\OczekujeNaZgodeEZwrotType>
     */
    public function getLista() : array
    {
        return $this->lista;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\OczekujeNaZgodeEZwrotType> $lista
     * @return static
     */
    public function withLista(array $lista) : static
    {
        $new = clone $this;
        $new->lista = $lista;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    public function getError() : array
    {
        return $this->error;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\ErrorType> $error
     * @return static
     */
    public function withError(array $error) : static
    {
        $new = clone $this;
        $new->error = $error;

        return $new;
    }
}

