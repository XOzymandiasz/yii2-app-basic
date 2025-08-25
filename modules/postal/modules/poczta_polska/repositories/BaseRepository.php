<?php

namespace app\modules\postal\modules\poczta_polska\repositories;

use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use app\modules\postal\modules\poczta_polska\services\BaseService;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\caching\CacheInterface;
use yii\di\Instance;

abstract class BaseRepository extends Component
{
    protected const DEFAULT_DURATION = 3600;
    /**
     * @var string|array|CacheInterface
     */
    public string|array|CacheInterface $cache = 'cache';

    public int $cacheDuration = self::DEFAULT_DURATION;
    protected array $serviceConfig = [];

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

    protected function warning(string $category, $extraMessage = null, ?AbstractStructBase $response = null): void
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

    /**
     * @throws InvalidConfigException
     */
    protected function getCache(): CacheInterface
    {
        $this->cache = Instance::ensure($this->cache, CacheInterface::class);
        return $this->cache;
    }

    /**
     * @throws InvalidConfigException
     */
    protected function getCacheValue(array $key, $default = null)
    {
        $value = $this->getCache()->get($key);

        return $value === false ? $default : $value;
    }

    /**
     * @throws InvalidConfigException
     */
    protected function setCacheValue(array $key, $value, ?int $cacheDuration = null): void
    {
        if ($cacheDuration) {
            $this->cacheDuration = $cacheDuration;
        }
        $this->getCache()->set($key, $value, $this->cacheDuration);
    }

    /**
     * @throws InvalidConfigException
     */
    protected function deleteCacheValue(array $key): bool
    {
        return $this->getCache()->delete($key);
    }

    protected function buildCacheKey(string $key, array $params = []): array
    {
        return [static::class, $key, $params];
    }


}
