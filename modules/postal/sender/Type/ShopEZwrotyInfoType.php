<?php

namespace app\modules\postal\sender\Type;

class ShopEZwrotyInfoType
{
    /**
     * @var null | int
     */
    private ?int $idShop = null;

    /**
     * @var null | string
     */
    private ?string $przyjaznaNazwa = null;

    /**
     * @var null | bool
     */
    private ?bool $availableOnWebsite = null;

    /**
     * @var null | string
     */
    private ?string $nip = null;

    /**
     * @return null | int
     */
    public function getIdShop() : ?int
    {
        return $this->idShop;
    }

    /**
     * @param null | int $idShop
     * @return static
     */
    public function withIdShop(?int $idShop) : static
    {
        $new = clone $this;
        $new->idShop = $idShop;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPrzyjaznaNazwa() : ?string
    {
        return $this->przyjaznaNazwa;
    }

    /**
     * @param null | string $przyjaznaNazwa
     * @return static
     */
    public function withPrzyjaznaNazwa(?string $przyjaznaNazwa) : static
    {
        $new = clone $this;
        $new->przyjaznaNazwa = $przyjaznaNazwa;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getAvailableOnWebsite() : ?bool
    {
        return $this->availableOnWebsite;
    }

    /**
     * @param null | bool $availableOnWebsite
     * @return static
     */
    public function withAvailableOnWebsite(?bool $availableOnWebsite) : static
    {
        $new = clone $this;
        $new->availableOnWebsite = $availableOnWebsite;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNip() : ?string
    {
        return $this->nip;
    }

    /**
     * @param null | string $nip
     * @return static
     */
    public function withNip(?string $nip) : static
    {
        $new = clone $this;
        $new->nip = $nip;

        return $new;
    }
}

