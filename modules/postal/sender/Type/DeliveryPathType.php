<?php

namespace app\modules\postal\sender\Type;

class DeliveryPathType
{
    /**
     * @var null | string
     */
    private ?string $endNode = null;

    /**
     * @var null | string
     */
    private ?string $targetingNode = null;

    /**
     * @var null | string
     */
    private ?string $assistantNode = null;

    /**
     * @var null | string
     */
    private ?string $reloadingPoint = null;

    /**
     * @var null | string
     */
    private ?string $postOffice = null;

    /**
     * @var null | string
     */
    private ?string $deliveryRegion = null;

    /**
     * @return null | string
     */
    public function getEndNode() : ?string
    {
        return $this->endNode;
    }

    /**
     * @param null | string $endNode
     * @return static
     */
    public function withEndNode(?string $endNode) : static
    {
        $new = clone $this;
        $new->endNode = $endNode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTargetingNode() : ?string
    {
        return $this->targetingNode;
    }

    /**
     * @param null | string $targetingNode
     * @return static
     */
    public function withTargetingNode(?string $targetingNode) : static
    {
        $new = clone $this;
        $new->targetingNode = $targetingNode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAssistantNode() : ?string
    {
        return $this->assistantNode;
    }

    /**
     * @param null | string $assistantNode
     * @return static
     */
    public function withAssistantNode(?string $assistantNode) : static
    {
        $new = clone $this;
        $new->assistantNode = $assistantNode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReloadingPoint() : ?string
    {
        return $this->reloadingPoint;
    }

    /**
     * @param null | string $reloadingPoint
     * @return static
     */
    public function withReloadingPoint(?string $reloadingPoint) : static
    {
        $new = clone $this;
        $new->reloadingPoint = $reloadingPoint;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPostOffice() : ?string
    {
        return $this->postOffice;
    }

    /**
     * @param null | string $postOffice
     * @return static
     */
    public function withPostOffice(?string $postOffice) : static
    {
        $new = clone $this;
        $new->postOffice = $postOffice;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDeliveryRegion() : ?string
    {
        return $this->deliveryRegion;
    }

    /**
     * @param null | string $deliveryRegion
     * @return static
     */
    public function withDeliveryRegion(?string $deliveryRegion) : static
    {
        $new = clone $this;
        $new->deliveryRegion = $deliveryRegion;

        return $new;
    }
}

