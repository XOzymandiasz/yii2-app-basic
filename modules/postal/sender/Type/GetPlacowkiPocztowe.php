<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPlacowkiPocztowe implements RequestInterface
{
    /**
     * @var \app\modules\postal\sender\Type\IdWojewodztwoType
     */
    private \app\modules\postal\sender\Type\IdWojewodztwoType $idWojewodztwo;

    /**
     * Constructor
     *
     * @param \app\modules\postal\sender\Type\IdWojewodztwoType $idWojewodztwo
     */
    public function __construct(\app\modules\postal\sender\Type\IdWojewodztwoType $idWojewodztwo)
    {
        $this->idWojewodztwo = $idWojewodztwo;
    }

    /**
     * @return \app\modules\postal\sender\Type\IdWojewodztwoType
     */
    public function getIdWojewodztwo() : \app\modules\postal\sender\Type\IdWojewodztwoType
    {
        return $this->idWojewodztwo;
    }

    /**
     * @param \app\modules\postal\sender\Type\IdWojewodztwoType $idWojewodztwo
     * @return static
     */
    public function withIdWojewodztwo(\app\modules\postal\sender\Type\IdWojewodztwoType $idWojewodztwo) : static
    {
        $new = clone $this;
        $new->idWojewodztwo = $idWojewodztwo;

        return $new;
    }
}

