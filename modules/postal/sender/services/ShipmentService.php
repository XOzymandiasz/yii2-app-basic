<?php

namespace app\modules\postal\sender\services;

use app\modules\postal\sender\StructType\AddShipment;
use app\modules\postal\sender\StructType\AddShipmentResponse;
use SoapFault;

class ShipmentService extends BaseService
{

    public function add(AddShipment $parameters): AddShipmentResponse|null
    {
        try {
            $this->setResult($resultAddShipment = $this->getSoapClient()->__soapCall('addShipment', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddShipment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;
    }

}
