<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPlacowkaPocztowa implements RequestInterface
{
    /**
     * @var non-empty-array<int<0,4999>, int>
     */
    private array $pni;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,4999>, int> $pni
     */
    public function __construct(array $pni)
    {
        $this->pni = $pni;
    }

    /**
     * @return non-empty-array<int<0,4999>, int>
     */
    public function getPni() : array
    {
        return $this->pni;
    }

    /**
     * @param non-empty-array<int<0,4999>, int> $pni
     * @return static
     */
    public function withPni(array $pni) : static
    {
        $new = clone $this;
        $new->pni = $pni;

        return $new;
    }
}

