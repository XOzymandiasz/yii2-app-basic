<?php

declare(strict_types=1);

namespace app\modules\postal\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Is ServiceType
 * @subpackage Services
 */
class Is extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named isMiejscowa
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\IsMiejscowa $parameters
     * @return \app\modules\postal\sender\StructType\IsMiejscowaResponse|bool
     */
    public function isMiejscowa(\app\modules\postal\sender\StructType\IsMiejscowa $parameters)
    {
        try {
            $this->setResult($resultIsMiejscowa = $this->getSoapClient()->__soapCall('isMiejscowa', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultIsMiejscowa;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named isObszarMiasto
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\IsObszarMiasto $parameters
     * @return \app\modules\postal\sender\StructType\IsObszarMiastoResponse|bool
     */
    public function isObszarMiasto(\app\modules\postal\sender\StructType\IsObszarMiasto $parameters)
    {
        try {
            $this->setResult($resultIsObszarMiasto = $this->getSoapClient()->__soapCall('isObszarMiasto', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultIsObszarMiasto;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \app\modules\postal\sender\StructType\IsMiejscowaResponse|\app\modules\postal\sender\StructType\IsObszarMiastoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
