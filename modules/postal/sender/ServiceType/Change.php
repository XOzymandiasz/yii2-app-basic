<?php

declare(strict_types=1);

namespace app\modules\postal\sender\ServiceType;

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
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\ChangePassword $parameters
     * @return \app\modules\postal\sender\StructType\ChangePasswordResponse|bool
     */
    public function changePassword(\app\modules\postal\sender\StructType\ChangePassword $parameters)
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
     * @see AbstractSoapClientBase::getResult()
     * @return \app\modules\postal\sender\StructType\ChangePasswordResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
