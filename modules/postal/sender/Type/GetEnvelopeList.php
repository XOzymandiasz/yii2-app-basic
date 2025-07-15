<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetEnvelopeList implements RequestInterface
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $startDate;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $endDate;

    /**
     * Constructor
     *
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     */
    public function __construct(\DateTimeInterface $startDate, \DateTimeInterface $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate() : \DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
     * @return static
     */
    public function withStartDate(\DateTimeInterface $startDate) : static
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate() : \DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param \DateTimeInterface $endDate
     * @return static
     */
    public function withEndDate(\DateTimeInterface $endDate) : static
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }
}

