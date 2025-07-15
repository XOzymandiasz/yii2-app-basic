<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddOdwolanieDoReklamacjiResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @var array<int<0,499>, \app\modules\postal\sender\Type\ReklamacjaInfoType>
     */
    private array $reklamacjaInfo;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    public function getError() : array
    {
        return $this->error;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\ErrorType> $error
     * @return static
     */
    public function withError(array $error) : static
    {
        $new = clone $this;
        $new->error = $error;

        return $new;
    }

    /**
     * @return array<int<0,499>, \app\modules\postal\sender\Type\ReklamacjaInfoType>
     */
    public function getReklamacjaInfo() : array
    {
        return $this->reklamacjaInfo;
    }

    /**
     * @param array<int<0,499>, \app\modules\postal\sender\Type\ReklamacjaInfoType> $reklamacjaInfo
     * @return static
     */
    public function withReklamacjaInfo(array $reklamacjaInfo) : static
    {
        $new = clone $this;
        $new->reklamacjaInfo = $reklamacjaInfo;

        return $new;
    }
}

