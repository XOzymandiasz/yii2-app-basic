<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Hello implements RequestInterface
{
    /**
     * @var string
     */
    private string $in;

    /**
     * Constructor
     *
     * @param string $in
     */
    public function __construct(string $in)
    {
        $this->in = $in;
    }

    /**
     * @return string
     */
    public function getIn() : string
    {
        return $this->in;
    }

    /**
     * @param string $in
     * @return static
     */
    public function withIn(string $in) : static
    {
        $new = clone $this;
        $new->in = $in;

        return $new;
    }
}

