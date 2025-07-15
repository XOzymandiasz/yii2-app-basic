<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetReklamacje implements RequestInterface
{
    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dataRozpatrzenia = null;

    /**
     * @var null | string
     */
    private ?string $guidPrzesylki = null;

    /**
     * @var null | \app\modules\postal\sender\Type\DataZlozeniaType
     */
    private ?\app\modules\postal\sender\Type\DataZlozeniaType $dataZlozenia = null;

    /**
     * Constructor
     *
     * @param null | \DateTimeInterface $dataRozpatrzenia
     * @param null | string $guidPrzesylki
     * @param null | \app\modules\postal\sender\Type\DataZlozeniaType $dataZlozenia
     */
    public function __construct(?\DateTimeInterface $dataRozpatrzenia, ?string $guidPrzesylki, ?\app\modules\postal\sender\Type\DataZlozeniaType $dataZlozenia)
    {
        $this->dataRozpatrzenia = $dataRozpatrzenia;
        $this->guidPrzesylki = $guidPrzesylki;
        $this->dataZlozenia = $dataZlozenia;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDataRozpatrzenia() : ?\DateTimeInterface
    {
        return $this->dataRozpatrzenia;
    }

    /**
     * @param null | \DateTimeInterface $dataRozpatrzenia
     * @return static
     */
    public function withDataRozpatrzenia(?\DateTimeInterface $dataRozpatrzenia) : static
    {
        $new = clone $this;
        $new->dataRozpatrzenia = $dataRozpatrzenia;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGuidPrzesylki() : ?string
    {
        return $this->guidPrzesylki;
    }

    /**
     * @param null | string $guidPrzesylki
     * @return static
     */
    public function withGuidPrzesylki(?string $guidPrzesylki) : static
    {
        $new = clone $this;
        $new->guidPrzesylki = $guidPrzesylki;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\DataZlozeniaType
     */
    public function getDataZlozenia() : ?\app\modules\postal\sender\Type\DataZlozeniaType
    {
        return $this->dataZlozenia;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\DataZlozeniaType $dataZlozenia
     * @return static
     */
    public function withDataZlozenia(?\app\modules\postal\sender\Type\DataZlozeniaType $dataZlozenia) : static
    {
        $new = clone $this;
        $new->dataZlozenia = $dataZlozenia;

        return $new;
    }
}

