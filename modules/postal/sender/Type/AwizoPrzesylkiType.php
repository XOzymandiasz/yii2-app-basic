<?php

namespace app\modules\postal\sender\Type;

class AwizoPrzesylkiType
{
    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dataPierwszegoAwizowania = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dataDrugiegoAwizowania = null;

    /**
     * @var null | \app\modules\postal\sender\Type\MiejscaPozostawieniaAwizoEnum
     */
    private ?\app\modules\postal\sender\Type\MiejscaPozostawieniaAwizoEnum $miejscePozostawienia = null;

    /**
     * @var null | int
     */
    private ?int $idPlacowkaPocztowaWydajaca = null;

    /**
     * @return null | \DateTimeInterface
     */
    public function getDataPierwszegoAwizowania() : ?\DateTimeInterface
    {
        return $this->dataPierwszegoAwizowania;
    }

    /**
     * @param null | \DateTimeInterface $dataPierwszegoAwizowania
     * @return static
     */
    public function withDataPierwszegoAwizowania(?\DateTimeInterface $dataPierwszegoAwizowania) : static
    {
        $new = clone $this;
        $new->dataPierwszegoAwizowania = $dataPierwszegoAwizowania;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDataDrugiegoAwizowania() : ?\DateTimeInterface
    {
        return $this->dataDrugiegoAwizowania;
    }

    /**
     * @param null | \DateTimeInterface $dataDrugiegoAwizowania
     * @return static
     */
    public function withDataDrugiegoAwizowania(?\DateTimeInterface $dataDrugiegoAwizowania) : static
    {
        $new = clone $this;
        $new->dataDrugiegoAwizowania = $dataDrugiegoAwizowania;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\MiejscaPozostawieniaAwizoEnum
     */
    public function getMiejscePozostawienia() : ?\app\modules\postal\sender\Type\MiejscaPozostawieniaAwizoEnum
    {
        return $this->miejscePozostawienia;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\MiejscaPozostawieniaAwizoEnum $miejscePozostawienia
     * @return static
     */
    public function withMiejscePozostawienia(?\app\modules\postal\sender\Type\MiejscaPozostawieniaAwizoEnum $miejscePozostawienia) : static
    {
        $new = clone $this;
        $new->miejscePozostawienia = $miejscePozostawienia;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIdPlacowkaPocztowaWydajaca() : ?int
    {
        return $this->idPlacowkaPocztowaWydajaca;
    }

    /**
     * @param null | int $idPlacowkaPocztowaWydajaca
     * @return static
     */
    public function withIdPlacowkaPocztowaWydajaca(?int $idPlacowkaPocztowaWydajaca) : static
    {
        $new = clone $this;
        $new->idPlacowkaPocztowaWydajaca = $idPlacowkaPocztowaWydajaca;

        return $new;
    }
}

