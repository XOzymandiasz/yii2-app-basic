<?php

use app\modules\postal\forms\ElektronicznyNadawcaShipmentForm;
use app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType;

class PoleconaKrajowaBuilder implements ShipmentBuilderInterface
{
    private ElektronicznyNadawcaShipmentForm $form;
    public function __construct(ElektronicznyNadawcaShipmentForm $form) {
        $this->form = $form;
    }

    public function build(): PrzesylkaPoleconaKrajowaType
    {
        $shipment = new PrzesylkaPoleconaKrajowaType($this->form->category);

        $shipment->setFormat($this->form->format)
                 ->setAdres($this->form->getAddressForm()->createModel())
                 ->setNadawca($this->form->getShipperAddressForm()->createModel())
                 ->setRodzaj($this->form->shipmentType)
                 ->setGuid($this->form->guid)
                 ->setOpis($this->form->description);


        return $shipment;
    }
}