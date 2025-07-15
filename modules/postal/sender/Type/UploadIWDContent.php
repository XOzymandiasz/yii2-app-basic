<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UploadIWDContent implements RequestInterface
{
    /**
     * @var null | int
     */
    private ?int $urzadNadania = null;

    /**
     * @var mixed
     */
    private mixed $IWDContent;

    /**
     * Constructor
     *
     * @param null | int $urzadNadania
     * @param mixed $IWDContent
     */
    public function __construct(?int $urzadNadania, mixed $IWDContent)
    {
        $this->urzadNadania = $urzadNadania;
        $this->IWDContent = $IWDContent;
    }

    /**
     * @return null | int
     */
    public function getUrzadNadania() : ?int
    {
        return $this->urzadNadania;
    }

    /**
     * @param null | int $urzadNadania
     * @return static
     */
    public function withUrzadNadania(?int $urzadNadania) : static
    {
        $new = clone $this;
        $new->urzadNadania = $urzadNadania;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getIWDContent() : mixed
    {
        return $this->IWDContent;
    }

    /**
     * @param mixed $IWDContent
     * @return static
     */
    public function withIWDContent(mixed $IWDContent) : static
    {
        $new = clone $this;
        $new->IWDContent = $IWDContent;

        return $new;
    }
}

