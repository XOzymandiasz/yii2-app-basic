<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class HelloResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $out;

    /**
     * @return string
     */
    public function getOut() : string
    {
        return $this->out;
    }

    /**
     * @param string $out
     * @return static
     */
    public function withOut(string $out) : static
    {
        $new = clone $this;
        $new->out = $out;

        return $new;
    }
}

