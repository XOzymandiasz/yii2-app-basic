<?php

namespace app\modules\postal\sender\Type;

class PrintType
{
    /**
     * @var \app\modules\postal\sender\Type\PrintKindEnum
     */
    private \app\modules\postal\sender\Type\PrintKindEnum $kind;

    /**
     * @var \app\modules\postal\sender\Type\PrintMethodEnum
     */
    private \app\modules\postal\sender\Type\PrintMethodEnum $method;

    /**
     * @var null | \app\modules\postal\sender\Type\PrintFormatEnum
     */
    private ?\app\modules\postal\sender\Type\PrintFormatEnum $format = null;

    /**
     * @var null | \app\modules\postal\sender\Type\PrintResolutionEnum
     */
    private ?\app\modules\postal\sender\Type\PrintResolutionEnum $resolution = null;

    /**
     * @return \app\modules\postal\sender\Type\PrintKindEnum
     */
    public function getKind() : \app\modules\postal\sender\Type\PrintKindEnum
    {
        return $this->kind;
    }

    /**
     * @param \app\modules\postal\sender\Type\PrintKindEnum $kind
     * @return static
     */
    public function withKind(\app\modules\postal\sender\Type\PrintKindEnum $kind) : static
    {
        $new = clone $this;
        $new->kind = $kind;

        return $new;
    }

    /**
     * @return \app\modules\postal\sender\Type\PrintMethodEnum
     */
    public function getMethod() : \app\modules\postal\sender\Type\PrintMethodEnum
    {
        return $this->method;
    }

    /**
     * @param \app\modules\postal\sender\Type\PrintMethodEnum $method
     * @return static
     */
    public function withMethod(\app\modules\postal\sender\Type\PrintMethodEnum $method) : static
    {
        $new = clone $this;
        $new->method = $method;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\PrintFormatEnum
     */
    public function getFormat() : ?\app\modules\postal\sender\Type\PrintFormatEnum
    {
        return $this->format;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PrintFormatEnum $format
     * @return static
     */
    public function withFormat(?\app\modules\postal\sender\Type\PrintFormatEnum $format) : static
    {
        $new = clone $this;
        $new->format = $format;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\PrintResolutionEnum
     */
    public function getResolution() : ?\app\modules\postal\sender\Type\PrintResolutionEnum
    {
        return $this->resolution;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PrintResolutionEnum $resolution
     * @return static
     */
    public function withResolution(?\app\modules\postal\sender\Type\PrintResolutionEnum $resolution) : static
    {
        $new = clone $this;
        $new->resolution = $resolution;

        return $new;
    }
}

