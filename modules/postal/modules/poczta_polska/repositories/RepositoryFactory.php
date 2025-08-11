<?php

namespace app\modules\postal\modules\poczta_polska\repositories;

use app\modules\postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use InvalidArgumentException;
use Yii;
use yii\base\Component;

class RepositoryFactory extends Component
{

    public const REPOSITORY_BUFFER = 'buffer';
    public const REPOSITORY_SHIPMENT = 'shipment';
    public const REPOSITORY_PROFILE = 'profile';

    public array $repositoryConfig = [
        'cache' => 'cache',
    ];

    public array $classMap = [
        self::REPOSITORY_BUFFER => [
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
        parent::__construct($config);
    }

    public function createRepository(string $type, array $config = []): BaseRepository
    {

        if (!isset($this->classMap[$type]['class'])) {
            throw new InvalidArgumentException("Unknown repository type: {$type}");
        }

        $config = array_merge(
            $this->classMap[$type],
            $config,
            $this->repositoryConfig);


        return Yii::createObject($config, [$this->senderOptions]);
    }
}
