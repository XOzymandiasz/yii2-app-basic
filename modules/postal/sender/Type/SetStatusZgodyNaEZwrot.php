<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetStatusZgodyNaEZwrot implements RequestInterface
{
    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\StatusZgodyEZwrotType>
     */
    private array $statusZgody;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\StatusZgodyEZwrotType> $statusZgody
     */
    public function __construct(array $statusZgody)
    {
        $this->statusZgody = $statusZgody;
    }

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\StatusZgodyEZwrotType>
     */
    public function getStatusZgody() : array
    {
        return $this->statusZgody;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\StatusZgodyEZwrotType> $statusZgody
     * @return static
     */
    public function withStatusZgody(array $statusZgody) : static
    {
        $new = clone $this;
        $new->statusZgody = $statusZgody;

        return $new;
    }
}

