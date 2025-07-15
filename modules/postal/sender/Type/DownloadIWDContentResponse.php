<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DownloadIWDContentResponse implements ResultInterface
{
    /**
     * @var mixed
     */
    private mixed $IWDContent;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return mixed
     */
    public function getIWDContent() : mixed
    {
        return $this->IWDContent;
    }

    /**
     * @param mixed $IWDContent
     * @return static
     */
    public function withIWDContent(mixed $IWDContent) : static
    {
        $new = clone $this;
        $new->IWDContent = $IWDContent;

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

