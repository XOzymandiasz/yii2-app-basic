<?php

declare(strict_types=1);

namespace app\modules\postal\sender\ServiceType;

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
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\SetAktywnaKarta $parameters
     * @return \app\modules\postal\sender\StructType\SetAktywnaKartaResponse|bool
     */
    public function setAktywnaKarta(\app\modules\postal\sender\StructType\SetAktywnaKarta $parameters)
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
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\SetEnvelopeBuforDataNadania $parameters
     * @return \app\modules\postal\sender\StructType\SetEnvelopeBuforDataNadaniaResponse|bool
     */
    public function setEnvelopeBuforDataNadania(\app\modules\postal\sender\StructType\SetEnvelopeBuforDataNadania $parameters)
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
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\SetStatusZgodyNaEZwrot $parameters
     * @return \app\modules\postal\sender\StructType\SetStatusZgodyNaEZwrotResponse|bool
     */
    public function setStatusZgodyNaEZwrot(\app\modules\postal\sender\StructType\SetStatusZgodyNaEZwrot $parameters)
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
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \app\modules\postal\sender\StructType\SetJednostkaOrganizacyjna $parameters
     * @return \app\modules\postal\sender\StructType\SetJednostkaOrganizacyjnaResponse|bool
     */
    public function setJednostkaOrganizacyjna(\app\modules\postal\sender\StructType\SetJednostkaOrganizacyjna $parameters)
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
     * @see AbstractSoapClientBase::getResult()
     * @return \app\modules\postal\sender\StructType\SetAktywnaKartaResponse|\app\modules\postal\sender\StructType\SetEnvelopeBuforDataNadaniaResponse|\app\modules\postal\sender\StructType\SetJednostkaOrganizacyjnaResponse|\app\modules\postal\sender\StructType\SetStatusZgodyNaEZwrotResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
