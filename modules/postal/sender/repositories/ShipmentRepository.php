<?php

namespace app\modules\postal\sender\repositories;

use app\modules\postal\sender\EnumType\PrintFormatEnum;
use app\modules\postal\sender\EnumType\PrintKindEnum;
use app\modules\postal\sender\EnumType\PrintMethodEnum;
use app\modules\postal\sender\EnumType\PrintResolutionEnum;
use app\modules\postal\sender\services\ShipmentService;
use app\modules\postal\sender\StructType\AddShipment;
use app\modules\postal\sender\StructType\AddShipmentResponseItemType;
use app\modules\postal\sender\StructType\PrintType;
use app\modules\postal\sender\StructType\PrzesylkaType;

class ShipmentRepository extends BaseRepository
{

    protected $serviceConfig = [
        'class' => ShipmentService::class,
    ];

    public function add(PrzesylkaType $shipment, ?int $idBuffor = null): AddShipmentResponseItemType|null
    {
        $response = $this->getService()->add(new AddShipment([$shipment], $idBuffor));
        if (!$response) {
            $this->warning(__METHOD__, 'response is null');
            return null;
        }
        $value = $response->getRetval();
        /**
         * @var AddShipmentResponseItemType|false $shipmentResponse
         */
        $shipmentResponse = reset($value);
        if ($shipmentResponse !== false) {
            return $shipmentResponse;
        }
        $this->warning(__METHOD__, 'empty retval', $response);
        return null;
    }

    public function getLabel(?string $guid, ?PrintType $type): string|null
    {
        $response = $this->getService()->printForParcel([$guid], $type);

        if ($response) {
            if(empty($response->getError())){
                $printResult = $response->getPrintResult();
                $labelResponse = reset($printResult);
                return $labelResponse->getPrint();
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
    ): PrintType{
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
