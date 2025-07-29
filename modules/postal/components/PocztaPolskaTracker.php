<?php

namespace app\modules\postal\components;

use app\modules\postal\entities\Mail;
use app\modules\postal\models\Shipment;
use Yii;
use yii\base\Component;

class PocztaPolskaTracker extends Component implements ShipmentTrackerInterface
{

    public bool $addPostInfo = true;
    public ?string $language = null;

    private PocztaPolskaTrackerClient $client;


    public function __construct(PocztaPolskaTrackerClient $client, array $config = [])
    {
        $this->client = $client;
        parent::__construct($config);
    }

    public function init(): void
    {
        parent::init();
        if ($this->language === null) {
            $this->language = Yii::$app->language;
        }
    }

    public function checkShipment(string $number): ?ShipmentInterface
    {
        return $this->checkMail($number);
    }

    public function checkMail(string $number): ?Mail
    {
        $data = $this->getMailData($number, $this->language=null);

        if (!empty($data)) {
            $mail = $this->createMail($data);
            if ($mail->isFound()) {
                return $mail;
            }
            if ($mail->isFoundMany()) {
                Yii::warning('Find many mails for number: ' . $number, __METHOD__);
                return $mail;
            }
        }
        return null;
    }


    public function updateModel(Shipment $model): void
    {
        $data = $this->getMailData($model->shipment);
        if (!empty($data)) {
            $mail = $this->createMail($data);
            $model->updateAttributes([
                'shipment_at' => $mail->getShipmentAt(),
                'finished_at' => $mail->getFinishedAt(),
                'api_data' => $data,
            ]);
        }
    }


    protected function getMailData(string $number, string $language = null): ?array
    {
        return $this->client->checkMailex($number, $this->addPostInfo, $language);

    }

    protected function createMail(array $data): Mail
    {
        return new Mail($data);
    }


}
