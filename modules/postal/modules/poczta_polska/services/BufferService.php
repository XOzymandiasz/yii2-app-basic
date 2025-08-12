<?php

namespace app\modules\postal\modules\poczta_polska\services;

use app\modules\postal\modules\poczta_polska\sender\StructType\BuforType;
use app\modules\postal\modules\poczta_polska\sender\StructType\ClearEnvelope;
use app\modules\postal\modules\poczta_polska\sender\StructType\ClearEnvelopeResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\CreateEnvelopeBufor;
use app\modules\postal\modules\poczta_polska\sender\StructType\CreateEnvelopeBuforResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforList;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforListResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetPlacowkiPocztowe;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetPlacowkiPocztoweResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\SendEnvelope;
use app\modules\postal\modules\poczta_polska\sender\StructType\SendEnvelopeResponseType;
use app\modules\postal\modules\poczta_polska\sender\StructType\UpdateEnvelopeBufor;
use app\modules\postal\modules\poczta_polska\sender\StructType\UpdateEnvelopeBuforResponse;
use SoapFault;

class BufferService extends BaseService
{

    public function clearEnvelope(?int $buforId = null): ?ClearEnvelopeResponse
    {
        try {
            $this->setResult($resultClearEnvelope = $this->getSoapClient()->__soapCall('clearEnvelope', [
                new ClearEnvelope($buforId),
            ], [], [], $this->outputHeaders));

            return $resultClearEnvelope;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;
    }

    public function getList(): ?GetEnvelopeBuforListResponse
    {
        try {
            $this->setResult($resultGetEnvelopeBuforList = $this->getSoapClient()->__soapCall('getEnvelopeBuforList', [
                new GetEnvelopeBuforList(),
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeBuforList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;

    }


    public function getPostOffices(string $regionId): ?GetPlacowkiPocztoweResponse
    {
        try {
            $this->setResult($resultGetUrzedyNadania = $this->getSoapClient()->__soapCall('getPlacowkiPocztowe', [
                new GetPlacowkiPocztowe($regionId),
            ], [], [], $this->outputHeaders));

            return $resultGetUrzedyNadania;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;
    }

    public function create(BuforType $buffer): CreateEnvelopeBuforResponse|null
    {
        try {
            $this->setResult($resultCreateEnvelopeBufor = $this->getSoapClient()->__soapCall('createEnvelopeBufor', [
                new CreateEnvelopeBufor([$buffer]),
            ], [], [], $this->outputHeaders));

            return $resultCreateEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }

        return null;
    }

    public function send(?int $idBufor, ?int $urzadNadania, ?array $pakiet): SendEnvelopeResponseType|null
    {
        try {
            $this->setResult($resultSendEnvelope = $this->getSoapClient()->__soapCall('sendEnvelope', [
                new SendEnvelope($urzadNadania, $pakiet, $idBufor),
            ], [], [], $this->outputHeaders));

            return $resultSendEnvelope;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }

        return null;
    }

}
