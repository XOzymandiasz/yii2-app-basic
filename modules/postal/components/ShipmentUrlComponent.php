<?php

namespace app\modules\postal\components;

use app\modules\postal\models\ShipmentProviderInterface as Providers;
use yii\base\Component;
use yii\helpers\Url;

class ShipmentUrlComponent extends Component
{
    public array $providersCreateRoutes = [
        Providers::PROVIDER_POCZTA_POLSKA => 'poczta_polska/shipment/create-from-shipment',
    ];
    public array $providersUpdateRoutes = [
        Providers::PROVIDER_POCZTA_POLSKA => 'poczta_polska/shipment/update',
    ];

    public string $paramShipmentId = 'id';
    public string $paramBufferId = 'bufferId';
    public string $paramGuid = 'guid';

    public ?string $moduleId = null;

    public function getAfterCreateURL(int $shipmentId, string $provider, array $params = []): ?string
    {
        $route = $this->providersCreateRoutes[$provider] ?? null;
        if ($route === null) {
            return null;
        }

        $params[$this->paramShipmentId] = $shipmentId;

        if ($route[0] !== '/') {
            $route = '/' . $this->moduleId . '/' . ltrim($route, '/');
        }

        return Url::to([$route] + $params);
    }

    public function getAfterUpdateURL(int $bufferId, string $guid, string $provider, array $params = []): ?string
    {
        $route = $this->providersUpdateRoutes[$provider] ?? null;
        if ($route === null) {
            return null;
        }

        $params[$this->paramBufferId] = $bufferId;
        $params[$this->paramGuid] = $guid;

        if ($route[0] !== '/') {
            $route = '/' . $this->moduleId . '/' . ltrim($route, '/');
        }

        return Url::to([$route] + $params);
    }

}