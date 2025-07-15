<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class MoveShipmentsResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, mixed>
     */
    private array $notMovedGuid;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return array<int<0,max>, mixed>
     */
    public function getNotMovedGuid() : array
    {
        return $this->notMovedGuid;
    }

    /**
     * @param array<int<0,max>, mixed> $notMovedGuid
     * @return static
     */
    public function withNotMovedGuid(array $notMovedGuid) : static
    {
        $new = clone $this;
        $new->notMovedGuid = $notMovedGuid;

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

