<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetEnvelopeBuforDataNadania implements RequestInterface
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $dataNadania;

    /**
     * Constructor
     *
     * @param \DateTimeInterface $dataNadania
     */
    public function __construct(\DateTimeInterface $dataNadania)
    {
        $this->dataNadania = $dataNadania;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDataNadania() : \DateTimeInterface
    {
        return $this->dataNadania;
    }

    /**
     * @param \DateTimeInterface $dataNadania
     * @return static
     */
    public function withDataNadania(\DateTimeInterface $dataNadania) : static
    {
        $new = clone $this;
        $new->dataNadania = $dataNadania;

        return $new;
    }
}

