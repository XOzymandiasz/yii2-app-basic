<?php

namespace app\modules\postal\modules\poczta_polska\repositories;

use app\modules\postal\modules\poczta_polska\sender\EnumType\PrintFormatEnum;
use app\modules\postal\modules\poczta_polska\sender\EnumType\PrintKindEnum;
use app\modules\postal\modules\poczta_polska\sender\EnumType\PrintMethodEnum;
use app\modules\postal\modules\poczta_polska\sender\EnumType\PrintResolutionEnum;
use app\modules\postal\modules\poczta_polska\sender\StructType\AddShipment;
use app\modules\postal\modules\poczta_polska\sender\StructType\AddShipmentResponseItemType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrintType;
use app\modules\postal\modules\poczta_polska\sender\StructType\PrzesylkaType;
use app\modules\postal\modules\poczta_polska\services\ShipmentService;
use yii\base\InvalidConfigException;
use yii\caching\CacheInterface;

class ShipmentRepository extends BaseRepository
{
    private const KEY_SHIPMENT_LIST = 'shipments:list';

    public string|array|CacheInterface $cache = 'cache';

    protected array $serviceConfig = [
        'class' => ShipmentService::class,
    ];

    /**
     * @throws InvalidConfigException
     */
    public function add(PrzesylkaType $shipment, int $bufferId): ?AddShipmentResponseItemType
    {
        $response = $this->getService()->add(new AddShipment([$shipment], $bufferId));

        if (!$response) {
            $this->warning(__METHOD__, 'response is null');
            return null;
        }
        $value = $response->getRetval();
        /**
         * @var AddShipmentResponseItemType|null $shipmentResponse
         */
        $shipmentResponse = reset($value);
        if ($shipmentResponse) {
            $key = $this->buildCacheKey(self::KEY_SHIPMENT_LIST, [
                'buffer' => $bufferId
            ]);
            $this->deleteCacheValue($key);
            return $shipmentResponse;
        }
        $this->warning(__METHOD__, 'empty retval', $response);
        return null;
    }

    /**
     * @throws InvalidConfigException
     */
    public function clear(int $bufferId, string $guid): bool
    {
        $response = $this->getService()->clear($guid, $bufferId);
        if ($response) {
            if (empty($response->getError())){
                $key = $this->buildCacheKey(self::KEY_SHIPMENT_LIST, [
                    'buffer' => $bufferId
                ]);
                $this->deleteCacheValue($key);
                return true;
            }
            $this->warning(__METHOD__, null, $response);
        }
        $this->warning(__METHOD__, 'response is null');
        return false;
    }

    /*
     * @var return PrzesylkaType[]
     */
    /**
     * @throws InvalidConfigException
     */
    public function getList(int $bufferId, bool $refresh = false, ?int $duration = null): array
    {
        if (!$refresh){
            $cachedResponse = $this->getCacheValue(self::KEY_SHIPMENT_LIST, null, ['buffer'=>$idBuffer]);

            if ($cachedResponse) {
                return $cachedResponse;
            }
        }

        $response = $this->getService()->getList($bufferId);
        if ($response) {
            if (empty($response->getError())) {
                $shipmentsList = $response->getPrzesylka();
                if ($shipmentsList) {
                    $key = $this->buildCacheKey(self::KEY_SHIPMENT_LIST, [
                        'buffer' => $bufferId
                    ]);
                    $this->setCacheValue($key, $shipmentsList, $duration);
                    return $shipmentsList;
                }
                $this->warning(__METHOD__, 'empty buffer');
            }
            $this->warning(__METHOD__, null, $response);
        }

        $this->warning(__METHOD__, 'response is null', $response);
        return [];
    }

    /**
     * @throws InvalidConfigException
     */
    public function getOne(int $bufferId, string $guid): ?PrzesylkaType
    {
        foreach ($this->getList($bufferId) as $shipment) {
            if ($shipment->getGuid() === $guid) {
                return $shipment;
            }
        }
        return null;
    }

    public function getLabel(string $guid, ?PrintType $type = null): string|null
    {
        if ($type == null) {
            $type = $this->createPrintType();
        }

        $response = $this->getService()->printForParcel([$guid], $type);

        if ($response) {
            if (empty($response->getError())) {
                $printResult = $response->getPrintResult();
                $labelResponse = reset($printResult);
                if ($labelResponse !== false) {
                    return $labelResponse->getPrint();
                }
                $this->warning(__METHOD__, 'empty print', $response);
            }
            $this->warning(__METHOD__, null, $response);
        }
        $this->warning(__METHOD__, 'response is null', $response);
        return null;
    }

    public function createPrintType(
        ?string $format = PrintFormatEnum::VALUE_PDF_FORMAT,
        ?string $kind = PrintKindEnum::VALUE_ADDRESS_LABEL_BY_GUID,
        ?string $method = PrintMethodEnum::VALUE_EACH_PARCEL_SEPARATELY,
        ?string $resolution = PrintResolutionEnum::VALUE_DPI_300
    ): PrintType
    {
        return (new PrintType())
            ->setFormat($format)
            ->setKind($kind)
            ->setMethod($method)
            ->setResolution($resolution);
    }

    protected function getService(): ShipmentService
    {
        return parent::getService();
    }
}
