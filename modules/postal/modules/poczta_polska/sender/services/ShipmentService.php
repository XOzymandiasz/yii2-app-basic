<?php

namespace app\modules\postal\modules\poczta_polska\sender\services;

use app\modules\postal\modules\poczta_polska\sender\StructType\AddShipment;
use app\modules\postal\modules\poczta_polska\sender\StructType\AddShipmentResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeBufor;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetPrintForParcel;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetPrintForParcelResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrintType;
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


    public function getList(int $idBufor): GetEnvelopeBuforResponse|null
    {
        try {
            $this->setResult($resultGetEnvelopeBufor = $this->getSoapClient()->__soapCall('getEnvelopeBufor', [
                new GetEnvelopeBufor($idBufor),
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;
    }

}
