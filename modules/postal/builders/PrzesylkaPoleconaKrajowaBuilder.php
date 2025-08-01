<?php

use app\modules\postal\forms\PocztaPolskaShipmentForm;
use app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType;

class PoleconaKrajowaBuilder implements ShipmentBuilderInterface
{
    private PocztaPolskaShipmentForm $model;
    public function __construct(PocztaPolskaShipmentForm $model) {
        $this->model = $model;
    }

    public function build(): PrzesylkaPoleconaKrajowaType
    {
        $shipment = new PrzesylkaPoleconaKrajowaType($this->model->category);

        $shipment->setFormat($this->model->format)
                 ->setNumerNadania($this->model->number)
                 ->setKategoria($this->model->category)
                 ->setFormat($this->model->format)
                 ->setMasa($this->model->mass)
                 ->setAdres($this->model->getReceiverAddress())
                 ->setNadawca($this->model->getSenderAddress())
                 ->setOpis($this->model->description);


        return $shipment;
    }
}
