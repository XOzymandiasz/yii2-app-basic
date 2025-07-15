<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateEnvelopeBuforResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\BuforType>
     */
    private array $createdBufor;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\BuforType>
     */
    public function getCreatedBufor() : array
    {
        return $this->createdBufor;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\BuforType> $createdBufor
     * @return static
     */
    public function withCreatedBufor(array $createdBufor) : static
    {
        $new = clone $this;
        $new->createdBufor = $createdBufor;

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

