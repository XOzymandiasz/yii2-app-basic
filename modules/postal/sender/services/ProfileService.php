<?php

namespace app\modules\postal\sender\services;

use app\modules\postal\sender\StructType\CreateProfil;
use app\modules\postal\sender\StructType\CreateProfilResponse;
use app\modules\postal\sender\StructType\GetProfilList;
use app\modules\postal\sender\StructType\GetProfilListResponse;
use app\modules\postal\sender\StructType\ProfilType;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class ProfileService extends BaseService
{

    /**
     * Method to call the operation originally named createProfil
     * @param ProfilType $model
     * @return CreateProfilResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function create(ProfilType $model): ?CreateProfilResponse
    {
        try {
            $this->setResult($resultCreateProfil = $this->getSoapClient()->__soapCall('createProfil', [
                new CreateProfil($model),
            ], [], [], $this->outputHeaders));

            return $resultCreateProfil;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;
    }


    public function getList(): ?GetProfilListResponse
    {
        try {
            $this->setResult($resultGetProfilList = $this->getSoapClient()->__soapCall('getProfilList', [
                new GetProfilList(),
            ], [], [], $this->outputHeaders));

            return $resultGetProfilList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

        }
        return null;
    }
}
