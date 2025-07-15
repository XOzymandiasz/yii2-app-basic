<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPasswordExpiredDateResponse implements ResultInterface
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $dataWygasniecia;

    /**
     * @return \DateTimeInterface
     */
    public function getDataWygasniecia() : \DateTimeInterface
    {
        return $this->dataWygasniecia;
    }

    /**
     * @param \DateTimeInterface $dataWygasniecia
     * @return static
     */
    public function withDataWygasniecia(\DateTimeInterface $dataWygasniecia) : static
    {
        $new = clone $this;
        $new->dataWygasniecia = $dataWygasniecia;

        return $new;
    }
}

