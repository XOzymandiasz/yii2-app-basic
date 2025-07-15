<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEPOStatusResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\PrzesylkaEPOType>
     */
    private array $epo;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\PrzesylkaEPOType>
     */
    public function getEpo() : array
    {
        return $this->epo;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\PrzesylkaEPOType> $epo
     * @return static
     */
    public function withEpo(array $epo) : static
    {
        $new = clone $this;
        $new->epo = $epo;

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

