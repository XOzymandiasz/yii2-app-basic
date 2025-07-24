<?php

declare(strict_types=1);

namespace app\modules\postal\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wyslij ServiceType
 * @subpackage Services
 */
class Wyslij extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wyslijLinkaOStatusieEZwrotu
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\WyslijLinkaOStatusieEZwrotu $parameters
     * @return \app\modules\postal\sender\StructType\WyslijLinkaOStatusieEZwrotuResponse|bool
     */
    public function wyslijLinkaOStatusieEZwrotu(\app\modules\postal\sender\StructType\WyslijLinkaOStatusieEZwrotu $parameters)
    {
        try {
            $this->setResult($resultWyslijLinkaOStatusieEZwrotu = $this->getSoapClient()->__soapCall('wyslijLinkaOStatusieEZwrotu', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWyslijLinkaOStatusieEZwrotu;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \app\modules\postal\sender\StructType\WyslijLinkaOStatusieEZwrotuResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
