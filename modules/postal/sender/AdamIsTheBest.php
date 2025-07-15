<?php

namespace app\modules\postal\sender;

use app\modules\postal\sender\Type\Hello;
use app\modules\postal\sender\Type\HelloResponse;
use yii\base\InvalidConfigException;

class AdamIsTheBest extends \SoapClient
{
    public const CLIENT_TYPE_PROD = 'prod';
    public const CLIENT_TYPE_TEST = 'test';

    public string $username = 'majsterw@o2.pl';
    public string $password = 'PPIsThe1';

    protected static $classMap = [
        'Hello' => Hello::class,
        'HelloResponse' => HelloResponse::class,
    ];

    public function __construct(?string $wsdl, array $options = null)
    {
        $options = [
            'trace' => true,
            'soap_version' => SOAP_1_2,
            'cache_wsdl' => WSDL_CACHE_NONE,
            'location' => 'https://en-testwebapi.poczta-polska.pl/websrv/labs.php',
            'login' => $this->username,
            'password' => $this->password,
        ];
        $options['classmap'] = static::$classMap;
        $options['trace'] = 1;
        parent::__construct($wsdl, $options);
    }


    public function hello()
    {
        $response = $this->__soapCall('hello', [
            'parameters' => [
                'in' => 'adam',
            ],
        ]);
        $this->__getLastRequestHeaders();
    }

    public static function getWsdlUrl(string $type = self::CLIENT_TYPE_TEST): string
    {
        switch ($type) {
            case self::CLIENT_TYPE_TEST:
                return 'https://en-testwebapi.poczta-polska.pl/websrv/?wsdl';
            case self::CLIENT_TYPE_PROD:
                return 'https://e-nadawca.poczta-polska.pl/websrv/?wsdl';
            default:
                throw new InvalidConfigException('Invalid Client type. Individual or Business.');
        }
    }
}
