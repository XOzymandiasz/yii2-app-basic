<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class IsMiejscowa implements RequestInterface
{
    /**
     * @var non-empty-array<int<0,499>, \app\modules\postal\sender\Type\TrasaRequestType>
     */
    private array $trasaRequest;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,499>, \app\modules\postal\sender\Type\TrasaRequestType> $trasaRequest
     */
    public function __construct(array $trasaRequest)
    {
        $this->trasaRequest = $trasaRequest;
    }

    /**
     * @return non-empty-array<int<0,499>, \app\modules\postal\sender\Type\TrasaRequestType>
     */
    public function getTrasaRequest() : array
    {
        return $this->trasaRequest;
    }

    /**
     * @param non-empty-array<int<0,499>, \app\modules\postal\sender\Type\TrasaRequestType> $trasaRequest
     * @return static
     */
    public function withTrasaRequest(array $trasaRequest) : static
    {
        $new = clone $this;
        $new->trasaRequest = $trasaRequest;

        return $new;
    }
}

