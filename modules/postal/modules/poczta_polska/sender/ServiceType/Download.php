<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Download ServiceType
 * @subpackage Services
 */
class Download extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named downloadIWDContent
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\DownloadIWDContent $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\DownloadIWDContentResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function downloadIWDContent(\app\modules\postal\modules\poczta_polska\sender\StructType\DownloadIWDContent $parameters)
    {
        try {
            $this->setResult($resultDownloadIWDContent = $this->getSoapClient()->__soapCall('downloadIWDContent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDownloadIWDContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\DownloadIWDContentResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
