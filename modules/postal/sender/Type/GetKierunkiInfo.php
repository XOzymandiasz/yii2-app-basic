<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetKierunkiInfo implements RequestInterface
{
    /**
     * @var string
     */
    private string $plan;

    /**
     * Constructor
     *
     * @param string $plan
     */
    public function __construct(string $plan)
    {
        $this->plan = $plan;
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
}

