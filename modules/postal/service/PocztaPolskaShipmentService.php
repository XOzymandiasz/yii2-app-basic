<?php

namespace app\modules\postal\service;

use app\modules\postal\sender\PocztaPolskaSenderClient;
use app\modules\postal\sender\Type\AddShipment;
use app\modules\postal\sender\Type\AddShipmentResponse;
use app\modules\postal\sender\Type\AdresType;
use app\modules\postal\sender\Type\ClearEnvelope;
use app\modules\postal\sender\Type\GetAddresLabelByGuid;
use app\modules\postal\sender\Type\GetGuid;
use app\modules\postal\sender\Type\PaczkaPocztowaType;
use app\modules\postal\sender\Type\PrzesylkaType;
use app\modules\postal\sender\Type\SendEnvelope;

class PocztaPolskaShipmentService
{


    private PocztaPolskaSenderClient $client;
    private ?int $idBuffor = null;

    public function __construct(PocztaPolskaSenderClient $client, ?int $idBuffor = null)
    {
        $this->client = $client;
        $this->idBuffor = $idBuffor;
    }

    /**
     * @param PrzesylkaType[] $shipmentData
     * @return void
     */
    public function addShipment(array $shipmentData): void
    {
        $this->clearEnvelope();

        $shipments = $this->prepareShipments($shipmentData);

        $request = new AddShipment($shipments, $this->idBuffor);


        $response = $this->client->addShipment($request);

        //$this->stickerDownload($response);

        $envelope = new SendEnvelope(null, $shipments, $this->idBuffor, null);
        $this->client->sendEnvelope($envelope);

    }

    public function prepareShipments(array $shipmentData): array
    {
        /**
         * @param PrzesylkaType[] $shipments
         */
        $shipments = [];

        $guid = new GetGuid(count($shipmentData));
        $guids = $this->client->getGuid($guid)->getGuid();
        foreach ($shipmentData as $index => $singleData) {
            $address = (new AdresType())
                ->withNazwa($singleData['nazwa'])
                ->withNazwa2($singleData['nazwa2'])
                ->withNumerDomu($singleData['numerDomu'])
                ->withMiejscowosc($singleData['miejscowosc']);

            $shipment = (new PaczkaPocztowaType())
                ->withAdres($address)
                ->withMasa($singleData['masa'])
                ->withKategoria($singleData['kategoria'])
                ->withGabaryt($singleData['gabaryt'])
                ->withIloscPotwierdzenOdbioru($singleData['iloscPotwierdzenOdbioru'])
                ->withGuid($guids[$index]);
            $shipments[] = $shipment;
        }

        return $shipments;
    }

    public function stickerDownload(AddShipmentResponse $response): void
    {
        foreach ($response->getRetval() as $item) {
            if (!$item->getError()) {
                $guid = $item->getGuid();
                $label_request = new GetAddresLabelByGuid([$guid], $this->idBuffor);
                $label = $this->client->getAddresLabelByGuid($label_request);
                file_put_contents(
                    'nalepka_' . $item->getGuid() . '.pdf',
                    $label
                );
            }
        }
    }

    public function clearEnvelope(): void
    {
        $envelope = new ClearEnvelope($this->idBuffor);
        $this->client->clearEnvelope($envelope);
    }


}
