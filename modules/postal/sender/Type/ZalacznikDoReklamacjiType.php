<?php

namespace app\modules\postal\sender\Type;

class ZalacznikDoReklamacjiType
{
    /**
     * @var mixed
     */
    private mixed $fileContent;

    /**
     * @var string
     */
    private string $fileName;

    /**
     * @var null | string
     */
    private ?string $fileDesc = null;

    /**
     * @return mixed
     */
    public function getFileContent() : mixed
    {
        return $this->fileContent;
    }

    /**
     * @param mixed $fileContent
     * @return static
     */
    public function withFileContent(mixed $fileContent) : static
    {
        $new = clone $this;
        $new->fileContent = $fileContent;

        return $new;
    }

    /**
     * @return string
     */
    public function getFileName() : string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return static
     */
    public function withFileName(string $fileName) : static
    {
        $new = clone $this;
        $new->fileName = $fileName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFileDesc() : ?string
    {
        return $this->fileDesc;
    }

    /**
     * @param null | string $fileDesc
     * @return static
     */
    public function withFileDesc(?string $fileDesc) : static
    {
        $new = clone $this;
        $new->fileDesc = $fileDesc;

        return $new;
    }
}

