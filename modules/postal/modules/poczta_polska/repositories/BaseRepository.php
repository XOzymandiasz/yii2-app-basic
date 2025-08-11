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

abstract class BaseRepository extends Component
{
    protected const DEFAULT_TTL = 3600;
    /**
     * @var string|array|CacheInterface
     */
    public string|array|CacheInterface $cache = 'cache';

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

    /**
     * @throws InvalidConfigException
     */
    protected function cache(): CacheInterface
    {
        if(is_string($this->cache)){
            /**
             * @var CacheInterface $cache
             */
            $cache = Yii::$app->get($this->cache);
            return $this->cache = $cache;
        }

        if(is_array($this->cache)){
            /**
             * @var CacheInterface $cache
             */
            $cache = Yii::createObject($this->cache);
            return $this->cache = $cache;
        }

        return $this->cache;
    }

    /**
     * @throws InvalidConfigException
     */
    protected function getCacheValue(string $key, $default = null, array $params = [])
    {
        $cacheKey = $this->buildCacheKey($key, $params);
        $value = $this->cache()->get($cacheKey);

        return $value === false ? $default : $value;
    }

    /**
     * @throws InvalidConfigException
     */
    protected function setCacheValue(string $key, $value, ?int $ttl = null, array $params = []): void {
        $cacheKey = $this->buildCacheKey($key, $params);

        $this->cache()->set($cacheKey, $value, $ttl ?? self::DEFAULT_TTL);
    }

    /**
     * @throws InvalidConfigException
     */
    protected function deleteCacheValue(string $key, array $params = []): bool
    {
        return $this->cache()->delete($this->buildCacheKey($key, $params));
    }

    protected function buildCacheKey(string $key, array $params = []): array
    {
        return [static::class, $key, $params];
    }


}
