<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\MoveShipments $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\MoveShipmentsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function moveShipments(\app\modules\postal\modules\poczta_polska\sender\StructType\MoveShipments $parameters)
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
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\MoveShipmentsResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
