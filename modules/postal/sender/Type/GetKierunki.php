<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetKierunki implements RequestInterface
{
    /**
     * @var string
     */
    private string $plan;

    /**
     * @var string
     */
    private string $prefixKodPocztowy;

    /**
     * Constructor
     *
     * @param string $plan
     * @param string $prefixKodPocztowy
     */
    public function __construct(string $plan, string $prefixKodPocztowy)
    {
        $this->plan = $plan;
        $this->prefixKodPocztowy = $prefixKodPocztowy;
    }

    /**
     * @return string
     */
    public function getPlan() : string
    {
        return $this->plan;
    }

    /**
     * @param string $plan
     * @return static
     */
    public function withPlan(string $plan) : static
    {
        $new = clone $this;
        $new->plan = $plan;

        return $new;
    }

    /**
     * @return string
     */
    public function getPrefixKodPocztowy() : string
    {
        return $this->prefixKodPocztowy;
    }

    /**
     * @param string $prefixKodPocztowy
     * @return static
     */
    public function withPrefixKodPocztowy(string $prefixKodPocztowy) : static
    {
        $new = clone $this;
        $new->prefixKodPocztowy = $prefixKodPocztowy;

        return $new;
    }
}

