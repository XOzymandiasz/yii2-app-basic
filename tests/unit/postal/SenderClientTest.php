<?php

namespace unit\postal;


use app\modules\postal\sender\PocztaPolskaSenderClient;
use app\modules\postal\sender\PocztaPolskaSenderClientFactory;
use app\modules\postal\sender\Type\Hello;
use Codeception\Test\Unit;
use Dotenv\Dotenv;
use UnitTester;

/**
 * @property UnitTester $tester
 */
class SenderClientTest extends Unit
{

    private PocztaPolskaSenderClient $client;

    protected function setUp(): void
    {
        parent::setUp();

        $dotenv = Dotenv::createImmutable(dirname(__DIR__, 3));
        $dotenv->load();
    }

    public function testHi() {
        $this->giveClient();;
        $client = $this->client;
        $response = $client->hello(new Hello('Edzima!'));
        $this->tester->assertSame('Hello Edzima!', $response->getOut());
    }

    protected function giveClient(): void {
        $this->client = PocztaPolskaSenderClientFactory::factory(
            PocztaPolskaSenderClientFactory::TYPE_TEST,
            $_ENV['POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_USERNAME'],
            $_ENV['POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_PASSWORD']
        );
    }

}
