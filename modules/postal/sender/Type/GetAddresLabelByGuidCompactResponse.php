<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetAddresLabelByGuidCompactResponse implements ResultInterface
{
    /**
     * @var null | mixed
     */
    private mixed $pdfContent = null;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\ErrorType>
     */
    private array $error;

    /**
     * @return null | mixed
     */
    public function getPdfContent() : mixed
    {
        return $this->pdfContent;
    }

    /**
     * @param null | mixed $pdfContent
     * @return static
     */
    public function withPdfContent(mixed $pdfContent) : static
    {
        $new = clone $this;
        $new->pdfContent = $pdfContent;

        return $new;
    }

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
}

