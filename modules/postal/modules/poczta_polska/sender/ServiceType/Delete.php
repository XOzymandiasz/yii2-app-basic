<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

use app\modules\postal\modules\poczta_polska\sender\StructType\DeleteReturnDocumentsProfile;
use app\modules\postal\modules\poczta_polska\sender\StructType\DeleteReturnDocumentsProfileResponse;
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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\DeleteShopEZwroty $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\DeleteShopEZwrotyResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function deleteShopEZwroty(\app\modules\postal\modules\poczta_polska\sender\StructType\DeleteShopEZwroty $parameters)
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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\DeleteParcelContent $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\DeleteParcelContentResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function deleteParcelContent(\app\modules\postal\modules\poczta_polska\sender\StructType\DeleteParcelContent $parameters)
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
     * @param int|null $profileId
     * @return DeleteReturnDocumentsProfileResponse|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function deleteReturnDocumentsProfile(?int $profileId): ?DeleteReturnDocumentsProfileResponse
    {
        try {
            $this->setResult($resultDeleteReturnDocumentsProfile = $this->getSoapClient()->__soapCall('deleteReturnDocumentsProfile', [
                new DeleteReturnDocumentsProfile($profileId),
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteReturnDocumentsProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }

        return null;
    }
    /**
     * Method to call the operation originally named deleteChecklistTemplate
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\DeleteChecklistTemplate $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\DeleteChecklistTemplateResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function deleteChecklistTemplate(\app\modules\postal\modules\poczta_polska\sender\StructType\DeleteChecklistTemplate $parameters)
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
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\DeleteChecklistTemplateResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\DeleteParcelContentResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\DeleteReturnDocumentsProfileResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\DeleteShopEZwrotyResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
