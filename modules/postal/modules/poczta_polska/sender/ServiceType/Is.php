<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\IsMiejscowa $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\IsMiejscowaResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function isMiejscowa(\app\modules\postal\modules\poczta_polska\sender\StructType\IsMiejscowa $parameters)
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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\IsObszarMiasto $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\IsObszarMiastoResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function isObszarMiasto(\app\modules\postal\modules\poczta_polska\sender\StructType\IsObszarMiasto $parameters)
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
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\IsMiejscowaResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\IsObszarMiastoResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
