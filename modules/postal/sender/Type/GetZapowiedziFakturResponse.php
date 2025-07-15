<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetZapowiedziFakturResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, mixed>
     */
    private array $zapowiedzFakturyZipFile;

    /**
     * @return array<int<0,max>, mixed>
     */
    public function getZapowiedzFakturyZipFile() : array
    {
        return $this->zapowiedzFakturyZipFile;
    }

    /**
     * @param array<int<0,max>, mixed> $zapowiedzFakturyZipFile
     * @return static
     */
    public function withZapowiedzFakturyZipFile(array $zapowiedzFakturyZipFile) : static
    {
        $new = clone $this;
        $new->zapowiedzFakturyZipFile = $zapowiedzFakturyZipFile;

        return $new;
    }
}

