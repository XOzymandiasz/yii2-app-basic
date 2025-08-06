<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

use app\modules\postal\modules\poczta_polska\sender\StructType\CreateEnvelopeBufor;
use app\modules\postal\modules\poczta_polska\sender\StructType\CreateEnvelopeBuforResponse;
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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\CreateAccount $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\CreateAccountResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function createAccount(\app\modules\postal\modules\poczta_polska\sender\StructType\CreateAccount $parameters)
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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\CreateProfil $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\CreateProfilResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function createProfil(\app\modules\postal\modules\poczta_polska\sender\StructType\CreateProfil $parameters)
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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\CreateShopEZwroty $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\CreateShopEZwrotyResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function createShopEZwroty(\app\modules\postal\modules\poczta_polska\sender\StructType\CreateShopEZwroty $parameters)
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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\CreateParcelContent $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\CreateParcelContentResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function createParcelContent(\app\modules\postal\modules\poczta_polska\sender\StructType\CreateParcelContent $parameters)
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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\CreateReturnDocumentsProfile $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\CreateReturnDocumentsProfileResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function createReturnDocumentsProfile(\app\modules\postal\modules\poczta_polska\sender\StructType\CreateReturnDocumentsProfile $parameters)
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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\CreateChecklistTemplate $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\CreateChecklistTemplateResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function createChecklistTemplate(\app\modules\postal\modules\poczta_polska\sender\StructType\CreateChecklistTemplate $parameters)
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
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\CreateAccountResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\CreateChecklistTemplateResponse|CreateEnvelopeBuforResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\CreateParcelContentResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\CreateProfilResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\CreateReturnDocumentsProfileResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\CreateShopEZwrotyResponse
     *@see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
