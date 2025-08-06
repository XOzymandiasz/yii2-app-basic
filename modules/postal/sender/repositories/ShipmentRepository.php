<?php

namespace app\modules\postal\sender\repositories;

use app\modules\postal\sender\services\ShipmentService;
use app\modules\postal\sender\StructType\AddShipment;
use app\modules\postal\sender\StructType\AddShipmentResponseItemType;
use app\modules\postal\sender\StructType\PrzesylkaType;

class ShipmentRepository extends BaseRepository
{

    protected $serviceConfig = [
        'class' => ShipmentService::class,
    ];

    public function add(PrzesylkaType $shipment, ?int $idBuffor = null): AddShipmentResponseItemType|null
    {
        $response = $this->getService()->add(new AddShipment([$shipment], $idBuffor));
        if (!$response) {
            $this->warning(__METHOD__, 'response is null');
            return null;
        }
        $value = $response->getRetval();
        /**
         * @var AddShipmentResponseItemType|false $shipmentResponse
         */
        $shipmentResponse = reset($value);
        if ($shipmentResponse !== false) {
            return $shipmentResponse;
        }
        $this->warning(__METHOD__, 'empty retval', $response);
        return null;
    }

    protected function getService(): ShipmentService
    {
        return parent::getService();
    }
}
