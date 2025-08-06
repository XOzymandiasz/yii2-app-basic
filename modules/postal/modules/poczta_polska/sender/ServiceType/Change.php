<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Change ServiceType
 * @subpackage Services
 */
class Change extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named changePassword
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\ChangePassword $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ChangePasswordResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function changePassword(\app\modules\postal\modules\poczta_polska\sender\StructType\ChangePassword $parameters)
    {
        try {
            $this->setResult($resultChangePassword = $this->getSoapClient()->__soapCall('changePassword', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultChangePassword;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\ChangePasswordResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
