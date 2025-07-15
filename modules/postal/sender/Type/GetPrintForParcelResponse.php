<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPrintForParcelResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\PrintResultType>
     */
    private array $printResult;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\PrintResultType>
     */
    public function getPrintResult() : array
    {
        return $this->printResult;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\PrintResultType> $printResult
     * @return static
     */
    public function withPrintResult(array $printResult) : static
    {
        $new = clone $this;
        $new->printResult = $printResult;

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

