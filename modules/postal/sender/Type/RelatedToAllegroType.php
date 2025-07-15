<?php

namespace app\modules\postal\sender\Type;

class RelatedToAllegroType
{
    /**
     * Id transakcji (MS), deal (WebAPI) lub order
     *  (RestAPI)
     *
     * @var null | string
     */
    private ?string $id = null;

    /**
     * Identyfikator sprzedającego w serwisie Allegro.
     *
     * @var null | string
     */
    private ?string $sellerId = null;

    /**
     * Źródło identyfikatora: MS - Menedżer
     *  Sprzedaży
     *  Allegro, WEB_API - WebAPI Allegro,
     *  REST_API - RestAPI Allegro.
     *
     * @var null | \app\modules\postal\sender\Type\RelatedToAllegroChannelType
     */
    private ?\app\modules\postal\sender\Type\RelatedToAllegroChannelType $channel = null;

    /**
     * Identyfikator rodzaju dostawy, gdzie dla
     *  źródła: MS - nazwa rodzaju dostawy, WEB_API
     *  - id postaci liczby,
     *  REST_API - id postaci
     *  guid
     *
     * @var null | string
     */
    private ?string $deliveryMethod = null;

    /**
     * @return null | string
     */
    public function getId() : ?string
    {
        return $this->id;
    }

    /**
     * @param null | string $id
     * @return static
     */
    public function withId(?string $id) : static
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSellerId() : ?string
    {
        return $this->sellerId;
    }

    /**
     * @param null | string $sellerId
     * @return static
     */
    public function withSellerId(?string $sellerId) : static
    {
        $new = clone $this;
        $new->sellerId = $sellerId;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\RelatedToAllegroChannelType
     */
    public function getChannel() : ?\app\modules\postal\sender\Type\RelatedToAllegroChannelType
    {
        return $this->channel;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\RelatedToAllegroChannelType $channel
     * @return static
     */
    public function withChannel(?\app\modules\postal\sender\Type\RelatedToAllegroChannelType $channel) : static
    {
        $new = clone $this;
        $new->channel = $channel;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDeliveryMethod() : ?string
    {
        return $this->deliveryMethod;
    }

    /**
     * @param null | string $deliveryMethod
     * @return static
     */
    public function withDeliveryMethod(?string $deliveryMethod) : static
    {
        $new = clone $this;
        $new->deliveryMethod = $deliveryMethod;

        return $new;
    }
}

