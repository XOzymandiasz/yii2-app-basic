<?php

namespace app\modules\postal\sender;

use Phpro\SoapClient\Caller\Caller;
use app\modules\postal\sender\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class PocztaPolskaSenderClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface & Type\AddShipment $parameters
     * @return ResultInterface & Type\AddShipmentResponse
     * @throws SoapException
     */
    public function addShipment(\app\modules\postal\sender\Type\AddShipment $parameters) : \app\modules\postal\sender\Type\AddShipmentResponse
    {
        $response = ($this->caller)('addShipment', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\AddShipmentResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ChangePassword $parameters
     * @return ResultInterface & Type\ChangePasswordResponse
     * @throws SoapException
     */
    public function changePassword(\app\modules\postal\sender\Type\ChangePassword $parameters) : \app\modules\postal\sender\Type\ChangePasswordResponse
    {
        $response = ($this->caller)('changePassword', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\ChangePasswordResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendEnvelope $parameters
     * @return ResultInterface & Type\SendEnvelopeResponseType
     * @throws SoapException
     */
    public function sendEnvelope(\app\modules\postal\sender\Type\SendEnvelope $parameters) : \app\modules\postal\sender\Type\SendEnvelopeResponseType
    {
        $response = ($this->caller)('sendEnvelope', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\SendEnvelopeResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUrzedyNadania $parameters
     * @return ResultInterface & Type\GetUrzedyNadaniaResponse
     * @throws SoapException
     */
    public function getUrzedyNadania(\app\modules\postal\sender\Type\GetUrzedyNadania $parameters) : \app\modules\postal\sender\Type\GetUrzedyNadaniaResponse
    {
        $response = ($this->caller)('getUrzedyNadania', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetUrzedyNadaniaResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ClearEnvelope $parameters
     * @return ResultInterface & Type\ClearEnvelopeResponse
     * @throws SoapException
     */
    public function clearEnvelope(\app\modules\postal\sender\Type\ClearEnvelope $parameters) : \app\modules\postal\sender\Type\ClearEnvelopeResponse
    {
        $response = ($this->caller)('clearEnvelope', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\ClearEnvelopeResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUrzedyWydajaceEPrzesylki $parameters
     * @return ResultInterface & Type\GetUrzedyWydajaceEPrzesylkiResponse
     * @throws SoapException
     */
    public function getUrzedyWydajaceEPrzesylki(\app\modules\postal\sender\Type\GetUrzedyWydajaceEPrzesylki $parameters) : \app\modules\postal\sender\Type\GetUrzedyWydajaceEPrzesylkiResponse
    {
        $response = ($this->caller)('getUrzedyWydajaceEPrzesylki', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetUrzedyWydajaceEPrzesylkiResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UploadIWDContent $parameters
     * @return ResultInterface & Type\SendEnvelopeResponseType
     * @throws SoapException
     */
    public function uploadIWDContent(\app\modules\postal\sender\Type\UploadIWDContent $parameters) : \app\modules\postal\sender\Type\SendEnvelopeResponseType
    {
        $response = ($this->caller)('uploadIWDContent', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\SendEnvelopeResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetEnvelopeStatus $parameters
     * @return ResultInterface & Type\GetEnvelopeStatusResponse
     * @throws SoapException
     */
    public function getEnvelopeStatus(\app\modules\postal\sender\Type\GetEnvelopeStatus $parameters) : \app\modules\postal\sender\Type\GetEnvelopeStatusResponse
    {
        $response = ($this->caller)('getEnvelopeStatus', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetEnvelopeStatusResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\DownloadIWDContent $parameters
     * @return ResultInterface & Type\DownloadIWDContentResponse
     * @throws SoapException
     */
    public function downloadIWDContent(\app\modules\postal\sender\Type\DownloadIWDContent $parameters) : \app\modules\postal\sender\Type\DownloadIWDContentResponse
    {
        $response = ($this->caller)('downloadIWDContent', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\DownloadIWDContentResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetKarty $parameters
     * @return ResultInterface & Type\GetKartyResponse
     * @throws SoapException
     */
    public function getKarty(\app\modules\postal\sender\Type\GetKarty $parameters) : \app\modules\postal\sender\Type\GetKartyResponse
    {
        $response = ($this->caller)('getKarty', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetKartyResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetPasswordExpiredDate $parameters
     * @return ResultInterface & Type\GetPasswordExpiredDateResponse
     * @throws SoapException
     */
    public function getPasswordExpiredDate(\app\modules\postal\sender\Type\GetPasswordExpiredDate $parameters) : \app\modules\postal\sender\Type\GetPasswordExpiredDateResponse
    {
        $response = ($this->caller)('getPasswordExpiredDate', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetPasswordExpiredDateResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetAktywnaKarta $parameters
     * @return ResultInterface & Type\SetAktywnaKartaResponse
     * @throws SoapException
     */
    public function setAktywnaKarta(\app\modules\postal\sender\Type\SetAktywnaKarta $parameters) : \app\modules\postal\sender\Type\SetAktywnaKartaResponse
    {
        $response = ($this->caller)('setAktywnaKarta', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\SetAktywnaKartaResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\Hello $parameters
     * @return ResultInterface & Type\HelloResponse
     * @throws SoapException
     */
    public function hello(\app\modules\postal\sender\Type\Hello $parameters) : \app\modules\postal\sender\Type\HelloResponse
    {
        $response = ($this->caller)('hello', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\HelloResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetEnvelopeContentShort $parameters
     * @return ResultInterface & Type\GetEnvelopeContentShortResponse
     * @throws SoapException
     */
    public function getEnvelopeContentShort(\app\modules\postal\sender\Type\GetEnvelopeContentShort $parameters) : \app\modules\postal\sender\Type\GetEnvelopeContentShortResponse
    {
        $response = ($this->caller)('getEnvelopeContentShort', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetEnvelopeContentShortResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetEnvelopeContentFull $parameters
     * @return ResultInterface & Type\GetEnvelopeContentFullResponse
     * @throws SoapException
     */
    public function getEnvelopeContentFull(\app\modules\postal\sender\Type\GetEnvelopeContentFull $parameters) : \app\modules\postal\sender\Type\GetEnvelopeContentFullResponse
    {
        $response = ($this->caller)('getEnvelopeContentFull', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetEnvelopeContentFullResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetAddressLabel $parameters
     * @return ResultInterface & Type\GetAddressLabelResponse
     * @throws SoapException
     */
    public function getAddressLabel(\app\modules\postal\sender\Type\GetAddressLabel $parameters) : \app\modules\postal\sender\Type\GetAddressLabelResponse
    {
        $response = ($this->caller)('getAddressLabel', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetAddressLabelResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetOutboxBook $parameters
     * @return ResultInterface & Type\GetOutboxBookResponse
     * @throws SoapException
     */
    public function getOutboxBook(\app\modules\postal\sender\Type\GetOutboxBook $parameters) : \app\modules\postal\sender\Type\GetOutboxBookResponse
    {
        $response = ($this->caller)('getOutboxBook', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetOutboxBookResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetFirmowaPocztaBook $parameters
     * @return ResultInterface & Type\GetFirmowaPocztaBookResponse
     * @throws SoapException
     */
    public function getFirmowaPocztaBook(\app\modules\postal\sender\Type\GetFirmowaPocztaBook $parameters) : \app\modules\postal\sender\Type\GetFirmowaPocztaBookResponse
    {
        $response = ($this->caller)('getFirmowaPocztaBook', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetFirmowaPocztaBookResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetEnvelopeList $parameters
     * @return ResultInterface & Type\GetEnvelopeListResponse
     * @throws SoapException
     */
    public function getEnvelopeList(\app\modules\postal\sender\Type\GetEnvelopeList $parameters) : \app\modules\postal\sender\Type\GetEnvelopeListResponse
    {
        $response = ($this->caller)('getEnvelopeList', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetEnvelopeListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetAddresLabelByGuid $parameters
     * @return ResultInterface & Type\GetAddresLabelByGuidResponse
     * @throws SoapException
     */
    public function getAddresLabelByGuid(\app\modules\postal\sender\Type\GetAddresLabelByGuid $parameters) : \app\modules\postal\sender\Type\GetAddresLabelByGuidResponse
    {
        $response = ($this->caller)('getAddresLabelByGuid', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetAddresLabelByGuidResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetPlacowkiPocztowe $parameters
     * @return ResultInterface & Type\GetPlacowkiPocztoweResponse
     * @throws SoapException
     */
    public function getPlacowkiPocztowe(\app\modules\postal\sender\Type\GetPlacowkiPocztowe $parameters) : \app\modules\postal\sender\Type\GetPlacowkiPocztoweResponse
    {
        $response = ($this->caller)('getPlacowkiPocztowe', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetPlacowkiPocztoweResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetGuid $parameters
     * @return ResultInterface & Type\GetGuidResponse
     * @throws SoapException
     */
    public function getGuid(\app\modules\postal\sender\Type\GetGuid $parameters) : \app\modules\postal\sender\Type\GetGuidResponse
    {
        $response = ($this->caller)('getGuid', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetGuidResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetKierunki $parameters
     * @return ResultInterface & Type\GetKierunkiResponse
     * @throws SoapException
     */
    public function getKierunki(\app\modules\postal\sender\Type\GetKierunki $parameters) : \app\modules\postal\sender\Type\GetKierunkiResponse
    {
        $response = ($this->caller)('getKierunki', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetKierunkiResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetKierunkiInfo $parameters
     * @return ResultInterface & Type\GetKierunkiInfoResponse
     * @throws SoapException
     */
    public function getKierunkiInfo(\app\modules\postal\sender\Type\GetKierunkiInfo $parameters) : \app\modules\postal\sender\Type\GetKierunkiInfoResponse
    {
        $response = ($this->caller)('getKierunkiInfo', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetKierunkiInfoResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetEnvelopeBufor $parameters
     * @return ResultInterface & Type\GetEnvelopeBuforResponse
     * @throws SoapException
     */
    public function getEnvelopeBufor(\app\modules\postal\sender\Type\GetEnvelopeBufor $parameters) : \app\modules\postal\sender\Type\GetEnvelopeBuforResponse
    {
        $response = ($this->caller)('getEnvelopeBufor', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetEnvelopeBuforResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ClearEnvelopeByGuids $parameters
     * @return ResultInterface & Type\ClearEnvelopeByGuidsResponse
     * @throws SoapException
     */
    public function clearEnvelopeByGuids(\app\modules\postal\sender\Type\ClearEnvelopeByGuids $parameters) : \app\modules\postal\sender\Type\ClearEnvelopeByGuidsResponse
    {
        $response = ($this->caller)('clearEnvelopeByGuids', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\ClearEnvelopeByGuidsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetEnvelopeBuforDataNadania $parameters
     * @return ResultInterface & Type\SetEnvelopeBuforDataNadaniaResponse
     * @throws SoapException
     */
    public function setEnvelopeBuforDataNadania(\app\modules\postal\sender\Type\SetEnvelopeBuforDataNadania $parameters) : \app\modules\postal\sender\Type\SetEnvelopeBuforDataNadaniaResponse
    {
        $response = ($this->caller)('setEnvelopeBuforDataNadania', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\SetEnvelopeBuforDataNadaniaResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetEPOStatus $parameters
     * @return ResultInterface & Type\GetEPOStatusResponse
     * @throws SoapException
     */
    public function getEPOStatus(\app\modules\postal\sender\Type\GetEPOStatus $parameters) : \app\modules\postal\sender\Type\GetEPOStatusResponse
    {
        $response = ($this->caller)('getEPOStatus', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetEPOStatusResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetAddresLabelCompact $parameters
     * @return ResultInterface & Type\GetAddresLabelCompactResponse
     * @throws SoapException
     */
    public function getAddresLabelCompact(\app\modules\postal\sender\Type\GetAddresLabelCompact $parameters) : \app\modules\postal\sender\Type\GetAddresLabelCompactResponse
    {
        $response = ($this->caller)('getAddresLabelCompact', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetAddresLabelCompactResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetAddresLabelByGuidCompact $parameters
     * @return ResultInterface & Type\GetAddresLabelByGuidCompactResponse
     * @throws SoapException
     */
    public function getAddresLabelByGuidCompact(\app\modules\postal\sender\Type\GetAddresLabelByGuidCompact $parameters) : \app\modules\postal\sender\Type\GetAddresLabelByGuidCompactResponse
    {
        $response = ($this->caller)('getAddresLabelByGuidCompact', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetAddresLabelByGuidCompactResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetEnvelopeBuforList $parameters
     * @return ResultInterface & Type\GetEnvelopeBuforListResponse
     * @throws SoapException
     */
    public function getEnvelopeBuforList(\app\modules\postal\sender\Type\GetEnvelopeBuforList $parameters) : \app\modules\postal\sender\Type\GetEnvelopeBuforListResponse
    {
        $response = ($this->caller)('getEnvelopeBuforList', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetEnvelopeBuforListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CreateEnvelopeBufor $parameters
     * @return ResultInterface & Type\CreateEnvelopeBuforResponse
     * @throws SoapException
     */
    public function createEnvelopeBufor(\app\modules\postal\sender\Type\CreateEnvelopeBufor $parameters) : \app\modules\postal\sender\Type\CreateEnvelopeBuforResponse
    {
        $response = ($this->caller)('createEnvelopeBufor', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\CreateEnvelopeBuforResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateEnvelopeBufor $parameters
     * @return ResultInterface & Type\UpdateEnvelopeBuforResponse
     * @throws SoapException
     */
    public function updateEnvelopeBufor(\app\modules\postal\sender\Type\UpdateEnvelopeBufor $parameters) : \app\modules\postal\sender\Type\UpdateEnvelopeBuforResponse
    {
        $response = ($this->caller)('updateEnvelopeBufor', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\UpdateEnvelopeBuforResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\MoveShipments $parameters
     * @return ResultInterface & Type\MoveShipmentsResponse
     * @throws SoapException
     */
    public function moveShipments(\app\modules\postal\sender\Type\MoveShipments $parameters) : \app\modules\postal\sender\Type\MoveShipmentsResponse
    {
        $response = ($this->caller)('moveShipments', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\MoveShipmentsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUbezpieczeniaInfo $parameters
     * @return ResultInterface & Type\GetUbezpieczeniaInfoResponse
     * @throws SoapException
     */
    public function getUbezpieczeniaInfo(\app\modules\postal\sender\Type\GetUbezpieczeniaInfo $parameters) : \app\modules\postal\sender\Type\GetUbezpieczeniaInfoResponse
    {
        $response = ($this->caller)('getUbezpieczeniaInfo', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetUbezpieczeniaInfoResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\IsMiejscowa $parameters
     * @return ResultInterface & Type\IsMiejscowaResponse
     * @throws SoapException
     */
    public function isMiejscowa(\app\modules\postal\sender\Type\IsMiejscowa $parameters) : \app\modules\postal\sender\Type\IsMiejscowaResponse
    {
        $response = ($this->caller)('isMiejscowa', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\IsMiejscowaResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetBlankietPobraniaByGuids $parameters
     * @return ResultInterface & Type\GetBlankietPobraniaByGuidsResponse
     * @throws SoapException
     */
    public function getBlankietPobraniaByGuids(\app\modules\postal\sender\Type\GetBlankietPobraniaByGuids $parameters) : \app\modules\postal\sender\Type\GetBlankietPobraniaByGuidsResponse
    {
        $response = ($this->caller)('getBlankietPobraniaByGuids', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetBlankietPobraniaByGuidsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateAccount $parameters
     * @return ResultInterface & Type\UpdateAccountResponse
     * @throws SoapException
     */
    public function updateAccount(\app\modules\postal\sender\Type\UpdateAccount $parameters) : \app\modules\postal\sender\Type\UpdateAccountResponse
    {
        $response = ($this->caller)('updateAccount', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\UpdateAccountResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetAccountList $parameters
     * @return ResultInterface & Type\GetAccountListResponse
     * @throws SoapException
     */
    public function getAccountList(\app\modules\postal\sender\Type\GetAccountList $parameters) : \app\modules\postal\sender\Type\GetAccountListResponse
    {
        $response = ($this->caller)('getAccountList', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetAccountListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetProfilList $parameters
     * @return ResultInterface & Type\GetProfilListResponse
     * @throws SoapException
     */
    public function getProfilList(\app\modules\postal\sender\Type\GetProfilList $parameters) : \app\modules\postal\sender\Type\GetProfilListResponse
    {
        $response = ($this->caller)('getProfilList', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetProfilListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateProfil $parameters
     * @return ResultInterface & Type\UpdateProfilResponse
     * @throws SoapException
     */
    public function updateProfil(\app\modules\postal\sender\Type\UpdateProfil $parameters) : \app\modules\postal\sender\Type\UpdateProfilResponse
    {
        $response = ($this->caller)('updateProfil', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\UpdateProfilResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CreateAccount $parameters
     * @return ResultInterface & Type\CreateAccountResponse
     * @throws SoapException
     */
    public function createAccount(\app\modules\postal\sender\Type\CreateAccount $parameters) : \app\modules\postal\sender\Type\CreateAccountResponse
    {
        $response = ($this->caller)('createAccount', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\CreateAccountResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CreateProfil $parameters
     * @return ResultInterface & Type\CreateProfilResponse
     * @throws SoapException
     */
    public function createProfil(\app\modules\postal\sender\Type\CreateProfil $parameters) : \app\modules\postal\sender\Type\CreateProfilResponse
    {
        $response = ($this->caller)('createProfil', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\CreateProfilResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AddReklamacje $parameters
     * @return ResultInterface & Type\AddReklamacjeResponse
     * @throws SoapException
     */
    public function addReklamacje(\app\modules\postal\sender\Type\AddReklamacje $parameters) : \app\modules\postal\sender\Type\AddReklamacjeResponse
    {
        $response = ($this->caller)('addReklamacje', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\AddReklamacjeResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetReklamacje $parameters
     * @return ResultInterface & Type\GetReklamacjeResponse
     * @throws SoapException
     */
    public function getReklamacje(\app\modules\postal\sender\Type\GetReklamacje $parameters) : \app\modules\postal\sender\Type\GetReklamacjeResponse
    {
        $response = ($this->caller)('getReklamacje', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetReklamacjeResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AddOdwolanieDoReklamacji $parameters
     * @return ResultInterface & Type\AddOdwolanieDoReklamacjiResponse
     * @throws SoapException
     */
    public function addOdwolanieDoReklamacji(\app\modules\postal\sender\Type\AddOdwolanieDoReklamacji $parameters) : \app\modules\postal\sender\Type\AddOdwolanieDoReklamacjiResponse
    {
        $response = ($this->caller)('addOdwolanieDoReklamacji', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\AddOdwolanieDoReklamacjiResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CancelReklamacja $parameters
     * @return ResultInterface & Type\CancelReklamacjaResponse
     * @throws SoapException
     */
    public function cancelReklamacja(\app\modules\postal\sender\Type\CancelReklamacja $parameters) : \app\modules\postal\sender\Type\CancelReklamacjaResponse
    {
        $response = ($this->caller)('cancelReklamacja', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\CancelReklamacjaResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetZapowiedziFaktur $parameters
     * @return ResultInterface & Type\GetZapowiedziFakturResponse
     * @throws SoapException
     */
    public function getZapowiedziFaktur(\app\modules\postal\sender\Type\GetZapowiedziFaktur $parameters) : \app\modules\postal\sender\Type\GetZapowiedziFakturResponse
    {
        $response = ($this->caller)('getZapowiedziFaktur', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetZapowiedziFakturResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AddRozbieznoscDoZapowiedziFaktur $parameters
     * @return ResultInterface & Type\AddRozbieznoscDoZapowiedziFakturResponse
     * @throws SoapException
     */
    public function addRozbieznoscDoZapowiedziFaktur(\app\modules\postal\sender\Type\AddRozbieznoscDoZapowiedziFaktur $parameters) : \app\modules\postal\sender\Type\AddRozbieznoscDoZapowiedziFakturResponse
    {
        $response = ($this->caller)('addRozbieznoscDoZapowiedziFaktur', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\AddRozbieznoscDoZapowiedziFakturResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetListaPowodowReklamacji $parameters
     * @return ResultInterface & Type\GetListaPowodowReklamacjiResponse
     * @throws SoapException
     */
    public function getListaPowodowReklamacji(\app\modules\postal\sender\Type\GetListaPowodowReklamacji $parameters) : \app\modules\postal\sender\Type\GetListaPowodowReklamacjiResponse
    {
        $response = ($this->caller)('getListaPowodowReklamacji', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetListaPowodowReklamacjiResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ZamowKuriera $parameters
     * @return ResultInterface & Type\ZamowKurieraResponse
     * @throws SoapException
     */
    public function zamowKuriera(\app\modules\postal\sender\Type\ZamowKuriera $parameters) : \app\modules\postal\sender\Type\ZamowKurieraResponse
    {
        $response = ($this->caller)('zamowKuriera', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\ZamowKurieraResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetEZDO $parameters
     * @return ResultInterface & Type\GetEZDOResponse
     * @throws SoapException
     */
    public function getEZDO(\app\modules\postal\sender\Type\GetEZDO $parameters) : \app\modules\postal\sender\Type\GetEZDOResponse
    {
        $response = ($this->caller)('getEZDO', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetEZDOResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetEZDOList $parameters
     * @return ResultInterface & Type\GetEZDOListResponse
     * @throws SoapException
     */
    public function getEZDOList(\app\modules\postal\sender\Type\GetEZDOList $parameters) : \app\modules\postal\sender\Type\GetEZDOListResponse
    {
        $response = ($this->caller)('getEZDOList', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetEZDOListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetWplatyCKP $parameters
     * @return ResultInterface & Type\GetWplatyCKPResponse
     * @throws SoapException
     */
    public function getWplatyCKP(\app\modules\postal\sender\Type\GetWplatyCKP $parameters) : \app\modules\postal\sender\Type\GetWplatyCKPResponse
    {
        $response = ($this->caller)('getWplatyCKP', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetWplatyCKPResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AddZalacznikDoReklamacji $parameters
     * @return ResultInterface & Type\AddZalacznikDoReklamacjiResponse
     * @throws SoapException
     */
    public function addZalacznikDoReklamacji(\app\modules\postal\sender\Type\AddZalacznikDoReklamacji $parameters) : \app\modules\postal\sender\Type\AddZalacznikDoReklamacjiResponse
    {
        $response = ($this->caller)('addZalacznikDoReklamacji', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\AddZalacznikDoReklamacjiResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateShopEZwroty $parameters
     * @return ResultInterface & Type\UpdateShopEZwrotyResponse
     * @throws SoapException
     */
    public function updateShopEZwroty(\app\modules\postal\sender\Type\UpdateShopEZwroty $parameters) : \app\modules\postal\sender\Type\UpdateShopEZwrotyResponse
    {
        $response = ($this->caller)('updateShopEZwroty', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\UpdateShopEZwrotyResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetListaZgodEZwrotow $parameters
     * @return ResultInterface & Type\GetListaZgodEZwrotowResponse
     * @throws SoapException
     */
    public function getListaZgodEZwrotow(\app\modules\postal\sender\Type\GetListaZgodEZwrotow $parameters) : \app\modules\postal\sender\Type\GetListaZgodEZwrotowResponse
    {
        $response = ($this->caller)('getListaZgodEZwrotow', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetListaZgodEZwrotowResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetStatusZgodyNaEZwrot $parameters
     * @return ResultInterface & Type\SetStatusZgodyNaEZwrotResponse
     * @throws SoapException
     */
    public function setStatusZgodyNaEZwrot(\app\modules\postal\sender\Type\SetStatusZgodyNaEZwrot $parameters) : \app\modules\postal\sender\Type\SetStatusZgodyNaEZwrotResponse
    {
        $response = ($this->caller)('setStatusZgodyNaEZwrot', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\SetStatusZgodyNaEZwrotResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\WyslijLinkaOStatusieEZwrotu $parameters
     * @return ResultInterface & Type\WyslijLinkaOStatusieEZwrotuResponse
     * @throws SoapException
     */
    public function wyslijLinkaOStatusieEZwrotu(\app\modules\postal\sender\Type\WyslijLinkaOStatusieEZwrotu $parameters) : \app\modules\postal\sender\Type\WyslijLinkaOStatusieEZwrotuResponse
    {
        $response = ($this->caller)('wyslijLinkaOStatusieEZwrotu', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\WyslijLinkaOStatusieEZwrotuResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\IsObszarMiasto $parameters
     * @return ResultInterface & Type\IsObszarMiastoResponse
     * @throws SoapException
     */
    public function isObszarMiasto(\app\modules\postal\sender\Type\IsObszarMiasto $parameters) : \app\modules\postal\sender\Type\IsObszarMiastoResponse
    {
        $response = ($this->caller)('isObszarMiasto', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\IsObszarMiastoResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetJednostkaOrganizacyjna $parameters
     * @return ResultInterface & Type\SetJednostkaOrganizacyjnaResponse
     * @throws SoapException
     */
    public function setJednostkaOrganizacyjna(\app\modules\postal\sender\Type\SetJednostkaOrganizacyjna $parameters) : \app\modules\postal\sender\Type\SetJednostkaOrganizacyjnaResponse
    {
        $response = ($this->caller)('setJednostkaOrganizacyjna', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\SetJednostkaOrganizacyjnaResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetJednostkaOrganizacyjna $parameters
     * @return ResultInterface & Type\GetJednostkaOrganizacyjnaResponse
     * @throws SoapException
     */
    public function getJednostkaOrganizacyjna(\app\modules\postal\sender\Type\GetJednostkaOrganizacyjna $parameters) : \app\modules\postal\sender\Type\GetJednostkaOrganizacyjnaResponse
    {
        $response = ($this->caller)('getJednostkaOrganizacyjna', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetJednostkaOrganizacyjnaResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetPrintForParcel $parameters
     * @return ResultInterface & Type\GetPrintForParcelResponse
     * @throws SoapException
     */
    public function getPrintForParcel(\app\modules\postal\sender\Type\GetPrintForParcel $parameters) : \app\modules\postal\sender\Type\GetPrintForParcelResponse
    {
        $response = ($this->caller)('getPrintForParcel', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetPrintForParcelResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CreateShopEZwroty $parameters
     * @return ResultInterface & Type\CreateShopEZwrotyResponse
     * @throws SoapException
     */
    public function createShopEZwroty(\app\modules\postal\sender\Type\CreateShopEZwroty $parameters) : \app\modules\postal\sender\Type\CreateShopEZwrotyResponse
    {
        $response = ($this->caller)('createShopEZwroty', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\CreateShopEZwrotyResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\DeleteShopEZwroty $parameters
     * @return ResultInterface & Type\DeleteShopEZwrotyResponse
     * @throws SoapException
     */
    public function deleteShopEZwroty(\app\modules\postal\sender\Type\DeleteShopEZwroty $parameters) : \app\modules\postal\sender\Type\DeleteShopEZwrotyResponse
    {
        $response = ($this->caller)('deleteShopEZwroty', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\DeleteShopEZwrotyResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetShopEZwrotyList $parameters
     * @return ResultInterface & Type\GetShopEZwrotyListResponse
     * @throws SoapException
     */
    public function getShopEZwrotyList(\app\modules\postal\sender\Type\GetShopEZwrotyList $parameters) : \app\modules\postal\sender\Type\GetShopEZwrotyListResponse
    {
        $response = ($this->caller)('getShopEZwrotyList', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetShopEZwrotyListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLibrariesForLegalDeposits $parameters
     * @return ResultInterface & Type\GetLibrariesForLegalDepositsResponse
     * @throws SoapException
     */
    public function getLibrariesForLegalDeposits(\app\modules\postal\sender\Type\GetLibrariesForLegalDeposits $parameters) : \app\modules\postal\sender\Type\GetLibrariesForLegalDepositsResponse
    {
        $response = ($this->caller)('getLibrariesForLegalDeposits', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetLibrariesForLegalDepositsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\OrderEasyReturnSolutionLabel $parameters
     * @return ResultInterface & Type\OrderEasyReturnSolutionLabelResponse
     * @throws SoapException
     */
    public function orderEasyReturnSolutionLabel(\app\modules\postal\sender\Type\OrderEasyReturnSolutionLabel $parameters) : \app\modules\postal\sender\Type\OrderEasyReturnSolutionLabelResponse
    {
        $response = ($this->caller)('orderEasyReturnSolutionLabel', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\OrderEasyReturnSolutionLabelResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetPlacowkaPocztowa $parameters
     * @return ResultInterface & Type\GetPlacowkaPocztowaResponse
     * @throws SoapException
     */
    public function getPlacowkaPocztowa(\app\modules\postal\sender\Type\GetPlacowkaPocztowa $parameters) : \app\modules\postal\sender\Type\GetPlacowkaPocztowaResponse
    {
        $response = ($this->caller)('getPlacowkaPocztowa', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetPlacowkaPocztowaResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetParcelContentList $parameters
     * @return ResultInterface & Type\GetParcelContentListResponse
     * @throws SoapException
     */
    public function getParcelContentList(\app\modules\postal\sender\Type\GetParcelContentList $parameters) : \app\modules\postal\sender\Type\GetParcelContentListResponse
    {
        $response = ($this->caller)('getParcelContentList', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetParcelContentListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CreateParcelContent $parameters
     * @return ResultInterface & Type\CreateParcelContentResponse
     * @throws SoapException
     */
    public function createParcelContent(\app\modules\postal\sender\Type\CreateParcelContent $parameters) : \app\modules\postal\sender\Type\CreateParcelContentResponse
    {
        $response = ($this->caller)('createParcelContent', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\CreateParcelContentResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateParcelContent $parameters
     * @return ResultInterface & Type\UpdateParcelContentResponse
     * @throws SoapException
     */
    public function updateParcelContent(\app\modules\postal\sender\Type\UpdateParcelContent $parameters) : \app\modules\postal\sender\Type\UpdateParcelContentResponse
    {
        $response = ($this->caller)('updateParcelContent', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\UpdateParcelContentResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\DeleteParcelContent $parameters
     * @return ResultInterface & Type\DeleteParcelContentResponse
     * @throws SoapException
     */
    public function deleteParcelContent(\app\modules\postal\sender\Type\DeleteParcelContent $parameters) : \app\modules\postal\sender\Type\DeleteParcelContentResponse
    {
        $response = ($this->caller)('deleteParcelContent', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\DeleteParcelContentResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CreateReturnDocumentsProfile $parameters
     * @return ResultInterface & Type\CreateReturnDocumentsProfileResponse
     * @throws SoapException
     */
    public function createReturnDocumentsProfile(\app\modules\postal\sender\Type\CreateReturnDocumentsProfile $parameters) : \app\modules\postal\sender\Type\CreateReturnDocumentsProfileResponse
    {
        $response = ($this->caller)('createReturnDocumentsProfile', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\CreateReturnDocumentsProfileResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateReturnDocumentsProfile $parameters
     * @return ResultInterface & Type\UpdateReturnDocumentsProfileResponse
     * @throws SoapException
     */
    public function updateReturnDocumentsProfile(\app\modules\postal\sender\Type\UpdateReturnDocumentsProfile $parameters) : \app\modules\postal\sender\Type\UpdateReturnDocumentsProfileResponse
    {
        $response = ($this->caller)('updateReturnDocumentsProfile', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\UpdateReturnDocumentsProfileResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\DeleteReturnDocumentsProfile $parameters
     * @return ResultInterface & Type\DeleteReturnDocumentsProfileResponse
     * @throws SoapException
     */
    public function deleteReturnDocumentsProfile(\app\modules\postal\sender\Type\DeleteReturnDocumentsProfile $parameters) : \app\modules\postal\sender\Type\DeleteReturnDocumentsProfileResponse
    {
        $response = ($this->caller)('deleteReturnDocumentsProfile', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\DeleteReturnDocumentsProfileResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetReturnDocumentsProfileList $parameters
     * @return ResultInterface & Type\GetReturnDocumentsProfileListResponse
     * @throws SoapException
     */
    public function getReturnDocumentsProfileList(\app\modules\postal\sender\Type\GetReturnDocumentsProfileList $parameters) : \app\modules\postal\sender\Type\GetReturnDocumentsProfileListResponse
    {
        $response = ($this->caller)('getReturnDocumentsProfileList', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetReturnDocumentsProfileListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CreateChecklistTemplate $parameters
     * @return ResultInterface & Type\CreateChecklistTemplateResponse
     * @throws SoapException
     */
    public function createChecklistTemplate(\app\modules\postal\sender\Type\CreateChecklistTemplate $parameters) : \app\modules\postal\sender\Type\CreateChecklistTemplateResponse
    {
        $response = ($this->caller)('createChecklistTemplate', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\CreateChecklistTemplateResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateChecklistTemplate $parameters
     * @return ResultInterface & Type\UpdateChecklistTemplateResponse
     * @throws SoapException
     */
    public function updateChecklistTemplate(\app\modules\postal\sender\Type\UpdateChecklistTemplate $parameters) : \app\modules\postal\sender\Type\UpdateChecklistTemplateResponse
    {
        $response = ($this->caller)('updateChecklistTemplate', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\UpdateChecklistTemplateResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\DeleteChecklistTemplate $parameters
     * @return ResultInterface & Type\DeleteChecklistTemplateResponse
     * @throws SoapException
     */
    public function deleteChecklistTemplate(\app\modules\postal\sender\Type\DeleteChecklistTemplate $parameters) : \app\modules\postal\sender\Type\DeleteChecklistTemplateResponse
    {
        $response = ($this->caller)('deleteChecklistTemplate', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\DeleteChecklistTemplateResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetChecklistTemplateList $parameters
     * @return ResultInterface & Type\GetChecklistTemplateListResponse
     * @throws SoapException
     */
    public function getChecklistTemplateList(\app\modules\postal\sender\Type\GetChecklistTemplateList $parameters) : \app\modules\postal\sender\Type\GetChecklistTemplateListResponse
    {
        $response = ($this->caller)('getChecklistTemplateList', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetChecklistTemplateListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetAdditionalActivitiesList $parameters
     * @return ResultInterface & Type\GetAdditionalActivitiesListResponse
     * @throws SoapException
     */
    public function getAdditionalActivitiesList(\app\modules\postal\sender\Type\GetAdditionalActivitiesList $parameters) : \app\modules\postal\sender\Type\GetAdditionalActivitiesListResponse
    {
        $response = ($this->caller)('getAdditionalActivitiesList', $parameters);

        \Psl\Type\instance_of(\app\modules\postal\sender\Type\GetAdditionalActivitiesListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

