<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

use app\modules\postal\modules\poczta_polska\sender\StructType\ClearEnvelope;
use app\modules\postal\modules\poczta_polska\sender\StructType\ClearEnvelopeResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Clear ServiceType
 * @subpackage Services
 */
class Clear extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named clearEnvelope
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ClearEnvelope $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ClearEnvelopeResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
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

    /**
     * Method to call the operation originally named clearEnvelopeByGuids
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ClearEnvelopeByGuids $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ClearEnvelopeByGuidsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function clearEnvelopeByGuids(\app\modules\postal\modules\poczta_polska\sender\StructType\ClearEnvelopeByGuids $parameters)
    {
        try {
            $this->setResult($resultClearEnvelopeByGuids = $this->getSoapClient()->__soapCall('clearEnvelopeByGuids', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultClearEnvelopeByGuids;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ClearEnvelopeByGuidsResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\ClearEnvelopeResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
