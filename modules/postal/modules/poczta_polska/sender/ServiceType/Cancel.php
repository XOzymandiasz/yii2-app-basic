<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel ServiceType
 * @subpackage Services
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cancelReklamacja
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\CancelReklamacja $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\CancelReklamacjaResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function cancelReklamacja(\app\modules\postal\modules\poczta_polska\sender\StructType\CancelReklamacja $parameters)
    {
        try {
            $this->setResult($resultCancelReklamacja = $this->getSoapClient()->__soapCall('cancelReklamacja', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCancelReklamacja;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\CancelReklamacjaResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
