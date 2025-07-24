<?php

declare(strict_types=1);

namespace app\modules\postal\sender\ServiceType;

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
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\DownloadIWDContent $parameters
     * @return \app\modules\postal\sender\StructType\DownloadIWDContentResponse|bool
     */
    public function downloadIWDContent(\app\modules\postal\sender\StructType\DownloadIWDContent $parameters)
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
     * @see AbstractSoapClientBase::getResult()
     * @return \app\modules\postal\sender\StructType\DownloadIWDContentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
