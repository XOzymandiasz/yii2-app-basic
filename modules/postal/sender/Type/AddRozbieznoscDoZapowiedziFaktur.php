<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddRozbieznoscDoZapowiedziFaktur implements RequestInterface
{
    /**
     * @var non-empty-array<int<0,9>, mixed>
     */
    private array $rozbieznosciZipFile;

    /**
     * Constructor
     *
     * @param non-empty-array<int<0,9>, mixed> $rozbieznosciZipFile
     */
    public function __construct(array $rozbieznosciZipFile)
    {
        $this->rozbieznosciZipFile = $rozbieznosciZipFile;
    }

    /**
     * @return non-empty-array<int<0,9>, mixed>
     */
    public function getRozbieznosciZipFile() : array
    {
        return $this->rozbieznosciZipFile;
    }

    /**
     * @param non-empty-array<int<0,9>, mixed> $rozbieznosciZipFile
     * @return static
     */
    public function withRozbieznosciZipFile(array $rozbieznosciZipFile) : static
    {
        $new = clone $this;
        $new->rozbieznosciZipFile = $rozbieznosciZipFile;

        return $new;
    }
}

