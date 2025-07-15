<?php

namespace app\modules\postal\sender\Type;

class EZDOPakietType
{
    /**
     * @var null | int
     */
    private ?int $idEZDOPakiet = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $exported = null;

    /**
     * @var null | string
     */
    private ?string $idEZDOFile = null;

    /**
     * @return null | int
     */
    public function getIdEZDOPakiet() : ?int
    {
        return $this->idEZDOPakiet;
    }

    /**
     * @param null | int $idEZDOPakiet
     * @return static
     */
    public function withIdEZDOPakiet(?int $idEZDOPakiet) : static
    {
        $new = clone $this;
        $new->idEZDOPakiet = $idEZDOPakiet;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getExported() : ?\DateTimeInterface
    {
        return $this->exported;
    }

    /**
     * @param null | \DateTimeInterface $exported
     * @return static
     */
    public function withExported(?\DateTimeInterface $exported) : static
    {
        $new = clone $this;
        $new->exported = $exported;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIdEZDOFile() : ?string
    {
        return $this->idEZDOFile;
    }

    /**
     * @param null | string $idEZDOFile
     * @return static
     */
    public function withIdEZDOFile(?string $idEZDOFile) : static
    {
        $new = clone $this;
        $new->idEZDOFile = $idEZDOFile;

        return $new;
    }
}

