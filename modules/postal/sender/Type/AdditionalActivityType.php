<?php

namespace app\modules\postal\sender\Type;

class AdditionalActivityType
{
    /**
     * identyfikator czynności
     *
     * @var null | int
     */
    private ?int $idActivity = null;

    /**
     * Nazwa czynności do wykonania
     *
     * @var null | string
     */
    private ?string $name = null;

    /**
     * opis czynności do wykonania
     *
     * @var null | string
     */
    private ?string $description = null;

    /**
     * znacznik czy czynnośc jest krytyczna. brak
     *  wykonania czynności oznaczonej jako krytyczna przerywa proces
     *  doręczenia.
     *
     * @var null | bool
     */
    private ?bool $critical = null;

    /**
     * Element określa kolejność dla czynności do
     *  wykonania w sekwecji czynności.
     *
     * @var null | int
     */
    private ?int $order = null;

    /**
     * Termin ważności, należy podać datę od kiedy
     *  dana czynność jest dostępna, liczone jest od godziny 0:00:00.0
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $validFrom = null;

    /**
     * Termin ważności, należy podać datę do kiedy
     *  dana czynność jest dostępna, liczone jest do godziny
     *  23:59:59.999
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $validTo = null;

    /**
     * @return null | int
     */
    public function getIdActivity() : ?int
    {
        return $this->idActivity;
    }

    /**
     * @param null | int $idActivity
     * @return static
     */
    public function withIdActivity(?int $idActivity) : static
    {
        $new = clone $this;
        $new->idActivity = $idActivity;

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
     * @return null | bool
     */
    public function getCritical() : ?bool
    {
        return $this->critical;
    }

    /**
     * @param null | bool $critical
     * @return static
     */
    public function withCritical(?bool $critical) : static
    {
        $new = clone $this;
        $new->critical = $critical;

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
}

