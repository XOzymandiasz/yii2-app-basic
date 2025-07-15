<?php

namespace app\modules\postal\sender\Type;

class PotwierdzenieDoreczeniaType
{
    /**
     * @var null | \app\modules\postal\sender\Type\SposobDoreczeniaPotwierdzeniaType
     */
    private ?\app\modules\postal\sender\Type\SposobDoreczeniaPotwierdzeniaType $sposob = null;

    /**
     * @var null | string
     */
    private ?string $kontakt = null;

    /**
     * @return null | \app\modules\postal\sender\Type\SposobDoreczeniaPotwierdzeniaType
     */
    public function getSposob() : ?\app\modules\postal\sender\Type\SposobDoreczeniaPotwierdzeniaType
    {
        return $this->sposob;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\SposobDoreczeniaPotwierdzeniaType $sposob
     * @return static
     */
    public function withSposob(?\app\modules\postal\sender\Type\SposobDoreczeniaPotwierdzeniaType $sposob) : static
    {
        $new = clone $this;
        $new->sposob = $sposob;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getKontakt() : ?string
    {
        return $this->kontakt;
    }

    /**
     * @param null | string $kontakt
     * @return static
     */
    public function withKontakt(?string $kontakt) : static
    {
        $new = clone $this;
        $new->kontakt = $kontakt;

        return $new;
    }
}

