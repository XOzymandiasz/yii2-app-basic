<?php

declare(strict_types=1);

namespace app\modules\postal\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named deleteShopEZwroty
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\DeleteShopEZwroty $parameters
     * @return \app\modules\postal\sender\StructType\DeleteShopEZwrotyResponse|bool
     */
    public function deleteShopEZwroty(\app\modules\postal\sender\StructType\DeleteShopEZwroty $parameters)
    {
        try {
            $this->setResult($resultDeleteShopEZwroty = $this->getSoapClient()->__soapCall('deleteShopEZwroty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteShopEZwroty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteParcelContent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\DeleteParcelContent $parameters
     * @return \app\modules\postal\sender\StructType\DeleteParcelContentResponse|bool
     */
    public function deleteParcelContent(\app\modules\postal\sender\StructType\DeleteParcelContent $parameters)
    {
        try {
            $this->setResult($resultDeleteParcelContent = $this->getSoapClient()->__soapCall('deleteParcelContent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteParcelContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteReturnDocumentsProfile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\DeleteReturnDocumentsProfile $parameters
     * @return \app\modules\postal\sender\StructType\DeleteReturnDocumentsProfileResponse|bool
     */
    public function deleteReturnDocumentsProfile(\app\modules\postal\sender\StructType\DeleteReturnDocumentsProfile $parameters)
    {
        try {
            $this->setResult($resultDeleteReturnDocumentsProfile = $this->getSoapClient()->__soapCall('deleteReturnDocumentsProfile', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteReturnDocumentsProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteChecklistTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\DeleteChecklistTemplate $parameters
     * @return \app\modules\postal\sender\StructType\DeleteChecklistTemplateResponse|bool
     */
    public function deleteChecklistTemplate(\app\modules\postal\sender\StructType\DeleteChecklistTemplate $parameters)
    {
        try {
            $this->setResult($resultDeleteChecklistTemplate = $this->getSoapClient()->__soapCall('deleteChecklistTemplate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteChecklistTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \app\modules\postal\sender\StructType\DeleteChecklistTemplateResponse|\app\modules\postal\sender\StructType\DeleteParcelContentResponse|\app\modules\postal\sender\StructType\DeleteReturnDocumentsProfileResponse|\app\modules\postal\sender\StructType\DeleteShopEZwrotyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
