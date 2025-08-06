<?php

namespace app\modules\postal\sender\services;

use app\modules\postal\sender\StructType\AddShipment;
use app\modules\postal\sender\StructType\AddShipmentResponse;
use app\modules\postal\sender\StructType\GetPrintForParcel;
use app\modules\postal\sender\StructType\GetPrintForParcelResponse;
use app\modules\postal\sender\StructType\PrintType;
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

    public function printForParcel(?array $guid, ?PrintType $type): GetPrintForParcelResponse|null
    {
        try {
            $this->setResult($resultGetPrintForParcel = $this->getSoapClient()->__soapCall('getPrintForParcel', [
                new GetPrintForParcel($guid, $type),
            ], [], [], $this->outputHeaders));

            return $resultGetPrintForParcel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

        }

        return null;
    }

}
