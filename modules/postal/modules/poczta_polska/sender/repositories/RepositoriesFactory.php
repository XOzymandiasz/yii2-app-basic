<?php

namespace app\modules\postal\modules\poczta_polska\sender\repositories;

use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class RepositoriesFactory extends Component
{

    private const REPOSITORY_BUFFOR = 'buffor';
    private const REPOSITORY_SHIPMENT = 'shipment';
    private const REPOSITORY_PROFILE = 'profile';

    public array $classMap = [
        self::REPOSITORY_BUFFOR => [
            'class' => BufferRepository::class,
        ],
        self::REPOSITORY_SHIPMENT => [
            'class' => ShipmentRepository::class,
        ],
        self::REPOSITORY_PROFILE => [
            'class' => ProfileRepository::class,
        ]
    ];

    private PocztaPolskaSenderOptions $senderOptions;

    public function __construct(PocztaPolskaSenderOptions $options, array $config = [])
    {
        $this->senderOptions = $options;
        codecept_debug([
            'login' => $options->login
        ]);
        parent::__construct($config);
    }

    public function getShipmentRepository(): ShipmentRepository
    {
        $config = $this->classMap[self::REPOSITORY_SHIPMENT];
        return Yii::createObject($config, [$this->senderOptions]);
    }


    public function getProfileRepository(): ProfileRepository
    {
        $config = $this->classMap[self::REPOSITORY_PROFILE];
        return Yii::createObject($config, [$this->senderOptions]);
    }


    public function getBufforRepository(): BufferRepository
    {
        $config = $this->classMap[self::REPOSITORY_BUFFOR];
        return Yii::createObject($config, [$this->senderOptions]);
    }

    protected function createRepository(string $type, array $config = []): BaseRepository
    {
        $config = array_merge(
            $this->classMap[$type],
            $config);
        return Yii::createObject($config, [$this->senderOptions]);
    }
}
