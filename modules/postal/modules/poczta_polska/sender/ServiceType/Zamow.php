<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ZamowKuriera $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ZamowKurieraResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function zamowKuriera(\app\modules\postal\modules\poczta_polska\sender\StructType\ZamowKuriera $parameters)
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
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ZamowKurieraResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
