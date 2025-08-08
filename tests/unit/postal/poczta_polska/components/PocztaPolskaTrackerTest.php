<?php


namespace tracker;

use app\modules\postal\modules\poczta_polska\components\exceptions\BaseException;
use app\modules\postal\modules\poczta_polska\components\PocztaPolskaTracker;
use app\modules\postal\modules\poczta_polska\components\PocztaPolskaTrackerClient;
use app\modules\postal\modules\poczta_polska\entities\Mail;
use app\modules\postal\modules\poczta_polska\entities\MailInfo;
use app\modules\postal\modules\poczta_polska\entities\MailInfoEvent;
use app\modules\postal\modules\poczta_polska\entities\MailInfoEventOffice;
use app\modules\postal\modules\poczta_polska\entities\MailInfoEventStates;


/**
 * @property \UnitTester $tester
 */
class PocztaPolskaTrackerTest extends \Codeception\Test\Unit
{

    private PocztaPolskaTracker $tracking;

    /**
     * @todo check or find test number, this is real mail number
     */
    private const SHIPMENT_NUMBER = '00459007730898130679';


    /**
     * @throws BaseException
     */

    public function testIsMail()
    {
        $number = static::SHIPMENT_NUMBER;
        $this->giveTracking();
        $tracking = $this->tracking;
        $mail = $tracking->checkMail($number);
        $this->tester->assertInstanceOf(Mail::class, $mail);
        $this->tester->assertNotNull($mail->mailStatus);
        $this->tester->assertNotNull($mail->number);
        $this->tester->assertInstanceOf(MailInfo::class, $mail->mailInfo);
        $mailInfo = $mail->mailInfo;
        $this->tester->assertIsArray($mailInfo->events);
        foreach ($mailInfo->events as $event) {
            $this->tester->assertInstanceOf(MailInfoEvent::class, $event);
            $postOffice = $event->postOffice;
            $state = $event->state;
            $this->tester->assertInstanceOf(MailInfoEventOffice::class, $postOffice);
            if ($state) {
                $this->tester->assertInstanceOf(MailInfoEventStates::class, $state);
            }
        }

    }

    public function testFinishedAt()
    {
        $number = static::SHIPMENT_NUMBER;
        $this->giveTracking();
        $tracking = $this->tracking;
        $mail = $tracking->checkMail($number);
        $this->tester->assertInstanceOf(Mail::class, $mail);
        $this->tester->assertInstanceOf(MailInfo::class, $mail->mailInfo);
        $mailInfo = $mail->mailInfo;
        if ($mailInfo->finished) {
            $this->tester->assertNotNull($mail->getFinishedAt());
        }
    }

    public function testShippedAt()
    {
        $number = static::SHIPMENT_NUMBER;
        $this->giveTracking();
        $tracking = $this->tracking;
        $mail = $tracking->checkMail($number);
        $this->tester->assertInstanceOf(Mail::class, $mail);
        $this->tester->assertInstanceOf(MailInfo::class, $mail->mailInfo);
        $mailInfo = $mail->mailInfo;
        $events = $mailInfo->events;
        foreach ($events as $event) {
            $state = $event->state;
            if (isset($state) && $state->isShipped()) {
                $this->tester->assertNotNull($mail->getShipmentAt());
            }
        }
    }

    public function testSentAt()
    {
        $number = static::SHIPMENT_NUMBER;
        $this->giveTracking();
        $tracking = $this->tracking;
        $mail = $tracking->checkMail($number);
        $this->tester->assertInstanceOf(Mail::class, $mail);
        $this->tester->assertInstanceOf(MailInfo::class, $mail->mailInfo);
        $mailInfo = $mail->mailInfo;
        $events = $mailInfo->events;
        foreach ($events as $event) {
            $state = $event->state;
            if (isset($state) && $state->isSent()) {
                $this->tester->assertNotNull($mail->getSentAt());
            }
        }
    }

    private function giveTracking(array $config = []): void
    {
        $client = new PocztaPolskaTrackerClient();
        $this->tracking = new PocztaPolskaTracker($client, $config);
    }

}
