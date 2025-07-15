<?php

namespace app\modules\postal\sender\Type;

class PotwierdzenieEDoreczeniaType
{
    /**
     * @var \app\modules\postal\sender\Type\ESposobPowiadomieniaType
     */
    private \app\modules\postal\sender\Type\ESposobPowiadomieniaType $sposob;

    /**
     * @var string
     */
    private string $kontakt;

    /**
     * @return \app\modules\postal\sender\Type\ESposobPowiadomieniaType
     */
    public function getSposob() : \app\modules\postal\sender\Type\ESposobPowiadomieniaType
    {
        return $this->sposob;
    }

    /**
     * @param \app\modules\postal\sender\Type\ESposobPowiadomieniaType $sposob
     * @return static
     */
    public function withSposob(\app\modules\postal\sender\Type\ESposobPowiadomieniaType $sposob) : static
    {
        $new = clone $this;
        $new->sposob = $sposob;

        return $new;
    }

    /**
     * @return string
     */
    public function getKontakt() : string
    {
        return $this->kontakt;
    }

    /**
     * @param string $kontakt
     * @return static
     */
    public function withKontakt(string $kontakt) : static
    {
        $new = clone $this;
        $new->kontakt = $kontakt;

        return $new;
    }
}

