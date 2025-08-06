<?php

namespace app\modules\postal\sender\repositories;

use app\modules\postal\sender\PocztaPolskaSenderOptions;
use app\modules\postal\sender\services\BaseService;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;
use Yii;
use yii\base\Component;

abstract class BaseRepository extends Component
{

    protected $serviceConfig = [];

    private ?BaseService $service = null;
    private PocztaPolskaSenderOptions $senderOptions;

    public function __construct(PocztaPolskaSenderOptions $senderOptions, array $config = [])
    {
        $this->senderOptions = $senderOptions;

        parent::__construct($config);
    }


    protected function getService(): BaseService
    {
        if ($this->service === null) {
            $this->service = $this->createService();
        }
        return $this->service;
    }

    protected function createService(): BaseService
    {
        $config = $this->serviceConfig;
        return Yii::createObject($config, [$this->senderOptions->getSoapOptions()]);
    }

    protected function warning(string $category, $extraMessage = null, AbstractStructBase $response = null): void
    {
        $message = [];
        if ($extraMessage) {
            $message['message'] = $extraMessage;
        }
        if ($response) {
            try {
                $error = $response->getPropertyValue('error');
                if ($error) {
                    $message['error'] = $error;
                }
            } catch (InvalidArgumentException $exception) {
                $message['response'] = $response;
            }
        }
        $message['lastResponseError'] = $this->getService()->getLastError();

        Yii::warning($message, $category);
    }
}
