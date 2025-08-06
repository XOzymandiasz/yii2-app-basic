<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Order ServiceType
 * @subpackage Services
 */
class Order extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named orderEasyReturnSolutionLabel
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\OrderEasyReturnSolutionLabel $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\OrderEasyReturnSolutionLabelResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function orderEasyReturnSolutionLabel(\app\modules\postal\modules\poczta_polska\sender\StructType\OrderEasyReturnSolutionLabel $parameters)
    {
        try {
            $this->setResult($resultOrderEasyReturnSolutionLabel = $this->getSoapClient()->__soapCall('orderEasyReturnSolutionLabel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultOrderEasyReturnSolutionLabel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\OrderEasyReturnSolutionLabelResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
