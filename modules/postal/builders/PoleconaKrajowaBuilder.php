<?php

namespace app\modules\postal\builders;

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
                 ->setKategoria($this->model->category)
                 ->setFormat($this->model->format)
                 ->setMasa($this->model->mass)
                 ->setAdres($this->model->getReceiverAddress()->getAdresType())
                 ->setNadawca($this->model->getSenderAddress()->getAdresType())
                 ->setOpis($this->model->description);

        if ($this->model->number){
            $shipment->setNumerNadania($this->model->number);
        }

        return $shipment;
    }
}
