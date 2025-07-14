<?php

namespace tests\unit\postal;

use app\modules\postal\components\exceptions\BadRequestException;
use app\modules\postal\components\exceptions\ForbiddenAuthException;
use app\modules\postal\components\exceptions\InvalidAuthException;
use app\modules\postal\components\exceptions\PasswordChangeRequiredException;
use app\modules\postal\components\exceptions\UnavailableServiceException;
use app\modules\postal\components\PocztaPolskaTrackerClient;
use yii\base\InvalidConfigException;
use yii\httpclient\Exception;

/**
 * @property \UnitTester $tester
 */
class PocztaPolskaTrackerClientTest extends \Codeception\Test\Unit
{

    private PocztaPolskaTrackerClient $tracking;


    public function testAuthWithoutValidLanguage(): void
    {
        $this->tester->expectThrowable(BadRequestException::class, function () {
            $this->giveTracking();
            $tracking = $this->tracking;
            $tracking->language = 'TEST_NOT_EXISTED';
            $tracking->passwordHash = 'invaidHash';
            $tracking->auth();
        });
    }

    public function testAuthWithoutPasswordHash()
    {
        $this->tester->expectThrowable(InvalidConfigException::class, function () {
            $this->giveTracking();
            $tracking = $this->tracking;
            $tracking->passwordHash = '';
            $tracking->auth();
        });
    }


    public function testAuthWithoutValidPasswordHash()
    {
        $this->tester->expectThrowable(InvalidAuthException::class, function () {
            $this->giveTracking();
            $tracking = $this->tracking;
            $tracking->passwordHash = 'invalidHash';
            $tracking->auth();
        });
    }

    /**
     * @throws InvalidConfigException
     * @throws PasswordChangeRequiredException
     * @throws Exception
     * @throws ForbiddenAuthException
     * @throws InvalidAuthException
     * @throws UnavailableServiceException
     * @throws BadRequestException
     */
    public function testAuthWithDefaultConfig(): void
    {
        $this->giveTracking();
        $tracking = $this->tracking;
        $token = $tracking->auth();

        $this->tester->assertNotNull($token);
        $this->tester->assertIsString($token);
    }

    public function testCheckMailexForEmptyNumber()
    {
        $this->giveTracking();
        $tracking = $this->tracking;
        $this->tester->expectThrowable(BadRequestException::class, function () use ($tracking) {
            $package = $tracking->checkMailex('');
        });

    }



    public function testCheckMailexForValidNumber()
    {
        $this->giveTracking();
        $tracking = $this->tracking;
        $number = '00459007730898130679';
        $package = $tracking->checkMailex($number);
        $this->tester->assertNotNull($package);
        $this->tester->assertNotEmpty($package);
    }

    private function giveTracking(array $config = []): void
    {
        $this->tracking = new PocztaPolskaTrackerClient($config);
    }

}
