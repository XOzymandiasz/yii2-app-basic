<?php

namespace app\modules\postal\models;

interface ShipmentProviderInterface
{
    public const PROVIDER_POCZTA_POLSKA = 'PP';
    public const PROVIDER_POCZTEX_2021 = 'PXT21';
    public const PROVIDER_DHL = 'DHL';
    public const PROVIDER_DPD = 'DPD';
    public const PROVIDER_GLS = 'GLS';
    public const PROVIDER_INPOST = 'INPST';

    public function getProvider(): string;

    public function getProviderName(): string;

    public static function getProvidersNames();
}