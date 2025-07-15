<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEnvelopeBuforListResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\BuforType>
     */
    private array $bufor;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\BuforType>
     */
    public function getBufor() : array
    {
        return $this->bufor;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\BuforType> $bufor
     * @return static
     */
    public function withBufor(array $bufor) : static
    {
        $new = clone $this;
        $new->bufor = $bufor;

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

