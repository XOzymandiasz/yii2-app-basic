<?php

namespace app\modules\postal\modules\poczta_polska\builders;

use app\modules\postal\modules\poczta_polska\forms\ShipmentForm;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaPoleconaKrajowaType;

class PoleconaKrajowaBuilder implements ShipmentBuilderInterface
{
    private ShipmentForm $model;
    public function __construct(ShipmentForm $model) {
        $this->model = $model;
    }

    public function build(): PrzesylkaPoleconaKrajowaType
    {
        $shipment = new PrzesylkaPoleconaKrajowaType($this->model->category);

        $shipment->setFormat($this->model->format)
                 ->setKategoria($this->model->category)
                 ->setMasa($this->model->mass)
                 ->setAdres($this->model->getReceiverAddress()->getAdresType())
                 ->setNadawca($this->model->getSenderAddress()->getAdresType())
                 ->setOpis($this->model->description);

        if ($this->model->number != ''){
            $shipment->setNumerNadania($this->model->number);
        }

        return $shipment;
    }
}
