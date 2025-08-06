<?php

declare(strict_types=1);

namespace app\modules\postal\modules\poczta_polska\sender\ServiceType;

use app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforList;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforListResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeList;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeListResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetPlacowkiPocztowe;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetPrintForParcel;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetPrintForParcelResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetUrzedyNadania;
use app\modules\postal\modules\poczta_polska\sender\StructType\GetUrzedyNadaniaResponse;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrintType;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getUrzedyNadania
     * @param GetUrzedyNadania $parameters
     * @return GetUrzedyNadaniaResponse|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getUrzedyNadania(\app\modules\postal\modules\poczta_polska\sender\StructType\GetUrzedyNadania $parameters): GetUrzedyNadaniaResponse|null
    {
        try {
            $this->setResult($resultGetUrzedyNadania = $this->getSoapClient()->__soapCall('getUrzedyNadania', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUrzedyNadania;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);


        }
        return null;
    }

    /**
     * Method to call the operation originally named getUrzedyWydajaceEPrzesylki
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetUrzedyWydajaceEPrzesylki $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetUrzedyWydajaceEPrzesylkiResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getUrzedyWydajaceEPrzesylki(\app\modules\postal\modules\poczta_polska\sender\StructType\GetUrzedyWydajaceEPrzesylki $parameters)
    {
        try {
            $this->setResult($resultGetUrzedyWydajaceEPrzesylki = $this->getSoapClient()->__soapCall('getUrzedyWydajaceEPrzesylki', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUrzedyWydajaceEPrzesylki;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeStatus
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeStatus $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeStatusResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getEnvelopeStatus(\app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeStatus $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeStatus = $this->getSoapClient()->__soapCall('getEnvelopeStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getKarty
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetKarty $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetKartyResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getKarty(\app\modules\postal\modules\poczta_polska\sender\StructType\GetKarty $parameters)
    {
        try {
            $this->setResult($resultGetKarty = $this->getSoapClient()->__soapCall('getKarty', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetKarty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPasswordExpiredDate
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetPasswordExpiredDate $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetPasswordExpiredDateResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getPasswordExpiredDate(\app\modules\postal\modules\poczta_polska\sender\StructType\GetPasswordExpiredDate $parameters)
    {
        try {
            $this->setResult($resultGetPasswordExpiredDate = $this->getSoapClient()->__soapCall('getPasswordExpiredDate', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPasswordExpiredDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeContentShort
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentShort $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentShortResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getEnvelopeContentShort(\app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentShort $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeContentShort = $this->getSoapClient()->__soapCall('getEnvelopeContentShort', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeContentShort;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeContentFull
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentFull $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentFullResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getEnvelopeContentFull(\app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentFull $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeContentFull = $this->getSoapClient()->__soapCall('getEnvelopeContentFull', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeContentFull;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAddressLabel
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetAddressLabel $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetAddressLabelResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getAddressLabel(\app\modules\postal\modules\poczta_polska\sender\StructType\GetAddressLabel $parameters)
    {
        try {
            $this->setResult($resultGetAddressLabel = $this->getSoapClient()->__soapCall('getAddressLabel', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAddressLabel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getOutboxBook
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetOutboxBook $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetOutboxBookResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getOutboxBook(\app\modules\postal\modules\poczta_polska\sender\StructType\GetOutboxBook $parameters)
    {
        try {
            $this->setResult($resultGetOutboxBook = $this->getSoapClient()->__soapCall('getOutboxBook', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetOutboxBook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getFirmowaPocztaBook
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetFirmowaPocztaBook $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetFirmowaPocztaBookResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getFirmowaPocztaBook(\app\modules\postal\modules\poczta_polska\sender\StructType\GetFirmowaPocztaBook $parameters)
    {
        try {
            $this->setResult($resultGetFirmowaPocztaBook = $this->getSoapClient()->__soapCall('getFirmowaPocztaBook', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetFirmowaPocztaBook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }


    /**
     * @param string $startDate
     * @param string $endDate
     * @return GetEnvelopeListResponse|null
     */
    public function getEnvelopeList(string $startDate, string $endDate): ?GetEnvelopeListResponse
    {
        try {
            $this->setResult($resultGetEnvelopeList = $this->getSoapClient()->__soapCall('getEnvelopeList', [
                new GetEnvelopeList($startDate, $endDate),
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

        }

        return null;
    }

    /**
     * Method to call the operation originally named getAddresLabelByGuid
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuid $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuidResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getAddresLabelByGuid(\app\modules\postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuid $parameters)
    {
        try {
            $this->setResult($resultGetAddresLabelByGuid = $this->getSoapClient()->__soapCall('getAddresLabelByGuid', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAddresLabelByGuid;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPlacowkiPocztowe
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetPlacowkiPocztowe $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetPlacowkiPocztoweResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getPlacowkiPocztowe(GetPlacowkiPocztowe $parameters)
    {
        try {
            $this->setResult($resultGetPlacowkiPocztowe = $this->getSoapClient()->__soapCall('getPlacowkiPocztowe', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPlacowkiPocztowe;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;
    }

    /**
     * Method to call the operation originally named getGuid
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetGuid $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetGuidResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getGuid(\app\modules\postal\modules\poczta_polska\sender\StructType\GetGuid $parameters)
    {
        try {
            $this->setResult($resultGetGuid = $this->getSoapClient()->__soapCall('getGuid', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetGuid;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getKierunki
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetKierunki $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetKierunkiResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getKierunki(\app\modules\postal\modules\poczta_polska\sender\StructType\GetKierunki $parameters)
    {
        try {
            $this->setResult($resultGetKierunki = $this->getSoapClient()->__soapCall('getKierunki', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetKierunki;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getKierunkiInfo
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetKierunkiInfo $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetKierunkiInfoResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getKierunkiInfo(\app\modules\postal\modules\poczta_polska\sender\StructType\GetKierunkiInfo $parameters)
    {
        try {
            $this->setResult($resultGetKierunkiInfo = $this->getSoapClient()->__soapCall('getKierunkiInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetKierunkiInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeBufor
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeBufor $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getEnvelopeBufor(\app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeBufor $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeBufor = $this->getSoapClient()->__soapCall('getEnvelopeBufor', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEPOStatus
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetEPOStatus $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetEPOStatusResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getEPOStatus(\app\modules\postal\modules\poczta_polska\sender\StructType\GetEPOStatus $parameters)
    {
        try {
            $this->setResult($resultGetEPOStatus = $this->getSoapClient()->__soapCall('getEPOStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEPOStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAddresLabelCompact
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetAddresLabelCompact $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetAddresLabelCompactResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getAddresLabelCompact(\app\modules\postal\modules\poczta_polska\sender\StructType\GetAddresLabelCompact $parameters)
    {
        try {
            $this->setResult($resultGetAddresLabelCompact = $this->getSoapClient()->__soapCall('getAddresLabelCompact', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAddresLabelCompact;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAddresLabelByGuidCompact
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuidCompact $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuidCompactResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getAddresLabelByGuidCompact(\app\modules\postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuidCompact $parameters)
    {
        try {
            $this->setResult($resultGetAddresLabelByGuidCompact = $this->getSoapClient()->__soapCall('getAddresLabelByGuidCompact', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAddresLabelByGuidCompact;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeBuforList
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforListResponse|null
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     */
    public function getEnvelopeBuforList(): ?GetEnvelopeBuforListResponse
    {
        try {
            $this->setResult($resultGetEnvelopeBuforList = $this->getSoapClient()->__soapCall('getEnvelopeBuforList', [
                new GetEnvelopeBuforList(),
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeBuforList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return null;
        }
    }

    /**
     * Method to call the operation originally named getUbezpieczeniaInfo
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetUbezpieczeniaInfo $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetUbezpieczeniaInfoResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getUbezpieczeniaInfo(\app\modules\postal\modules\poczta_polska\sender\StructType\GetUbezpieczeniaInfo $parameters)
    {
        try {
            $this->setResult($resultGetUbezpieczeniaInfo = $this->getSoapClient()->__soapCall('getUbezpieczeniaInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUbezpieczeniaInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getBlankietPobraniaByGuids
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetBlankietPobraniaByGuids $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetBlankietPobraniaByGuidsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getBlankietPobraniaByGuids(\app\modules\postal\modules\poczta_polska\sender\StructType\GetBlankietPobraniaByGuids $parameters)
    {
        try {
            $this->setResult($resultGetBlankietPobraniaByGuids = $this->getSoapClient()->__soapCall('getBlankietPobraniaByGuids', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetBlankietPobraniaByGuids;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAccountList
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetAccountList $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetAccountListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getAccountList(\app\modules\postal\modules\poczta_polska\sender\StructType\GetAccountList $parameters)
    {
        try {
            $this->setResult($resultGetAccountList = $this->getSoapClient()->__soapCall('getAccountList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAccountList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getProfilList
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetProfilList $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetProfilListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getProfilList(\app\modules\postal\modules\poczta_polska\sender\StructType\GetProfilList $parameters)
    {
        try {
            $this->setResult($resultGetProfilList = $this->getSoapClient()->__soapCall('getProfilList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetProfilList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getReklamacje
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetReklamacje $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetReklamacjeResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getReklamacje(\app\modules\postal\modules\poczta_polska\sender\StructType\GetReklamacje $parameters)
    {
        try {
            $this->setResult($resultGetReklamacje = $this->getSoapClient()->__soapCall('getReklamacje', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReklamacje;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getZapowiedziFaktur
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetZapowiedziFaktur $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetZapowiedziFakturResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getZapowiedziFaktur(\app\modules\postal\modules\poczta_polska\sender\StructType\GetZapowiedziFaktur $parameters)
    {
        try {
            $this->setResult($resultGetZapowiedziFaktur = $this->getSoapClient()->__soapCall('getZapowiedziFaktur', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetZapowiedziFaktur;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getListaPowodowReklamacji
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetListaPowodowReklamacji $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetListaPowodowReklamacjiResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getListaPowodowReklamacji(\app\modules\postal\modules\poczta_polska\sender\StructType\GetListaPowodowReklamacji $parameters)
    {
        try {
            $this->setResult($resultGetListaPowodowReklamacji = $this->getSoapClient()->__soapCall('getListaPowodowReklamacji', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetListaPowodowReklamacji;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEZDO
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetEZDO $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetEZDOResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getEZDO(\app\modules\postal\modules\poczta_polska\sender\StructType\GetEZDO $parameters)
    {
        try {
            $this->setResult($resultGetEZDO = $this->getSoapClient()->__soapCall('getEZDO', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEZDO;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEZDOList
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetEZDOList $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetEZDOListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getEZDOList(\app\modules\postal\modules\poczta_polska\sender\StructType\GetEZDOList $parameters)
    {
        try {
            $this->setResult($resultGetEZDOList = $this->getSoapClient()->__soapCall('getEZDOList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEZDOList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getWplatyCKP
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetWplatyCKP $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetWplatyCKPResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getWplatyCKP(\app\modules\postal\modules\poczta_polska\sender\StructType\GetWplatyCKP $parameters)
    {
        try {
            $this->setResult($resultGetWplatyCKP = $this->getSoapClient()->__soapCall('getWplatyCKP', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWplatyCKP;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getListaZgodEZwrotow
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetListaZgodEZwrotow $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetListaZgodEZwrotowResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getListaZgodEZwrotow(\app\modules\postal\modules\poczta_polska\sender\StructType\GetListaZgodEZwrotow $parameters)
    {
        try {
            $this->setResult($resultGetListaZgodEZwrotow = $this->getSoapClient()->__soapCall('getListaZgodEZwrotow', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetListaZgodEZwrotow;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getJednostkaOrganizacyjna
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetJednostkaOrganizacyjna $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetJednostkaOrganizacyjnaResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getJednostkaOrganizacyjna(\app\modules\postal\modules\poczta_polska\sender\StructType\GetJednostkaOrganizacyjna $parameters)
    {
        try {
            $this->setResult($resultGetJednostkaOrganizacyjna = $this->getSoapClient()->__soapCall('getJednostkaOrganizacyjna', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetJednostkaOrganizacyjna;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPrintForParcel
     * Meta information extracted from the WSDL
     * - documentation: The method returns parcels printouts for passed guid's
     * @param GetPrintForParcel $parameters
     * @return GetPrintForParcelResponse|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getPrintForParcel(?array $guid, ?PrintType $type): GetPrintForParcelResponse|null
    {
        try {
            $this->setResult($resultGetPrintForParcel = $this->getSoapClient()->__soapCall('getPrintForParcel', [
                new GetPrintForParcel($guid, $type),
            ], [], [], $this->outputHeaders));

            return $resultGetPrintForParcel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

        }

        return null;
    }

    /**
     * Method to call the operation originally named getShopEZwrotyList
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetShopEZwrotyList $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetShopEZwrotyListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getShopEZwrotyList(\app\modules\postal\modules\poczta_polska\sender\StructType\GetShopEZwrotyList $parameters)
    {
        try {
            $this->setResult($resultGetShopEZwrotyList = $this->getSoapClient()->__soapCall('getShopEZwrotyList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetShopEZwrotyList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getLibrariesForLegalDeposits
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetLibrariesForLegalDeposits $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetLibrariesForLegalDepositsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getLibrariesForLegalDeposits(\app\modules\postal\modules\poczta_polska\sender\StructType\GetLibrariesForLegalDeposits $parameters)
    {
        try {
            $this->setResult($resultGetLibrariesForLegalDeposits = $this->getSoapClient()->__soapCall('getLibrariesForLegalDeposits', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLibrariesForLegalDeposits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPlacowkaPocztowa
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetPlacowkaPocztowa $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetPlacowkaPocztowaResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getPlacowkaPocztowa(\app\modules\postal\modules\poczta_polska\sender\StructType\GetPlacowkaPocztowa $parameters)
    {
        try {
            $this->setResult($resultGetPlacowkaPocztowa = $this->getSoapClient()->__soapCall('getPlacowkaPocztowa', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPlacowkaPocztowa;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getParcelContentList
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetParcelContentList $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetParcelContentListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getParcelContentList(\app\modules\postal\modules\poczta_polska\sender\StructType\GetParcelContentList $parameters)
    {
        try {
            $this->setResult($resultGetParcelContentList = $this->getSoapClient()->__soapCall('getParcelContentList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetParcelContentList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getReturnDocumentsProfileList
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetReturnDocumentsProfileList $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetReturnDocumentsProfileListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getReturnDocumentsProfileList(\app\modules\postal\modules\poczta_polska\sender\StructType\GetReturnDocumentsProfileList $parameters)
    {
        try {
            $this->setResult($resultGetReturnDocumentsProfileList = $this->getSoapClient()->__soapCall('getReturnDocumentsProfileList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReturnDocumentsProfileList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getChecklistTemplateList
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetChecklistTemplateList $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetChecklistTemplateListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getChecklistTemplateList(\app\modules\postal\modules\poczta_polska\sender\StructType\GetChecklistTemplateList $parameters)
    {
        try {
            $this->setResult($resultGetChecklistTemplateList = $this->getSoapClient()->__soapCall('getChecklistTemplateList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetChecklistTemplateList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAdditionalActivitiesList
     * @param \app\modules\postal\modules\poczta_polska\sender\StructType\GetAdditionalActivitiesList $parameters
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetAdditionalActivitiesListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getAdditionalActivitiesList(\app\modules\postal\modules\poczta_polska\sender\StructType\GetAdditionalActivitiesList $parameters)
    {
        try {
            $this->setResult($resultGetAdditionalActivitiesList = $this->getSoapClient()->__soapCall('getAdditionalActivitiesList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAdditionalActivitiesList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     * @return \app\modules\postal\modules\poczta_polska\sender\StructType\GetAccountListResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetAdditionalActivitiesListResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuidCompactResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuidResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetAddresLabelCompactResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetAddressLabelResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetBlankietPobraniaByGuidsResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetChecklistTemplateListResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforListResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentFullResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentShortResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeListResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetEnvelopeStatusResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetEPOStatusResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetEZDOListResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetEZDOResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetFirmowaPocztaBookResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetGuidResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetJednostkaOrganizacyjnaResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetKartyResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetKierunkiInfoResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetKierunkiResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetLibrariesForLegalDepositsResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetListaPowodowReklamacjiResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetListaZgodEZwrotowResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetOutboxBookResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetParcelContentListResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetPasswordExpiredDateResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetPlacowkaPocztowaResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetPlacowkiPocztoweResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetPrintForParcelResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetProfilListResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetReklamacjeResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetReturnDocumentsProfileListResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetShopEZwrotyListResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetUbezpieczeniaInfoResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetUrzedyNadaniaResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetUrzedyWydajaceEPrzesylkiResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetWplatyCKPResponse|\app\modules\postal\modules\poczta_polska\sender\StructType\GetZapowiedziFakturResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
