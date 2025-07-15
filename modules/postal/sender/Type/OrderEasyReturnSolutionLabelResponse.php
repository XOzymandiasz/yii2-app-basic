<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class OrderEasyReturnSolutionLabelResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $guid = null;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return null | string
     */
    public function getGuid() : ?string
    {
        return $this->guid;
    }

    /**
     * @param null | string $guid
     * @return static
     */
    public function withGuid(?string $guid) : static
    {
        $new = clone $this;
        $new->guid = $guid;

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

