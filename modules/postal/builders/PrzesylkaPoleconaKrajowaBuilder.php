<?php

use app\modules\postal\forms\PocztaPolskaShipmentForm;
use app\modules\postal\sender\StructType\PrzesylkaPoleconaKrajowaType;

class PoleconaKrajowaBuilder implements ShipmentBuilderInterface
{
    private PocztaPolskaShipmentForm $form;
    public function __construct(PocztaPolskaShipmentForm $form) {
        $this->form = $form;
    }

    public function build(): PrzesylkaPoleconaKrajowaType
    {
        $shipment = new PrzesylkaPoleconaKrajowaType($this->form->category);

        $shipment->setFormat($this->form->format)
                 ->setAdres($this->form->getAddressForm()->createModel())
                 ->setNadawca($this->form->getShipperAddressForm()->createModel())
                 ->setGuid($this->form->guid)
                 ->setOpis($this->form->description);


        return $shipment;
    }
}