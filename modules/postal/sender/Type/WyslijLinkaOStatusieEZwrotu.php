<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class WyslijLinkaOStatusieEZwrotu implements RequestInterface
{
    /**
     * @var non-empty-array<int<0,max>, mixed>
     */
    private array $guidZgodaEZwrot;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,max>, mixed> $guidZgodaEZwrot
     */
    public function __construct(array $guidZgodaEZwrot)
    {
        $this->guidZgodaEZwrot = $guidZgodaEZwrot;
    }

    /**
     * @return non-empty-array<int<0,max>, mixed>
     */
    public function getGuidZgodaEZwrot() : array
    {
        return $this->guidZgodaEZwrot;
    }

    /**
     * @param non-empty-array<int<0,max>, mixed> $guidZgodaEZwrot
     * @return static
     */
    public function withGuidZgodaEZwrot(array $guidZgodaEZwrot) : static
    {
        $new = clone $this;
        $new->guidZgodaEZwrot = $guidZgodaEZwrot;

        return $new;
    }
}

