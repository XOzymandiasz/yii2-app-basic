<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetWplatyCKP implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $numerNadania = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $startDate = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $stopDate = null;

    /**
     * Constructor
     *
     * @param null | string $numerNadania
     * @param null | \DateTimeInterface $startDate
     * @param null | \DateTimeInterface $stopDate
     */
    public function __construct(?string $numerNadania, ?\DateTimeInterface $startDate, ?\DateTimeInterface $stopDate)
    {
        $this->numerNadania = $numerNadania;
        $this->startDate = $startDate;
        $this->stopDate = $stopDate;
    }

    /**
     * @return null | string
     */
    public function getNumerNadania() : ?string
    {
        return $this->numerNadania;
    }

    /**
     * @param null | string $numerNadania
     * @return static
     */
    public function withNumerNadania(?string $numerNadania) : static
    {
        $new = clone $this;
        $new->numerNadania = $numerNadania;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getStartDate() : ?\DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param null | \DateTimeInterface $startDate
     * @return static
     */
    public function withStartDate(?\DateTimeInterface $startDate) : static
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getStopDate() : ?\DateTimeInterface
    {
        return $this->stopDate;
    }

    /**
     * @param null | \DateTimeInterface $stopDate
     * @return static
     */
    public function withStopDate(?\DateTimeInterface $stopDate) : static
    {
        $new = clone $this;
        $new->stopDate = $stopDate;

        return $new;
    }
}

