<?php

namespace app\modules\postal\sender\Type;

class ShipmentContentsDetailsType
{
    /**
     * @var string
     */
    private string $description;

    /**
     * @var int
     */
    private int $quantity;

    /**
     * Net weight [g].
     *
     * @var null | int
     */
    private ?int $netWeight = null;

    /**
     * Declared value of a given type of goods,
     *  without the decimal point, e.g. 20000 cents.
     *
     * @var int
     */
    private int $declaredValue;

    /**
     * Harmonized System (HS) Code.
     *
     * @var null | string
     */
    private ?string $harmonizedSystemCode = null;

    /**
     * Code (ISO 3166) of the country of origin of
     *  the described content.
     *  example: US
     *
     * @var null | string
     */
    private ?string $originLocationCode = null;

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return static
     */
    public function withDescription(string $description) : static
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return static
     */
    public function withQuantity(int $quantity) : static
    {
        $new = clone $this;
        $new->quantity = $quantity;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getNetWeight() : ?int
    {
        return $this->netWeight;
    }

    /**
     * @param null | int $netWeight
     * @return static
     */
    public function withNetWeight(?int $netWeight) : static
    {
        $new = clone $this;
        $new->netWeight = $netWeight;

        return $new;
    }

    /**
     * @return int
     */
    public function getDeclaredValue() : int
    {
        return $this->declaredValue;
    }

    /**
     * @param int $declaredValue
     * @return static
     */
    public function withDeclaredValue(int $declaredValue) : static
    {
        $new = clone $this;
        $new->declaredValue = $declaredValue;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getHarmonizedSystemCode() : ?string
    {
        return $this->harmonizedSystemCode;
    }

    /**
     * @param null | string $harmonizedSystemCode
     * @return static
     */
    public function withHarmonizedSystemCode(?string $harmonizedSystemCode) : static
    {
        $new = clone $this;
        $new->harmonizedSystemCode = $harmonizedSystemCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOriginLocationCode() : ?string
    {
        return $this->originLocationCode;
    }

    /**
     * @param null | string $originLocationCode
     * @return static
     */
    public function withOriginLocationCode(?string $originLocationCode) : static
    {
        $new = clone $this;
        $new->originLocationCode = $originLocationCode;

        return $new;
    }
}

