<?php

declare(strict_types=1);

namespace app\modules\postal\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Upload ServiceType
 * @subpackage Services
 */
class Upload extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named uploadIWDContent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\UploadIWDContent $parameters
     * @return \app\modules\postal\sender\StructType\SendEnvelopeResponseType|bool
     */
    public function uploadIWDContent(\app\modules\postal\sender\StructType\UploadIWDContent $parameters)
    {
        try {
            $this->setResult($resultUploadIWDContent = $this->getSoapClient()->__soapCall('uploadIWDContent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadIWDContent;
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
