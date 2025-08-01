<?php

namespace app\modules\postal\sender\repositories;

use app\modules\postal\sender\PocztaPolskaSenderOptions;
use app\modules\postal\sender\ServiceType\Add;
use app\modules\postal\sender\StructType\AddShipment;
use app\modules\postal\sender\StructType\AddShipmentResponse;
use app\modules\postal\sender\StructType\PrzesylkaType;
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class AddServiceRepository extends Component
{
    private ?Add $service = null;
    private PocztaPolskaSenderOptions $senderOptions;

    /**
     * @throws InvalidConfigException
     */
    public function __construct(PocztaPolskaSenderOptions $senderOptions, array $config = [])
    {
        $this->senderOptions = $senderOptions;
        parent::__construct($config);
    }

    public function addShipment(PrzesylkaType $shipment, ?int $idBuffor): ?AddShipmentResponse
    {
        $this->getService();

        return $this->service->addShipment(new AddShipment([$shipment], $idBuffor));
    }

    protected function getService(): Add
    {
        if ($this->service === null) {
            $this->service = new Add($this->senderOptions->getSoapOptions());
        }
        return $this->service;
    }
}