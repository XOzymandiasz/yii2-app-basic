<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEZDOListResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\EZDOPakietType>
     */
    private array $EZDOPakiet;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\EZDOPakietType>
     */
    public function getEZDOPakiet() : array
    {
        return $this->EZDOPakiet;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\EZDOPakietType> $EZDOPakiet
     * @return static
     */
    public function withEZDOPakiet(array $EZDOPakiet) : static
    {
        $new = clone $this;
        $new->EZDOPakiet = $EZDOPakiet;

        return $new;
    }
}

