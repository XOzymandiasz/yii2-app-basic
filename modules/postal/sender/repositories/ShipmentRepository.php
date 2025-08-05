<?php

namespace app\modules\postal\sender\repositories;

use app\modules\postal\sender\services\ShipmentService;
use app\modules\postal\sender\StructType\AddShipment;
use app\modules\postal\sender\StructType\AddShipmentResponse;
use app\modules\postal\sender\StructType\AddShipmentResponseItemType;
use app\modules\postal\sender\StructType\PrzesylkaType;
use Yii;

class ShipmentRepository extends BaseRepository
{

    protected $serviceConfig = [
        'class' => ShipmentService::class,
    ];

    public function add(PrzesylkaType $shipment, ?int $idBuffor): AddShipmentResponseItemType|null
    {
        $response = $this->getService()->add(new AddShipment([$shipment], $idBuffor));

        if ($response) {
            $retval = $response->getRetval()[0]; #todo ask for comment

            if (empty($retval->getError())) {
                return $retval;
            }
        }

        if ($response && empty($retval->getError())) {
            Yii::warning([
                'responseError' => $retval->getError(),
                'lastResponseError' => $this->getService()->getLastError()
            ], __METHOD__);
        }

        return null;
    }

    protected function getService(): ShipmentService
    {
        return parent::getService();
    }
}
