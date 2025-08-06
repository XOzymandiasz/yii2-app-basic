<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

use app\modules\postal\modules\poczta_polska\sender\StructType\AddShipment;
use app\modules\postal\modules\poczta_polska\sender\StructType\AddShipmentResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named addShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param AddShipment $parameters
     * @return AddShipmentResponse|null
     */
    public function addShipment(AddShipment $parameters): AddShipmentResponse|null
    {
        try {
          $this->setResult($resultAddShipment = $this->getSoapClient()->__soapCall('addShipment', [
              $parameters,
          ], [], [], $this->outputHeaders));
        
          return $resultAddShipment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;
    }
    /**
     * Method to call the operation originally named addReklamacje
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AddReklamacje $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\AddReklamacjeResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function addReklamacje(\app\modules\postal\modules\poczta_polska\sender\StructType\AddReklamacje $parameters)
    {
        try {
            $this->setResult($resultAddReklamacje = $this->getSoapClient()->__soapCall('addReklamacje', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddReklamacje;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addOdwolanieDoReklamacji
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AddOdwolanieDoReklamacji $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\AddOdwolanieDoReklamacjiResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function addOdwolanieDoReklamacji(\app\modules\postal\modules\poczta_polska\sender\StructType\AddOdwolanieDoReklamacji $parameters)
    {
        try {
            $this->setResult($resultAddOdwolanieDoReklamacji = $this->getSoapClient()->__soapCall('addOdwolanieDoReklamacji', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddOdwolanieDoReklamacji;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addRozbieznoscDoZapowiedziFaktur
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AddRozbieznoscDoZapowiedziFaktur $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\AddRozbieznoscDoZapowiedziFakturResponse|bool
     *@uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function addRozbieznoscDoZapowiedziFaktur(\app\modules\postal\modules\poczta_polska\sender\StructType\AddRozbieznoscDoZapowiedziFaktur $parameters)
    {
        try {
            $this->setResult($resultAddRozbieznoscDoZapowiedziFaktur = $this->getSoapClient()->__soapCall('addRozbieznoscDoZapowiedziFaktur', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddRozbieznoscDoZapowiedziFaktur;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addZalacznikDoReklamacji
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\AddZalacznikDoReklamacji $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\AddZalacznikDoReklamacjiResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function addZalacznikDoReklamacji(\app\modules\postal\modules\poczta_polska\sender\StructType\AddZalacznikDoReklamacji $parameters)
    {
        try {
            $this->setResult($resultAddZalacznikDoReklamacji = $this->getSoapClient()->__soapCall('addZalacznikDoReklamacji', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAddZalacznikDoReklamacji;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\AddOdwolanieDoReklamacjiResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\AddReklamacjeResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\AddRozbieznoscDoZapowiedziFakturResponse|AddShipmentResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\AddZalacznikDoReklamacjiResponse
     *@see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
