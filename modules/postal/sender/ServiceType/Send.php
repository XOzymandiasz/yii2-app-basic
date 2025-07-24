<?php

declare(strict_types=1);

namespace app\modules\postal\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @subpackage Services
 */
class Send extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named sendEnvelope
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\SendEnvelope $parameters
     * @return \app\modules\postal\sender\StructType\SendEnvelopeResponseType|bool
     */
    public function sendEnvelope(\app\modules\postal\sender\StructType\SendEnvelope $parameters)
    {
        try {
            $this->setResult($resultSendEnvelope = $this->getSoapClient()->__soapCall('sendEnvelope', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSendEnvelope;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \app\modules\postal\sender\StructType\SendEnvelopeResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
