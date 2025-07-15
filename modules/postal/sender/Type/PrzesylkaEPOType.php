<?php

namespace app\modules\postal\sender\Type;

class PrzesylkaEPOType
{
    /**
     * @var null | \app\modules\postal\sender\Type\EPOInfoType
     */
    private ?\app\modules\postal\sender\Type\EPOInfoType $EPOInfo = null;

    /**
     * @var null | mixed
     */
    private mixed $biometricSignatureContent = null;

    /**
     * 10: First version (to September 2019)
     *  20: Second
     *  version (since October 2019)
     *
     * @var null | int
     */
    private ?int $version = null;

    /**
     * @var null | string
     */
    private ?string $guid = null;

    /**
     * @var null | string
     */
    private ?string $numerNadania = null;

    /**
     * @var null | \app\modules\postal\sender\Type\StatusEPOEnum
     */
    private ?\app\modules\postal\sender\Type\StatusEPOEnum $statusEPO = null;

    /**
     * @return null | \app\modules\postal\sender\Type\EPOInfoType
     */
    public function getEPOInfo() : ?\app\modules\postal\sender\Type\EPOInfoType
    {
        return $this->EPOInfo;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\EPOInfoType $EPOInfo
     * @return static
     */
    public function withEPOInfo(?\app\modules\postal\sender\Type\EPOInfoType $EPOInfo) : static
    {
        $new = clone $this;
        $new->EPOInfo = $EPOInfo;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getBiometricSignatureContent() : mixed
    {
        return $this->biometricSignatureContent;
    }

    /**
     * @param null | mixed $biometricSignatureContent
     * @return static
     */
    public function withBiometricSignatureContent(mixed $biometricSignatureContent) : static
    {
        $new = clone $this;
        $new->biometricSignatureContent = $biometricSignatureContent;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getVersion() : ?int
    {
        return $this->version;
    }

    /**
     * @param null | int $version
     * @return static
     */
    public function withVersion(?int $version) : static
    {
        $new = clone $this;
        $new->version = $version;

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

    /**
     * @return null | string
     */
    public function getNumerNadania() : ?string
    {
        return $this->numerNadania;
    }

    /**
     * @param null | string $numerNadania
     * @return static
     */
    public function withNumerNadania(?string $numerNadania) : static
    {
        $new = clone $this;
        $new->numerNadania = $numerNadania;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\StatusEPOEnum
     */
    public function getStatusEPO() : ?\app\modules\postal\sender\Type\StatusEPOEnum
    {
        return $this->statusEPO;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\StatusEPOEnum $statusEPO
     * @return static
     */
    public function withStatusEPO(?\app\modules\postal\sender\Type\StatusEPOEnum $statusEPO) : static
    {
        $new = clone $this;
        $new->statusEPO = $statusEPO;

        return $new;
    }
}

