<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 * @subpackage Services
 */
class Set extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named setAktywnaKarta
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\SetAktywnaKarta $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\SetAktywnaKartaResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function setAktywnaKarta(\app\modules\postal\modules\poczta_polska\sender\StructType\SetAktywnaKarta $parameters)
    {
        try {
            $this->setResult($resultSetAktywnaKarta = $this->getSoapClient()->__soapCall('setAktywnaKarta', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetAktywnaKarta;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setEnvelopeBuforDataNadania
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\SetEnvelopeBuforDataNadania $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\SetEnvelopeBuforDataNadaniaResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function setEnvelopeBuforDataNadania(\app\modules\postal\modules\poczta_polska\sender\StructType\SetEnvelopeBuforDataNadania $parameters)
    {
        try {
            $this->setResult($resultSetEnvelopeBuforDataNadania = $this->getSoapClient()->__soapCall('setEnvelopeBuforDataNadania', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetEnvelopeBuforDataNadania;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setStatusZgodyNaEZwrot
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\SetStatusZgodyNaEZwrot $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\SetStatusZgodyNaEZwrotResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function setStatusZgodyNaEZwrot(\app\modules\postal\modules\poczta_polska\sender\StructType\SetStatusZgodyNaEZwrot $parameters)
    {
        try {
            $this->setResult($resultSetStatusZgodyNaEZwrot = $this->getSoapClient()->__soapCall('setStatusZgodyNaEZwrot', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetStatusZgodyNaEZwrot;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setJednostkaOrganizacyjna
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\SetJednostkaOrganizacyjna $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\SetJednostkaOrganizacyjnaResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function setJednostkaOrganizacyjna(\app\modules\postal\modules\poczta_polska\sender\StructType\SetJednostkaOrganizacyjna $parameters)
    {
        try {
            $this->setResult($resultSetJednostkaOrganizacyjna = $this->getSoapClient()->__soapCall('setJednostkaOrganizacyjna', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSetJednostkaOrganizacyjna;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\SetAktywnaKartaResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\SetEnvelopeBuforDataNadaniaResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\SetJednostkaOrganizacyjnaResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\SetStatusZgodyNaEZwrotResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
