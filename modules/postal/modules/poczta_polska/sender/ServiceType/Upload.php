<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UploadIWDContent $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\SendEnvelopeResponseType|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function uploadIWDContent(\app\modules\postal\modules\poczta_polska\sender\StructType\UploadIWDContent $parameters)
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
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\SendEnvelopeResponseType
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
