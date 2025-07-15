<?php

namespace app\modules\postal\sender\Type;

class PakietType
{
    /**
     * Uwaga w tym miejscu wystarczy jak obiekt
     *  kierunke będzie miał ustawioną tylko własność id (nie jest
     *  potrzebne przesyłanie pełnego
     *  obiektu kierunekType pobranego z
     *  metody getKierunki)
     *
     * @var null | \app\modules\postal\sender\Type\KierunekType
     */
    private ?\app\modules\postal\sender\Type\KierunekType $kierunek = null;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\OpakowanieType>
     */
    private array $opakowanie;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\CzynnoscUpustowaType>
     */
    private array $czynnoscUpustowa;

    /**
     * @var null | string
     */
    private ?string $pakietGuid = null;

    /**
     * @var null | \app\modules\postal\sender\Type\MiejsceOdbioruType
     */
    private ?\app\modules\postal\sender\Type\MiejsceOdbioruType $miejsceOdbioru = null;

    /**
     * @var null | \app\modules\postal\sender\Type\SposobNadaniaType
     */
    private ?\app\modules\postal\sender\Type\SposobNadaniaType $sposobNadania = null;

    /**
     * @return null | \app\modules\postal\sender\Type\KierunekType
     */
    public function getKierunek() : ?\app\modules\postal\sender\Type\KierunekType
    {
        return $this->kierunek;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\KierunekType $kierunek
     * @return static
     */
    public function withKierunek(?\app\modules\postal\sender\Type\KierunekType $kierunek) : static
    {
        $new = clone $this;
        $new->kierunek = $kierunek;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\OpakowanieType>
     */
    public function getOpakowanie() : array
    {
        return $this->opakowanie;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\OpakowanieType> $opakowanie
     * @return static
     */
    public function withOpakowanie(array $opakowanie) : static
    {
        $new = clone $this;
        $new->opakowanie = $opakowanie;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\CzynnoscUpustowaType>
     */
    public function getCzynnoscUpustowa() : array
    {
        return $this->czynnoscUpustowa;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\CzynnoscUpustowaType> $czynnoscUpustowa
     * @return static
     */
    public function withCzynnoscUpustowa(array $czynnoscUpustowa) : static
    {
        $new = clone $this;
        $new->czynnoscUpustowa = $czynnoscUpustowa;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPakietGuid() : ?string
    {
        return $this->pakietGuid;
    }

    /**
     * @param null | string $pakietGuid
     * @return static
     */
    public function withPakietGuid(?string $pakietGuid) : static
    {
        $new = clone $this;
        $new->pakietGuid = $pakietGuid;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\MiejsceOdbioruType
     */
    public function getMiejsceOdbioru() : ?\app\modules\postal\sender\Type\MiejsceOdbioruType
    {
        return $this->miejsceOdbioru;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\MiejsceOdbioruType $miejsceOdbioru
     * @return static
     */
    public function withMiejsceOdbioru(?\app\modules\postal\sender\Type\MiejsceOdbioruType $miejsceOdbioru) : static
    {
        $new = clone $this;
        $new->miejsceOdbioru = $miejsceOdbioru;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\SposobNadaniaType
     */
    public function getSposobNadania() : ?\app\modules\postal\sender\Type\SposobNadaniaType
    {
        return $this->sposobNadania;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\SposobNadaniaType $sposobNadania
     * @return static
     */
    public function withSposobNadania(?\app\modules\postal\sender\Type\SposobNadaniaType $sposobNadania) : static
    {
        $new = clone $this;
        $new->sposobNadania = $sposobNadania;

        return $new;
    }
}

