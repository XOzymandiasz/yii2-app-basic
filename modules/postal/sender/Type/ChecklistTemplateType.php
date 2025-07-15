<?php

namespace app\modules\postal\sender\Type;

class ChecklistTemplateType
{
    /**
     * @var null | int
     */
    private ?int $idChecklistTemplate = null;

    /**
     * @var null | int
     */
    private ?int $idKarta = null;

    /**
     * @var null | string
     */
    private ?string $name = null;

    /**
     * @var null | string
     */
    private ?string $title = null;

    /**
     * @var null | string
     */
    private ?string $description = null;

    /**
     * @var null | string
     */
    private ?string $infoForCourier = null;

    /**
     * @var null | bool
     */
    private ?bool $default = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $validFrom = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $validTo = null;

    /**
     * @var null | mixed
     */
    private mixed $logo = null;

    /**
     * @var null | \app\modules\postal\sender\Type\SerwisPrzesylkaProceduralnaType
     */
    private ?\app\modules\postal\sender\Type\SerwisPrzesylkaProceduralnaType $service = null;

    /**
     * Czynność do wykonania w ramach np. przesyłki
     *  proceduralnej
     *
     * @var array<int<0,max>, \app\modules\postal\sender\Type\AdditionalActivityType>
     */
    private array $additionalActivity;

    /**
     * GUID elementu checklistTemplate. Wartość
     *  wykorzystywana do przekazania rezultatu dla elementu kolekcji.
     *
     * @var null | string
     */
    private ?string $guid = null;

    /**
     * @return null | int
     */
    public function getIdChecklistTemplate() : ?int
    {
        return $this->idChecklistTemplate;
    }

    /**
     * @param null | int $idChecklistTemplate
     * @return static
     */
    public function withIdChecklistTemplate(?int $idChecklistTemplate) : static
    {
        $new = clone $this;
        $new->idChecklistTemplate = $idChecklistTemplate;

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
    public function getTitle() : ?string
    {
        return $this->title;
    }

    /**
     * @param null | string $title
     * @return static
     */
    public function withTitle(?string $title) : static
    {
        $new = clone $this;
        $new->title = $title;

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
     * @return null | string
     */
    public function getInfoForCourier() : ?string
    {
        return $this->infoForCourier;
    }

    /**
     * @param null | string $infoForCourier
     * @return static
     */
    public function withInfoForCourier(?string $infoForCourier) : static
    {
        $new = clone $this;
        $new->infoForCourier = $infoForCourier;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getDefault() : ?bool
    {
        return $this->default;
    }

    /**
     * @param null | bool $default
     * @return static
     */
    public function withDefault(?bool $default) : static
    {
        $new = clone $this;
        $new->default = $default;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getValidFrom() : ?\DateTimeInterface
    {
        return $this->validFrom;
    }

    /**
     * @param null | \DateTimeInterface $validFrom
     * @return static
     */
    public function withValidFrom(?\DateTimeInterface $validFrom) : static
    {
        $new = clone $this;
        $new->validFrom = $validFrom;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getValidTo() : ?\DateTimeInterface
    {
        return $this->validTo;
    }

    /**
     * @param null | \DateTimeInterface $validTo
     * @return static
     */
    public function withValidTo(?\DateTimeInterface $validTo) : static
    {
        $new = clone $this;
        $new->validTo = $validTo;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getLogo() : mixed
    {
        return $this->logo;
    }

    /**
     * @param null | mixed $logo
     * @return static
     */
    public function withLogo(mixed $logo) : static
    {
        $new = clone $this;
        $new->logo = $logo;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\SerwisPrzesylkaProceduralnaType
     */
    public function getService() : ?\app\modules\postal\sender\Type\SerwisPrzesylkaProceduralnaType
    {
        return $this->service;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\SerwisPrzesylkaProceduralnaType $service
     * @return static
     */
    public function withService(?\app\modules\postal\sender\Type\SerwisPrzesylkaProceduralnaType $service) : static
    {
        $new = clone $this;
        $new->service = $service;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\AdditionalActivityType>
     */
    public function getAdditionalActivity() : array
    {
        return $this->additionalActivity;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\AdditionalActivityType> $additionalActivity
     * @return static
     */
    public function withAdditionalActivity(array $additionalActivity) : static
    {
        $new = clone $this;
        $new->additionalActivity = $additionalActivity;

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

