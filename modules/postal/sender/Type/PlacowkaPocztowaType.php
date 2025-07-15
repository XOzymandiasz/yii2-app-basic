<?php

namespace app\modules\postal\sender\Type;

class PlacowkaPocztowaType
{
    /**
     * @var null | \app\modules\postal\sender\Type\LokalizacjaGeograficznaType
     */
    private ?\app\modules\postal\sender\Type\LokalizacjaGeograficznaType $lokalizacjaGeograficzna = null;

    /**
     * @var null | \app\modules\postal\sender\Type\GodzinyPracyType
     */
    private ?\app\modules\postal\sender\Type\GodzinyPracyType $godzinyPracy = null;

    /**
     * @var null | string
     */
    private ?string $opis = null;

    /**
     * @var null | \app\modules\postal\sender\Type\DeliveryPathType
     */
    private ?\app\modules\postal\sender\Type\DeliveryPathType $deliveryPath = null;

    /**
     * @var null | \app\modules\postal\sender\Type\TypPlacowkiPocztowejEnum
     */
    private ?\app\modules\postal\sender\Type\TypPlacowkiPocztowejEnum $typ = null;

    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\RodzajPlatnosciEnum>
     */
    private array $rodzajPlatnosci;

    /**
     * @var null | \app\modules\postal\sender\Type\FunkcjaPlacowkiPocztowejType
     */
    private ?\app\modules\postal\sender\Type\FunkcjaPlacowkiPocztowejType $funkcja = null;

    /**
     * @var null | int
     */
    private ?int $maksymalnaKwotaPobrania = null;

    /**
     * @var int
     */
    private int $id;

    /**
     * @var null | string
     */
    private ?string $prefixNazwy = null;

    /**
     * @var null | string
     */
    private ?string $nazwa = null;

    /**
     * @var null | string
     */
    private ?string $wojewodztwo = null;

    /**
     * @var null | string
     */
    private ?string $powiat = null;

    /**
     * @var null | string
     */
    private ?string $miejsce = null;

    /**
     * @var null | string
     */
    private ?string $kodPocztowy = null;

    /**
     * @var null | string
     */
    private ?string $miejscowosc = null;

    /**
     * @var null | string
     */
    private ?string $ulica = null;

    /**
     * @var null | string
     */
    private ?string $numerDomu = null;

    /**
     * @var null | string
     */
    private ?string $numerLokalu = null;

    /**
     * Pole dedykowane do wykorzystania na nalepkach
     *  adresowych przy określaniu punktu odbioru
     *
     * @var null | string
     */
    private ?string $nazwaWydruk = null;

    /**
     * @var null | bool
     */
    private ?bool $punktWydaniaEPrzesylki = null;

    /**
     * @var null | bool
     */
    private ?bool $powiadomienieSMS = null;

    /**
     * @var null | bool
     */
    private ?bool $punktWydaniaPrzesylkiBiznesowejPlus = null;

    /**
     * @var null | bool
     */
    private ?bool $punktWydaniaPrzesylkiBiznesowej = null;

    /**
     * @var null | string
     */
    private ?string $siecPlacowek = null;

    /**
     * @var null | string
     */
    private ?string $idZPO = null;

    /**
     * @return null | \app\modules\postal\sender\Type\LokalizacjaGeograficznaType
     */
    public function getLokalizacjaGeograficzna() : ?\app\modules\postal\sender\Type\LokalizacjaGeograficznaType
    {
        return $this->lokalizacjaGeograficzna;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\LokalizacjaGeograficznaType $lokalizacjaGeograficzna
     * @return static
     */
    public function withLokalizacjaGeograficzna(?\app\modules\postal\sender\Type\LokalizacjaGeograficznaType $lokalizacjaGeograficzna) : static
    {
        $new = clone $this;
        $new->lokalizacjaGeograficzna = $lokalizacjaGeograficzna;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\GodzinyPracyType
     */
    public function getGodzinyPracy() : ?\app\modules\postal\sender\Type\GodzinyPracyType
    {
        return $this->godzinyPracy;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\GodzinyPracyType $godzinyPracy
     * @return static
     */
    public function withGodzinyPracy(?\app\modules\postal\sender\Type\GodzinyPracyType $godzinyPracy) : static
    {
        $new = clone $this;
        $new->godzinyPracy = $godzinyPracy;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOpis() : ?string
    {
        return $this->opis;
    }

    /**
     * @param null | string $opis
     * @return static
     */
    public function withOpis(?string $opis) : static
    {
        $new = clone $this;
        $new->opis = $opis;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\DeliveryPathType
     */
    public function getDeliveryPath() : ?\app\modules\postal\sender\Type\DeliveryPathType
    {
        return $this->deliveryPath;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\DeliveryPathType $deliveryPath
     * @return static
     */
    public function withDeliveryPath(?\app\modules\postal\sender\Type\DeliveryPathType $deliveryPath) : static
    {
        $new = clone $this;
        $new->deliveryPath = $deliveryPath;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\TypPlacowkiPocztowejEnum
     */
    public function getTyp() : ?\app\modules\postal\sender\Type\TypPlacowkiPocztowejEnum
    {
        return $this->typ;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\TypPlacowkiPocztowejEnum $typ
     * @return static
     */
    public function withTyp(?\app\modules\postal\sender\Type\TypPlacowkiPocztowejEnum $typ) : static
    {
        $new = clone $this;
        $new->typ = $typ;

        return $new;
    }

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\RodzajPlatnosciEnum>
     */
    public function getRodzajPlatnosci() : array
    {
        return $this->rodzajPlatnosci;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\RodzajPlatnosciEnum> $rodzajPlatnosci
     * @return static
     */
    public function withRodzajPlatnosci(array $rodzajPlatnosci) : static
    {
        $new = clone $this;
        $new->rodzajPlatnosci = $rodzajPlatnosci;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\FunkcjaPlacowkiPocztowejType
     */
    public function getFunkcja() : ?\app\modules\postal\sender\Type\FunkcjaPlacowkiPocztowejType
    {
        return $this->funkcja;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\FunkcjaPlacowkiPocztowejType $funkcja
     * @return static
     */
    public function withFunkcja(?\app\modules\postal\sender\Type\FunkcjaPlacowkiPocztowejType $funkcja) : static
    {
        $new = clone $this;
        $new->funkcja = $funkcja;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getMaksymalnaKwotaPobrania() : ?int
    {
        return $this->maksymalnaKwotaPobrania;
    }

    /**
     * @param null | int $maksymalnaKwotaPobrania
     * @return static
     */
    public function withMaksymalnaKwotaPobrania(?int $maksymalnaKwotaPobrania) : static
    {
        $new = clone $this;
        $new->maksymalnaKwotaPobrania = $maksymalnaKwotaPobrania;

        return $new;
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return static
     */
    public function withId(int $id) : static
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPrefixNazwy() : ?string
    {
        return $this->prefixNazwy;
    }

    /**
     * @param null | string $prefixNazwy
     * @return static
     */
    public function withPrefixNazwy(?string $prefixNazwy) : static
    {
        $new = clone $this;
        $new->prefixNazwy = $prefixNazwy;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNazwa() : ?string
    {
        return $this->nazwa;
    }

    /**
     * @param null | string $nazwa
     * @return static
     */
    public function withNazwa(?string $nazwa) : static
    {
        $new = clone $this;
        $new->nazwa = $nazwa;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWojewodztwo() : ?string
    {
        return $this->wojewodztwo;
    }

    /**
     * @param null | string $wojewodztwo
     * @return static
     */
    public function withWojewodztwo(?string $wojewodztwo) : static
    {
        $new = clone $this;
        $new->wojewodztwo = $wojewodztwo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPowiat() : ?string
    {
        return $this->powiat;
    }

    /**
     * @param null | string $powiat
     * @return static
     */
    public function withPowiat(?string $powiat) : static
    {
        $new = clone $this;
        $new->powiat = $powiat;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMiejsce() : ?string
    {
        return $this->miejsce;
    }

    /**
     * @param null | string $miejsce
     * @return static
     */
    public function withMiejsce(?string $miejsce) : static
    {
        $new = clone $this;
        $new->miejsce = $miejsce;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getKodPocztowy() : ?string
    {
        return $this->kodPocztowy;
    }

    /**
     * @param null | string $kodPocztowy
     * @return static
     */
    public function withKodPocztowy(?string $kodPocztowy) : static
    {
        $new = clone $this;
        $new->kodPocztowy = $kodPocztowy;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMiejscowosc() : ?string
    {
        return $this->miejscowosc;
    }

    /**
     * @param null | string $miejscowosc
     * @return static
     */
    public function withMiejscowosc(?string $miejscowosc) : static
    {
        $new = clone $this;
        $new->miejscowosc = $miejscowosc;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUlica() : ?string
    {
        return $this->ulica;
    }

    /**
     * @param null | string $ulica
     * @return static
     */
    public function withUlica(?string $ulica) : static
    {
        $new = clone $this;
        $new->ulica = $ulica;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerDomu() : ?string
    {
        return $this->numerDomu;
    }

    /**
     * @param null | string $numerDomu
     * @return static
     */
    public function withNumerDomu(?string $numerDomu) : static
    {
        $new = clone $this;
        $new->numerDomu = $numerDomu;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumerLokalu() : ?string
    {
        return $this->numerLokalu;
    }

    /**
     * @param null | string $numerLokalu
     * @return static
     */
    public function withNumerLokalu(?string $numerLokalu) : static
    {
        $new = clone $this;
        $new->numerLokalu = $numerLokalu;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNazwaWydruk() : ?string
    {
        return $this->nazwaWydruk;
    }

    /**
     * @param null | string $nazwaWydruk
     * @return static
     */
    public function withNazwaWydruk(?string $nazwaWydruk) : static
    {
        $new = clone $this;
        $new->nazwaWydruk = $nazwaWydruk;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPunktWydaniaEPrzesylki() : ?bool
    {
        return $this->punktWydaniaEPrzesylki;
    }

    /**
     * @param null | bool $punktWydaniaEPrzesylki
     * @return static
     */
    public function withPunktWydaniaEPrzesylki(?bool $punktWydaniaEPrzesylki) : static
    {
        $new = clone $this;
        $new->punktWydaniaEPrzesylki = $punktWydaniaEPrzesylki;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPowiadomienieSMS() : ?bool
    {
        return $this->powiadomienieSMS;
    }

    /**
     * @param null | bool $powiadomienieSMS
     * @return static
     */
    public function withPowiadomienieSMS(?bool $powiadomienieSMS) : static
    {
        $new = clone $this;
        $new->powiadomienieSMS = $powiadomienieSMS;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPunktWydaniaPrzesylkiBiznesowejPlus() : ?bool
    {
        return $this->punktWydaniaPrzesylkiBiznesowejPlus;
    }

    /**
     * @param null | bool $punktWydaniaPrzesylkiBiznesowejPlus
     * @return static
     */
    public function withPunktWydaniaPrzesylkiBiznesowejPlus(?bool $punktWydaniaPrzesylkiBiznesowejPlus) : static
    {
        $new = clone $this;
        $new->punktWydaniaPrzesylkiBiznesowejPlus = $punktWydaniaPrzesylkiBiznesowejPlus;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getPunktWydaniaPrzesylkiBiznesowej() : ?bool
    {
        return $this->punktWydaniaPrzesylkiBiznesowej;
    }

    /**
     * @param null | bool $punktWydaniaPrzesylkiBiznesowej
     * @return static
     */
    public function withPunktWydaniaPrzesylkiBiznesowej(?bool $punktWydaniaPrzesylkiBiznesowej) : static
    {
        $new = clone $this;
        $new->punktWydaniaPrzesylkiBiznesowej = $punktWydaniaPrzesylkiBiznesowej;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSiecPlacowek() : ?string
    {
        return $this->siecPlacowek;
    }

    /**
     * @param null | string $siecPlacowek
     * @return static
     */
    public function withSiecPlacowek(?string $siecPlacowek) : static
    {
        $new = clone $this;
        $new->siecPlacowek = $siecPlacowek;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIdZPO() : ?string
    {
        return $this->idZPO;
    }

    /**
     * @param null | string $idZPO
     * @return static
     */
    public function withIdZPO(?string $idZPO) : static
    {
        $new = clone $this;
        $new->idZPO = $idZPO;

        return $new;
    }
}

