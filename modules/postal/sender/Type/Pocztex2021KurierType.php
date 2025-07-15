<?php

namespace app\modules\postal\sender\Type;

class Pocztex2021KurierType extends Pocztex2021Type
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\SubPocztex2021KurierType>
     */
    private array $subPrzesylka;

    /**
     * @var null | \app\modules\postal\sender\Type\PunktOdbioruType
     */
    private ?\app\modules\postal\sender\Type\PunktOdbioruType $punktOdbioru = null;

    /**
     * @var null | \app\modules\postal\sender\Type\PunktNadaniaType
     */
    private ?\app\modules\postal\sender\Type\PunktNadaniaType $punktNadania = null;

    /**
     * @var null | bool
     */
    private ?bool $kopertaPocztex = null;

    /**
     * @var null | \app\modules\postal\sender\Type\GodzinaDoreczeniaPocztex2021Enum
     */
    private ?\app\modules\postal\sender\Type\GodzinaDoreczeniaPocztex2021Enum $godzinaDoreczenia = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $doreczenieWeWskazanymDniu = null;

    /**
     * @var null | \app\modules\postal\sender\Type\ShipmentChannelPocztex2021Enum
     */
    private ?\app\modules\postal\sender\Type\ShipmentChannelPocztex2021Enum $shipmentChannel = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $labelExpirationDate = null;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\SubPocztex2021KurierType>
     */
    public function getSubPrzesylka() : array
    {
        return $this->subPrzesylka;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\SubPocztex2021KurierType> $subPrzesylka
     * @return static
     */
    public function withSubPrzesylka(array $subPrzesylka) : static
    {
        $new = clone $this;
        $new->subPrzesylka = $subPrzesylka;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\PunktOdbioruType
     */
    public function getPunktOdbioru() : ?\app\modules\postal\sender\Type\PunktOdbioruType
    {
        return $this->punktOdbioru;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PunktOdbioruType $punktOdbioru
     * @return static
     */
    public function withPunktOdbioru(?\app\modules\postal\sender\Type\PunktOdbioruType $punktOdbioru) : static
    {
        $new = clone $this;
        $new->punktOdbioru = $punktOdbioru;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\PunktNadaniaType
     */
    public function getPunktNadania() : ?\app\modules\postal\sender\Type\PunktNadaniaType
    {
        return $this->punktNadania;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\PunktNadaniaType $punktNadania
     * @return static
     */
    public function withPunktNadania(?\app\modules\postal\sender\Type\PunktNadaniaType $punktNadania) : static
    {
        $new = clone $this;
        $new->punktNadania = $punktNadania;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getKopertaPocztex() : ?bool
    {
        return $this->kopertaPocztex;
    }

    /**
     * @param null | bool $kopertaPocztex
     * @return static
     */
    public function withKopertaPocztex(?bool $kopertaPocztex) : static
    {
        $new = clone $this;
        $new->kopertaPocztex = $kopertaPocztex;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\GodzinaDoreczeniaPocztex2021Enum
     */
    public function getGodzinaDoreczenia() : ?\app\modules\postal\sender\Type\GodzinaDoreczeniaPocztex2021Enum
    {
        return $this->godzinaDoreczenia;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\GodzinaDoreczeniaPocztex2021Enum $godzinaDoreczenia
     * @return static
     */
    public function withGodzinaDoreczenia(?\app\modules\postal\sender\Type\GodzinaDoreczeniaPocztex2021Enum $godzinaDoreczenia) : static
    {
        $new = clone $this;
        $new->godzinaDoreczenia = $godzinaDoreczenia;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDoreczenieWeWskazanymDniu() : ?\DateTimeInterface
    {
        return $this->doreczenieWeWskazanymDniu;
    }

    /**
     * @param null | \DateTimeInterface $doreczenieWeWskazanymDniu
     * @return static
     */
    public function withDoreczenieWeWskazanymDniu(?\DateTimeInterface $doreczenieWeWskazanymDniu) : static
    {
        $new = clone $this;
        $new->doreczenieWeWskazanymDniu = $doreczenieWeWskazanymDniu;

        return $new;
    }

    /**
     * @return null | \app\modules\postal\sender\Type\ShipmentChannelPocztex2021Enum
     */
    public function getShipmentChannel() : ?\app\modules\postal\sender\Type\ShipmentChannelPocztex2021Enum
    {
        return $this->shipmentChannel;
    }

    /**
     * @param null | \app\modules\postal\sender\Type\ShipmentChannelPocztex2021Enum $shipmentChannel
     * @return static
     */
    public function withShipmentChannel(?\app\modules\postal\sender\Type\ShipmentChannelPocztex2021Enum $shipmentChannel) : static
    {
        $new = clone $this;
        $new->shipmentChannel = $shipmentChannel;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getLabelExpirationDate() : ?\DateTimeInterface
    {
        return $this->labelExpirationDate;
    }

    /**
     * @param null | \DateTimeInterface $labelExpirationDate
     * @return static
     */
    public function withLabelExpirationDate(?\DateTimeInterface $labelExpirationDate) : static
    {
        $new = clone $this;
        $new->labelExpirationDate = $labelExpirationDate;

        return $new;
    }
}

