<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateParcelContent implements RequestInterface
{
    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ParcelContentType>
     */
    private array $parcelContent;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ParcelContentType> $parcelContent
     */
    public function __construct(array $parcelContent)
    {
        $this->parcelContent = $parcelContent;
    }

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ParcelContentType>
     */
    public function getParcelContent() : array
    {
        return $this->parcelContent;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ParcelContentType> $parcelContent
     * @return static
     */
    public function withParcelContent(array $parcelContent) : static
    {
        $new = clone $this;
        $new->parcelContent = $parcelContent;

        return $new;
    }
}

