<?php

namespace app\modules\postal\sender\Type;

class ObszarAdresowyResponseType
{
    /**
     * @var null | bool
     */
    private ?bool $isObszarMiasto = null;

    /**
     * @var null | string
     */
    private ?string $guid = null;

    /**
     * @return null | bool
     */
    public function getIsObszarMiasto() : ?bool
    {
        return $this->isObszarMiasto;
    }

    /**
     * @param null | bool $isObszarMiasto
     * @return static
     */
    public function withIsObszarMiasto(?bool $isObszarMiasto) : static
    {
        $new = clone $this;
        $new->isObszarMiasto = $isObszarMiasto;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGuid() : ?string
    {
        return $this->guid;
    }

    /**
     * @param null | string $guid
     * @return static
     */
    public function withGuid(?string $guid) : static
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }
}

