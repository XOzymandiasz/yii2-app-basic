<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetZapowiedziFaktur implements RequestInterface
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $data;

    /**
     * Constructor
     *
     * @param \DateTimeInterface $data
     */
    public function __construct(\DateTimeInterface $data)
    {
        $this->data = $data;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getData() : \DateTimeInterface
    {
        return $this->data;
    }

    /**
     * @param \DateTimeInterface $data
     * @return static
     */
    public function withData(\DateTimeInterface $data) : static
    {
        $new = clone $this;
        $new->data = $data;

        return $new;
    }
}

