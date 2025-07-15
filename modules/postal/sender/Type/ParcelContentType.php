<?php

namespace app\modules\postal\sender\Type;

class ParcelContentType
{
    /**
     * @var null | int
     */
    private ?int $IdParcelContent = null;

    /**
     * @var null | int
     */
    private ?int $order = null;

    /**
     * @var null | string
     */
    private ?string $name = null;

    /**
     * @var null | string
     */
    private ?string $description = null;

    /**
     * @var null | int
     */
    private ?int $idKarta = null;

    /**
     * GUID elementu parcelContent. Wartość
     *  wykorzystywana do przekazania rezultatu dla elementu kolekcji.
     *
     * @var null | string
     */
    private ?string $guid = null;

    /**
     * @return null | int
     */
    public function getIdParcelContent() : ?int
    {
        return $this->IdParcelContent;
    }

    /**
     * @param null | int $IdParcelContent
     * @return static
     */
    public function withIdParcelContent(?int $IdParcelContent) : static
    {
        $new = clone $this;
        $new->IdParcelContent = $IdParcelContent;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getOrder() : ?int
    {
        return $this->order;
    }

    /**
     * @param null | int $order
     * @return static
     */
    public function withOrder(?int $order) : static
    {
        $new = clone $this;
        $new->order = $order;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return static
     */
    public function withName(?string $name) : static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }

    /**
     * @param null | string $description
     * @return static
     */
    public function withDescription(?string $description) : static
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdKarta() : ?int
    {
        return $this->idKarta;
    }

    /**
     * @param null | int $idKarta
     * @return static
     */
    public function withIdKarta(?int $idKarta) : static
    {
        $new = clone $this;
        $new->idKarta = $idKarta;

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

