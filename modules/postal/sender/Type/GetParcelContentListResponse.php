<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetParcelContentListResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ParcelContentType>
     */
    private array $parcelContent;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\ParcelContentType>
     */
    public function getParcelContent() : array
    {
        return $this->parcelContent;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\ParcelContentType> $parcelContent
     * @return static
     */
    public function withParcelContent(array $parcelContent) : static
    {
        $new = clone $this;
        $new->parcelContent = $parcelContent;

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

