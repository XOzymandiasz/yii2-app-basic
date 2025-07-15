<?php

namespace app\modules\postal\sender\Type;

class AddressLabelContent
{
    /**
     * @var mixed
     */
    private mixed $pdfContent;

    /**
     * @var null | string
     */
    private ?string $nrNadania = null;

    /**
     * @var null | string
     */
    private ?string $guid = null;

    /**
     * @return mixed
     */
    public function getPdfContent() : mixed
    {
        return $this->pdfContent;
    }

    /**
     * @param mixed $pdfContent
     * @return static
     */
    public function withPdfContent(mixed $pdfContent) : static
    {
        $new = clone $this;
        $new->pdfContent = $pdfContent;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNrNadania() : ?string
    {
        return $this->nrNadania;
    }

    /**
     * @param null | string $nrNadania
     * @return static
     */
    public function withNrNadania(?string $nrNadania) : static
    {
        $new = clone $this;
        $new->nrNadania = $nrNadania;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGuid() : ?string
    {
        return $this->guid;
    }

    /**
     * @param null | string $guid
     * @return static
     */
    public function withGuid(?string $guid) : static
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }
}

