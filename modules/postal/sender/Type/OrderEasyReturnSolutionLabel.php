<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OrderEasyReturnSolutionLabel implements RequestInterface
{
    /**
     * @var \app\modules\postal\sender\Type\AddressType
     */
    private \app\modules\postal\sender\Type\AddressType $senderAddress;

    /**
     * @var \app\modules\postal\sender\Type\AddressType
     */
    private \app\modules\postal\sender\Type\AddressType $recipientAddress;

    /**
     * Shipment weight [g].
     *
     * @var null | int
     */
    private ?int $weight = null;

    /**
     * @var null | \app\modules\postal\sender\Type\CustomsDeclarationType
     */
    private ?\app\modules\postal\sender\Type\CustomsDeclarationType $customsDeclaration = null;

    /**
     * If not set, getPrintForParcel method should
     *  be used to get label.
     *
     * @var null | \app\modules\postal\sender\Type\DeliveryMethodType
     */
    private ?\app\modules\postal\sender\Type\DeliveryMethodType $deliveryMethod = null;

    /**
     * Description.
     *  maxLength: 30
     *
     * @var null | string
     */
    private ?string $description = null;

    /**
     * Constructor
     *
     * @param \app\modules\postal\sender\Type\AddressType $senderAddress
     * @param \app\modules\postal\sender\Type\AddressType $recipientAddress
     * @param null | int $weight
     * @param null | \app\modules\postal\sender\Type\CustomsDeclarationType $customsDeclaration
     * @param null | \app\modules\postal\sender\Type\DeliveryMethodType $deliveryMethod
     * @param null | string $description
     */
    public function __construct(\app\modules\postal\sender\Type\AddressType $senderAddress, \app\modules\postal\sender\Type\AddressType $recipientAddress, ?int $weight, ?\app\modules\postal\sender\Type\CustomsDeclarationType $customsDeclaration, ?\app\modules\postal\sender\Type\DeliveryMethodType $deliveryMethod, ?string $description)
    {
        $this->senderAddress = $senderAddress;
        $this->recipientAddress = $recipientAddress;
        $this->weight = $weight;
        $this->customsDeclaration = $customsDeclaration;
        $this->deliveryMethod = $deliveryMethod;
        $this->description = $description;
    }

    /**
     * @return \app\modules\postal\sender\Type\AddressType
     */
    public function getSenderAddress() : \app\modules\postal\sender\Type\AddressType
    {
        return $this->senderAddress;
    }

    /**
     * @param \app\modules\postal\sender\Type\AddressType $senderAddress
     * @return static
     */
    public function withSenderAddress(\app\modules\postal\sender\Type\AddressType $senderAddress) : static
    {
        $new = clone $this;
        $new->senderAddress = $senderAddress;

        return $new;
    }

    /**
     * @return \app\modules\postal\sender\Type\AddressType
     */
    public function getRecipientAddress() : \app\modules\postal\sender\Type\AddressType
    {
        return $this->recipientAddress;
    }

    /**
     * @param \app\modules\postal\sender\Type\AddressType $recipientAddress
     * @return static
     */
    public function withRecipientAddress(\app\modules\postal\sender\Type\AddressType $recipientAddress) : static
    {
        $new = clone $this;
        $new->recipientAddress = $recipientAddress;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getWeight() : ?int
    {
        return $this->weight;
    }

    /**
     * @param null | int $weight
     * @return static
     */
    public function withWeight(?int $weight) : static
    {
        $new = clone $this;
        $new->weight = $weight;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\CustomsDeclarationType
     */
    public function getCustomsDeclaration() : ?\app\modules\postal\sender\Type\CustomsDeclarationType
    {
        return $this->customsDeclaration;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\CustomsDeclarationType $customsDeclaration
     * @return static
     */
    public function withCustomsDeclaration(?\app\modules\postal\sender\Type\CustomsDeclarationType $customsDeclaration) : static
    {
        $new = clone $this;
        $new->customsDeclaration = $customsDeclaration;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\DeliveryMethodType
     */
    public function getDeliveryMethod() : ?\app\modules\postal\sender\Type\DeliveryMethodType
    {
        return $this->deliveryMethod;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\DeliveryMethodType $deliveryMethod
     * @return static
     */
    public function withDeliveryMethod(?\app\modules\postal\sender\Type\DeliveryMethodType $deliveryMethod) : static
    {
        $new = clone $this;
        $new->deliveryMethod = $deliveryMethod;

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
}

