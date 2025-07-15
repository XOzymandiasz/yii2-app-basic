<?php

namespace app\modules\postal\sender\Type;

class AccompanyingDocumentsType
{
    /**
     * @var \app\modules\postal\sender\Type\AccompanyingDocumentsEnum
     */
    private \app\modules\postal\sender\Type\AccompanyingDocumentsEnum $type;

    /**
     * @var string
     */
    private string $number;

    /**
     * @return \app\modules\postal\sender\Type\AccompanyingDocumentsEnum
     */
    public function getType() : \app\modules\postal\sender\Type\AccompanyingDocumentsEnum
    {
        return $this->type;
    }

    /**
     * @param \app\modules\postal\sender\Type\AccompanyingDocumentsEnum $type
     * @return static
     */
    public function withType(\app\modules\postal\sender\Type\AccompanyingDocumentsEnum $type) : static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return static
     */
    public function withNumber(string $number) : static
    {
        $new = clone $this;
        $new->number = $number;

        return $new;
    }
}

