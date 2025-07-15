<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetAdditionalActivitiesListResponse implements ResultInterface
{
    /**
     * Czynność do wykonania w ramach np. przesyłki
     *  proceduralnej
     *
     * @var array<int<0,max>, \app\modules\postal\sender\Type\AdditionalActivityType>
     */
    private array $additionalActivity;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\AdditionalActivityType>
     */
    public function getAdditionalActivity() : array
    {
        return $this->additionalActivity;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\AdditionalActivityType> $additionalActivity
     * @return static
     */
    public function withAdditionalActivity(array $additionalActivity) : static
    {
        $new = clone $this;
        $new->additionalActivity = $additionalActivity;

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

