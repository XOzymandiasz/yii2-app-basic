<?php

declare(strict_types=1);

namespace app\modules\postal\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named updateEnvelopeBufor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\UpdateEnvelopeBufor $parameters
     * @return \app\modules\postal\sender\StructType\UpdateEnvelopeBuforResponse|bool
     */
    public function updateEnvelopeBufor(\app\modules\postal\sender\StructType\UpdateEnvelopeBufor $parameters)
    {
        try {
            $this->setResult($resultUpdateEnvelopeBufor = $this->getSoapClient()->__soapCall('updateEnvelopeBufor', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\UpdateAccount $parameters
     * @return \app\modules\postal\sender\StructType\UpdateAccountResponse|bool
     */
    public function updateAccount(\app\modules\postal\sender\StructType\UpdateAccount $parameters)
    {
        try {
            $this->setResult($resultUpdateAccount = $this->getSoapClient()->__soapCall('updateAccount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateProfil
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\UpdateProfil $parameters
     * @return \app\modules\postal\sender\StructType\UpdateProfilResponse|bool
     */
    public function updateProfil(\app\modules\postal\sender\StructType\UpdateProfil $parameters)
    {
        try {
            $this->setResult($resultUpdateProfil = $this->getSoapClient()->__soapCall('updateProfil', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateProfil;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateShopEZwroty
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\UpdateShopEZwroty $parameters
     * @return \app\modules\postal\sender\StructType\UpdateShopEZwrotyResponse|bool
     */
    public function updateShopEZwroty(\app\modules\postal\sender\StructType\UpdateShopEZwroty $parameters)
    {
        try {
            $this->setResult($resultUpdateShopEZwroty = $this->getSoapClient()->__soapCall('updateShopEZwroty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateShopEZwroty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateParcelContent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\UpdateParcelContent $parameters
     * @return \app\modules\postal\sender\StructType\UpdateParcelContentResponse|bool
     */
    public function updateParcelContent(\app\modules\postal\sender\StructType\UpdateParcelContent $parameters)
    {
        try {
            $this->setResult($resultUpdateParcelContent = $this->getSoapClient()->__soapCall('updateParcelContent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateParcelContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateReturnDocumentsProfile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\UpdateReturnDocumentsProfile $parameters
     * @return \app\modules\postal\sender\StructType\UpdateReturnDocumentsProfileResponse|bool
     */
    public function updateReturnDocumentsProfile(\app\modules\postal\sender\StructType\UpdateReturnDocumentsProfile $parameters)
    {
        try {
            $this->setResult($resultUpdateReturnDocumentsProfile = $this->getSoapClient()->__soapCall('updateReturnDocumentsProfile', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateReturnDocumentsProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateChecklistTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\UpdateChecklistTemplate $parameters
     * @return \app\modules\postal\sender\StructType\UpdateChecklistTemplateResponse|bool
     */
    public function updateChecklistTemplate(\app\modules\postal\sender\StructType\UpdateChecklistTemplate $parameters)
    {
        try {
            $this->setResult($resultUpdateChecklistTemplate = $this->getSoapClient()->__soapCall('updateChecklistTemplate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateChecklistTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \app\modules\postal\sender\StructType\UpdateAccountResponse|\app\modules\postal\sender\StructType\UpdateChecklistTemplateResponse|\app\modules\postal\sender\StructType\UpdateEnvelopeBuforResponse|\app\modules\postal\sender\StructType\UpdateParcelContentResponse|\app\modules\postal\sender\StructType\UpdateProfilResponse|\app\modules\postal\sender\StructType\UpdateReturnDocumentsProfileResponse|\app\modules\postal\sender\StructType\UpdateShopEZwrotyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
