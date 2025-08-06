<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

use app\modules\postal\modules\poczta_polska\sender\StructType\HelloResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Hello ServiceType
 * @subpackage Services
 */
class Hello extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named hello
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\Hello $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\HelloResponse|null
     *@uses  AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function hello(?string $in): HelloResponse|null
    {
        try {
            $this->setResult($resultHello = $this->getSoapClient()->__soapCall('hello', [
                new HelloResponse(),
            ], [], [], $this->outputHeaders));
        
            return $resultHello;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }

        return null;
    }
    /**
     * Returns the result
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\HelloResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
