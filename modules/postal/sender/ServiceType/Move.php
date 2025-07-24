<?php

declare(strict_types=1);

namespace app\modules\postal\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Move ServiceType
 * @subpackage Services
 */
class Move extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named moveShipments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\MoveShipments $parameters
     * @return \app\modules\postal\sender\StructType\MoveShipmentsResponse|bool
     */
    public function moveShipments(\app\modules\postal\sender\StructType\MoveShipments $parameters)
    {
        try {
            $this->setResult($resultMoveShipments = $this->getSoapClient()->__soapCall('moveShipments', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultMoveShipments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \app\modules\postal\sender\StructType\MoveShipmentsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
