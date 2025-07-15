<?php

namespace app\modules\postal\sender\Type;

class CustomsDeclarationType
{
    /**
     * CN type.
     *
     * @var null | \app\modules\postal\sender\Type\CustomsDeclarationTypeEnum
     */
    private ?\app\modules\postal\sender\Type\CustomsDeclarationTypeEnum $type = null;

    /**
     * @var \app\modules\postal\sender\Type\CustomsDeclarationContentEnum
     */
    private \app\modules\postal\sender\Type\CustomsDeclarationContentEnum $content;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\AccompanyingDocumentsType>
     */
    private array $accompanyingDocuments;

    /**
     * @var null | string
     */
    private ?string $explanation = null;

    /**
     * @var null | string
     */
    private ?string $postalCharges = null;

    /**
     * @var null | string
     */
    private ?string $comments = null;

    /**
     * @var null | string
     */
    private ?string $importerReferenceNumber = null;

    /**
     * @var null | string
     */
    private ?string $importerPhoneNumber = null;

    /**
     * Code (ISO 4217) of the currency in which the
     *  values of the items specified in the shipmentContentsDetails
     *  element are expressed.
     *  example: EUR
     *
     * @var string
     */
    private string $currencyCode;

    /**
     * @var non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ShipmentContentsDetailsType>
     */
    private array $shipmentContentsDetails;

    /**
     * @var null | string
     */
    private ?string $customsReferenceNumber = null;

    /**
     * @return null | \app\modules\postal\sender\Type\CustomsDeclarationTypeEnum
     */
    public function getType() : ?\app\modules\postal\sender\Type\CustomsDeclarationTypeEnum
    {
        return $this->type;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\CustomsDeclarationTypeEnum $type
     * @return static
     */
    public function withType(?\app\modules\postal\sender\Type\CustomsDeclarationTypeEnum $type) : static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return \app\modules\postal\sender\Type\CustomsDeclarationContentEnum
     */
    public function getContent() : \app\modules\postal\sender\Type\CustomsDeclarationContentEnum
    {
        return $this->content;
    }

    /**
     * @param \app\modules\postal\sender\Type\CustomsDeclarationContentEnum $content
     * @return static
     */
    public function withContent(\app\modules\postal\sender\Type\CustomsDeclarationContentEnum $content) : static
    {
        $new = clone $this;
        $new->content = $content;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\AccompanyingDocumentsType>
     */
    public function getAccompanyingDocuments() : array
    {
        return $this->accompanyingDocuments;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\AccompanyingDocumentsType> $accompanyingDocuments
     * @return static
     */
    public function withAccompanyingDocuments(array $accompanyingDocuments) : static
    {
        $new = clone $this;
        $new->accompanyingDocuments = $accompanyingDocuments;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getExplanation() : ?string
    {
        return $this->explanation;
    }

    /**
     * @param null | string $explanation
     * @return static
     */
    public function withExplanation(?string $explanation) : static
    {
        $new = clone $this;
        $new->explanation = $explanation;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPostalCharges() : ?string
    {
        return $this->postalCharges;
    }

    /**
     * @param null | string $postalCharges
     * @return static
     */
    public function withPostalCharges(?string $postalCharges) : static
    {
        $new = clone $this;
        $new->postalCharges = $postalCharges;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getComments() : ?string
    {
        return $this->comments;
    }

    /**
     * @param null | string $comments
     * @return static
     */
    public function withComments(?string $comments) : static
    {
        $new = clone $this;
        $new->comments = $comments;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getImporterReferenceNumber() : ?string
    {
        return $this->importerReferenceNumber;
    }

    /**
     * @param null | string $importerReferenceNumber
     * @return static
     */
    public function withImporterReferenceNumber(?string $importerReferenceNumber) : static
    {
        $new = clone $this;
        $new->importerReferenceNumber = $importerReferenceNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getImporterPhoneNumber() : ?string
    {
        return $this->importerPhoneNumber;
    }

    /**
     * @param null | string $importerPhoneNumber
     * @return static
     */
    public function withImporterPhoneNumber(?string $importerPhoneNumber) : static
    {
        $new = clone $this;
        $new->importerPhoneNumber = $importerPhoneNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return static
     */
    public function withCurrencyCode(string $currencyCode) : static
    {
        $new = clone $this;
        $new->currencyCode = $currencyCode;

        return $new;
    }

    /**
     * @return non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ShipmentContentsDetailsType>
     */
    public function getShipmentContentsDetails() : array
    {
        return $this->shipmentContentsDetails;
    }

    /**
     * @param non-empty-array<int<0,max>, \app\modules\postal\sender\Type\ShipmentContentsDetailsType> $shipmentContentsDetails
     * @return static
     */
    public function withShipmentContentsDetails(array $shipmentContentsDetails) : static
    {
        $new = clone $this;
        $new->shipmentContentsDetails = $shipmentContentsDetails;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCustomsReferenceNumber() : ?string
    {
        return $this->customsReferenceNumber;
    }

    /**
     * @param null | string $customsReferenceNumber
     * @return static
     */
    public function withCustomsReferenceNumber(?string $customsReferenceNumber) : static
    {
        $new = clone $this;
        $new->customsReferenceNumber = $customsReferenceNumber;

        return $new;
    }
}

