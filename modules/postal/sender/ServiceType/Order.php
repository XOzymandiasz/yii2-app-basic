<?php

declare(strict_types=1);

namespace app\modules\postal\sender\ServiceType;

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
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\OrderEasyReturnSolutionLabel $parameters
     * @return \app\modules\postal\sender\StructType\OrderEasyReturnSolutionLabelResponse|bool
     */
    public function orderEasyReturnSolutionLabel(\app\modules\postal\sender\StructType\OrderEasyReturnSolutionLabel $parameters)
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
     * @see AbstractSoapClientBase::getResult()
     * @return \app\modules\postal\sender\StructType\OrderEasyReturnSolutionLabelResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
