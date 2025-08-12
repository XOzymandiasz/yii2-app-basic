<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

use app\modules\postal\modules\poczta_polska\sender\StructType\AccountType;
use app\modules\postal\modules\poczta_polska\sender\StructType\ProfilType;
use app\modules\postal\modules\poczta_polska\sender\StructType\UpdateAccount;
use app\modules\postal\modules\poczta_polska\sender\StructType\UpdateAccountResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\UpdateEnvelopeBufor;
use app\modules\postal\modules\poczta_polska\sender\StructType\UpdateEnvelopeBuforResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\UpdateProfil;
use app\modules\postal\modules\poczta_polska\sender\StructType\UpdateProfilResponse;
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
     * @param UpdateEnvelopeBufor $parameters
     * @return UpdateEnvelopeBuforResponse|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function updateEnvelopeBufor(?array $buffer): UpdateEnvelopeBuforResponse|null
    {
        try {
            $this->setResult($resultUpdateEnvelopeBufor = $this->getSoapClient()->__soapCall('updateEnvelopeBufor', [
                new UpdateEnvelopeBufor($buffer),
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

        }

        return null;
    }
    /**
     * Method to call the operation originally named updateAccount
     * @param UpdateAccount $parameters
     * @return UpdateAccountResponse|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function updateAccount(AccountType $account): UpdateAccountResponse|null
    {
        try {
            $this->setResult($resultUpdateAccount = $this->getSoapClient()->__soapCall('updateAccount', [
                new UpdateAccount($account),
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

        }
        return null;
    }
    /**
     * Method to call the operation originally named updateProfil
     * @param UpdateProfil $parameters
     * @return UpdateProfilResponse|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function updateProfil(ProfilType $profile): UpdateProfilResponse|null
    {
        try {
            $this->setResult($resultUpdateProfil = $this->getSoapClient()->__soapCall('updateProfil', [
                new UpdateProfil($profile),
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateProfil;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;
    }
    /**
     * Method to call the operation originally named updateShopEZwroty
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UpdateShopEZwroty $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\UpdateShopEZwrotyResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function updateShopEZwroty(\app\modules\postal\modules\poczta_polska\sender\StructType\UpdateShopEZwroty $parameters)
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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UpdateParcelContent $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\UpdateParcelContentResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function updateParcelContent(\app\modules\postal\modules\poczta_polska\sender\StructType\UpdateParcelContent $parameters)
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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UpdateReturnDocumentsProfile $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\UpdateReturnDocumentsProfileResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function updateReturnDocumentsProfile(\app\modules\postal\modules\poczta_polska\sender\StructType\UpdateReturnDocumentsProfile $parameters)
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
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\UpdateChecklistTemplate $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\UpdateChecklistTemplateResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function updateChecklistTemplate(\app\modules\postal\modules\poczta_polska\sender\StructType\UpdateChecklistTemplate $parameters)
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
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\UpdateAccountResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\UpdateChecklistTemplateResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\UpdateEnvelopeBuforResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\UpdateParcelContentResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\UpdateProfilResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\UpdateReturnDocumentsProfileResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\UpdateShopEZwrotyResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
