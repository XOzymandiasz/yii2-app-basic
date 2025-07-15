<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ClearEnvelopeResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private bool $retval;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return bool
     */
    public function getRetval() : bool
    {
        return $this->retval;
    }

    /**
     * @param bool $retval
     * @return static
     */
    public function withRetval(bool $retval) : static
    {
        $new = clone $this;
        $new->retval = $retval;

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

