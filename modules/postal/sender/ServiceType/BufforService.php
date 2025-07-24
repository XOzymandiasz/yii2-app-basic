<?php

namespace app\modules\postal\sender\ServiceType;

use app\modules\postal\sender\StructType\ClearEnvelope;
use app\modules\postal\sender\StructType\ClearEnvelopeResponse;
use app\modules\postal\sender\StructType\GetEnvelopeBuforList;
use app\modules\postal\sender\StructType\GetEnvelopeBuforListResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class BufforService extends AbstractSoapClientBase
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
    public function getEnvelopeBuforList(): ?GetEnvelopeBuforListResponse
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
}
