<?php

declare(strict_types=1);

namespace app\modules\postal\sender\ServiceType;

use app\modules\postal\sender\StructType\CreateEnvelopeBufor;
use app\modules\postal\sender\StructType\CreateEnvelopeBuforResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named createEnvelopeBufor
     * @param CreateEnvelopeBufor $parameters
     * @return CreateEnvelopeBuforResponse|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function createEnvelopeBufor(CreateEnvelopeBufor $parameters): CreateEnvelopeBuforResponse|null
    {
        try {
            $this->setResult($resultCreateEnvelopeBufor = $this->getSoapClient()->__soapCall('createEnvelopeBufor', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }

        return null;
    }
    /**
     * Method to call the operation originally named createAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\CreateAccount $parameters
     * @return \app\modules\postal\sender\StructType\CreateAccountResponse|bool
     */
    public function createAccount(\app\modules\postal\sender\StructType\CreateAccount $parameters)
    {
        try {
            $this->setResult($resultCreateAccount = $this->getSoapClient()->__soapCall('createAccount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createProfil
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\CreateProfil $parameters
     * @return \app\modules\postal\sender\StructType\CreateProfilResponse|bool
     */
    public function createProfil(\app\modules\postal\sender\StructType\CreateProfil $parameters)
    {
        try {
            $this->setResult($resultCreateProfil = $this->getSoapClient()->__soapCall('createProfil', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateProfil;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createShopEZwroty
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\CreateShopEZwroty $parameters
     * @return \app\modules\postal\sender\StructType\CreateShopEZwrotyResponse|bool
     */
    public function createShopEZwroty(\app\modules\postal\sender\StructType\CreateShopEZwroty $parameters)
    {
        try {
            $this->setResult($resultCreateShopEZwroty = $this->getSoapClient()->__soapCall('createShopEZwroty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateShopEZwroty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createParcelContent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\CreateParcelContent $parameters
     * @return \app\modules\postal\sender\StructType\CreateParcelContentResponse|bool
     */
    public function createParcelContent(\app\modules\postal\sender\StructType\CreateParcelContent $parameters)
    {
        try {
            $this->setResult($resultCreateParcelContent = $this->getSoapClient()->__soapCall('createParcelContent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateParcelContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createReturnDocumentsProfile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\CreateReturnDocumentsProfile $parameters
     * @return \app\modules\postal\sender\StructType\CreateReturnDocumentsProfileResponse|bool
     */
    public function createReturnDocumentsProfile(\app\modules\postal\sender\StructType\CreateReturnDocumentsProfile $parameters)
    {
        try {
            $this->setResult($resultCreateReturnDocumentsProfile = $this->getSoapClient()->__soapCall('createReturnDocumentsProfile', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateReturnDocumentsProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createChecklistTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\CreateChecklistTemplate $parameters
     * @return \app\modules\postal\sender\StructType\CreateChecklistTemplateResponse|bool
     */
    public function createChecklistTemplate(\app\modules\postal\sender\StructType\CreateChecklistTemplate $parameters)
    {
        try {
            $this->setResult($resultCreateChecklistTemplate = $this->getSoapClient()->__soapCall('createChecklistTemplate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateChecklistTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @return \app\modules\postal\sender\StructType\CreateAccountResponse|\app\modules\postal\sender\StructType\CreateChecklistTemplateResponse|CreateEnvelopeBuforResponse|\app\modules\postal\sender\StructType\CreateParcelContentResponse|\app\modules\postal\sender\StructType\CreateProfilResponse|\app\modules\postal\sender\StructType\CreateReturnDocumentsProfileResponse|\app\modules\postal\sender\StructType\CreateShopEZwrotyResponse
     *@see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
