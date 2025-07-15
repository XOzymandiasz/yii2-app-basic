<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetBlankietPobraniaByGuidsResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\AddressLabelContent>
     */
    private array $content;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\AddressLabelContent>
     */
    public function getContent() : array
    {
        return $this->content;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\AddressLabelContent> $content
     * @return static
     */
    public function withContent(array $content) : static
    {
        $new = clone $this;
        $new->content = $content;

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

