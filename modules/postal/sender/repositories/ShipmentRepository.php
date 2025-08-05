<?php

namespace app\modules\postal\sender\repositories;

use app\modules\postal\sender\services\ShipmentService;
use app\modules\postal\sender\StructType\AddShipment;
use app\modules\postal\sender\StructType\AddShipmentResponse;
use app\modules\postal\sender\StructType\PrzesylkaType;

class ShipmentRepository extends BaseRepository
{

    protected $serviceConfig = [
        'class' => ShipmentService::class,
    ];

    public function addShipment(PrzesylkaType $shipment, ?int $idBuffor): ?AddShipmentResponse
    {
        $this->service = $this->getService();

        return $this->service->addShipment(new AddShipment([$shipment], $idBuffor));
    }

    protected function getService(): ShipmentService
    {
        return parent::getService();
    }
}
