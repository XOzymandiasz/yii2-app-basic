<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddShipmentResponse implements ResultInterface
{
    /**
     * @var non-empty-array<int<0,499>, \app\modules\postal\sender\Type\AddShipmentResponseItemType>
     */
    private array $retval;

    /**
     * @return non-empty-array<int<0,499>, \app\modules\postal\sender\Type\AddShipmentResponseItemType>
     */
    public function getRetval() : array
    {
        return $this->retval;
    }

    /**
     * @param non-empty-array<int<0,499>, \app\modules\postal\sender\Type\AddShipmentResponseItemType> $retval
     * @return static
     */
    public function withRetval(array $retval) : static
    {
        $new = clone $this;
        $new->retval = $retval;

        return $new;
    }
}

