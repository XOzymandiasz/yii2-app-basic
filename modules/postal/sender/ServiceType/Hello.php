<?php

declare(strict_types=1);

namespace app\modules\postal\sender\ServiceType;

use app\modules\postal\sender\StructType\HelloResponse;
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
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\Hello $parameters
     * @return \app\modules\postal\sender\StructType\HelloResponse|null
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
     * @see AbstractSoapClientBase::getResult()
     * @return \app\modules\postal\sender\StructType\HelloResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
