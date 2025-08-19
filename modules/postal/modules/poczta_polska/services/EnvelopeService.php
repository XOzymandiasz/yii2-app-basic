<?php

namespace app\modules\postal\modules\poczta_polska\services;

use app\modules\postal\modules\poczta_polska\sender\StructType\BuforType;
use app\modules\postal\modules\poczta_polska\sender\StructType\ClearEnvelope;
use app\modules\postal\modules\poczta_polska\sender\StructType\ClearEnvelopeResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\CreateEnvelopeBufor;
use app\modules\postal\modules\poczta_polska\sender\StructType\CreateEnvelopeBuforResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforList;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforListResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeList;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeListResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetOutboxBook;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetOutboxBookResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetPlacowkiPocztowe;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetPlacowkiPocztoweResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\SendEnvelope;
use app\modules\postal\modules\poczta_polska\sender\StructType\SendEnvelopeResponseType;
use app\modules\postal\modules\poczta_polska\sender\StructType\UpdateEnvelopeBufor;
use app\modules\postal\modules\poczta_polska\sender\StructType\UpdateEnvelopeBuforResponse;
use SoapFault;

class EnvelopeService extends BaseService
{

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

    public function update(BuforType $buffer): UpdateEnvelopeBuforResponse|null
    {
        try {
            $this->setResult($resultUpdateEnvelopeBufor = $this->getSoapClient()->__soapCall('updateEnvelopeBufor', [
                new UpdateEnvelopeBufor([$buffer]),
            ], [], [], $this->outputHeaders));

            return $resultUpdateEnvelopeBufor;
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

    public function getBufferList(): ?GetEnvelopeBuforListResponse
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

    public function getList(string $startDate, string $endDate): ?GetEnvelopeListResponse
    {
        try {
            $this->setResult($result = $this->getSoapClient()->__soapCall('getEnvelopeList', [
                new GetEnvelopeList($startDate, $endDate),
            ], [], [], $this->outputHeaders));

            return $result;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;

    }

    public function getSenderBook(int $idEnvelope, bool $includeUnregistered): ?GetOutboxBookResponse
    {
        try {
            $this->setResult($resultGetOutboxBook = $this->getSoapClient()->__soapCall('getOutboxBook', [
                new GetOutboxBook($idEnvelope, $includeUnregistered),
            ], [], [], $this->outputHeaders));

            return $resultGetOutboxBook;
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

}
