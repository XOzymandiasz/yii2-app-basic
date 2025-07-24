<?php

declare(strict_types=1);

namespace app\modules\postal\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Zamow ServiceType
 * @subpackage Services
 */
class Zamow extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named zamowKuriera
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\ZamowKuriera $parameters
     * @return \app\modules\postal\sender\StructType\ZamowKurieraResponse|bool
     */
    public function zamowKuriera(\app\modules\postal\sender\StructType\ZamowKuriera $parameters)
    {
        try {
            $this->setResult($resultZamowKuriera = $this->getSoapClient()->__soapCall('zamowKuriera', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultZamowKuriera;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \app\modules\postal\sender\StructType\ZamowKurieraResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
