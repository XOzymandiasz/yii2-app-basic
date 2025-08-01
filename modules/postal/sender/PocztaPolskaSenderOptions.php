<?php

namespace app\modules\postal\sender;

use WsdlToPhp\PackageBase\SoapClientInterface;
use yii\base\Component;

class PocztaPolskaSenderOptions extends Component
{

    public string $login = '';
    public string $password = '';
    public array $classMap = [];

    public bool $useLocalFile = true;

    public bool $isTest = true;
    public int $cache = WSDL_CACHE_NONE;

    public array $options = [];

    private string $testLocation = 'https://en-testwebapi.poczta-polska.pl/websrv/labs.php';
    private string $prodWsdl = '';
    private string $testWsdl = 'https://en-testwebapi.poczta-polska.pl/websrv/?wsdl';

    public function init(): void
    {
        parent::init();
        if (empty($this->classMap)) {
            $this->classMap = PocztaPolskaSenderClassMap::get();
        }
    }


    public function getSoapOptions(): array
    {
        $options = $this->options;
        $options[SoapClientInterface::WSDL_LOGIN] = $this->login;
        $options[SoapClientInterface::WSDL_PASSWORD] = $this->password;
        if ($this->isTest) {
            $options[SoapClientInterface::WSDL_LOCATION] = $this->testLocation;
        }
        $options[SoapClientInterface::WSDL_URL] = $this->getWsdlUrl();
        $options[SoapClientInterface::WSDL_CLASSMAP] = $this->classMap;

        return $options;
    }

    private function getWsdlUrl(): string
    {
        return $this->isTest ? $this->testWsdl : $this->prodWsdl;
    }


    public static function testInstance(array $config = []): self
    {
        $config = array_merge(
            [
                'login' => $_ENV['POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_USERNAME'],
                'password' => $_ENV['POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_PASSWORD'],
                'isTest' => true,
                'cache' => WSDL_CACHE_NONE
            ], $config
        );
        return new self($config);
    }

}
