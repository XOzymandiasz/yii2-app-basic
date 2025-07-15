<?php

namespace app\modules\postal\sender;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Uri;
use Http\Adapter\Guzzle7\Client as GuzzleAdapter;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Message\Authentication\BasicAuth;
use Soap\Psr18Transport\Psr18Transport;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;
use Soap\Encoding\EncoderRegistry;
use Http\Client\Common\PluginClient;
use yii\base\InvalidArgumentException;
class PocztaPolskaSenderClientFactory
{

    public const TYPE_PRODUCTION = 'production';
    public const TYPE_TEST = 'test';

    //test WSDL has Location for PROD, and them cannot be auth with Test Credentials
    private const TEST_URI_LOCATION = 'https://en-testwebapi.poczta-polska.pl/websrv/labs.php';

    public static function getWsdl(): array
    {
        return [
            static::TYPE_PRODUCTION => 'https://e-nadawca.poczta-polska.pl/websrv/?wsdl',
            static::TYPE_TEST => 'https://en-testwebapi.poczta-polska.pl/websrv/?wsdl',
        ];
    }

    /**
     * This factory can be used as a starting point to create your own specialized
     * factory. Feel free to modify.
     *
     * @param string $type
     * @param string $username
     * @param string $password
     * @return PocztaPolskaSenderClient
     */
    public static function factory(string $type, string $username, string $password): PocztaPolskaSenderClient
    {

        if (!isset(static::getWsdl()[$type])) {
            throw new InvalidArgumentException("WSDL for $type not found.");
        }
        $wsdl = static::getWsdl()[$type];

        $guzzle = new Client();
        $adapter = new GuzzleAdapter($guzzle);

        $plugins = [
            new AuthenticationPlugin(new BasicAuth($username, $password)),
        ];
        if ($type === self::TYPE_TEST) {
            $plugins[] = new BaseUriPlugin(new Uri(static::TEST_URI_LOCATION), [
                'replace' => true,
            ]);
        }
        $pluginClient = new PluginClient($adapter, $plugins);

        $transport = Psr18Transport::createForClient($pluginClient);

        $engine = DefaultEngineFactory::create(
            EngineOptions::defaults($wsdl)
                ->withEncoderRegistry(
                    EncoderRegistry::default()
                        ->addClassMapCollection(PocztaPolskaSenderClassmap::types())
                        ->addBackedEnumClassMapCollection(PocztaPolskaSenderClassmap::enums())
                )
                ->withTransport($transport)
            ,
            ''
        // If you want to enable WSDL caching:
        // ->withCache()
        // If you want to use Alternate HTTP settings:
        // ->withWsdlLoader()
        // ->withTransport()
        // If you want specific SOAP setting:
        // ->withWsdlParserContext()
        // ->withWsdlServiceSelectionCriteria()
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new PocztaPolskaSenderClient($caller);
    }


}

