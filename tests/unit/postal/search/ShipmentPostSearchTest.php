<?php

namespace app\tests\unit\postal\search;

use app\modules\postal\models\search\ShipmentPostSearch;
use app\modules\postal\models\ShipmentAddress;
use Codeception\Test\Unit;
use tests\fixtures\ShipmentAddressFixture;
use tests\fixtures\ShipmentAddressLinkFixture;
use tests\fixtures\ShipmentContentFixture;
use tests\fixtures\ShipmentFixture;
use tests\fixtures\UserFixture;
use UnitTester;

/**
 * @property UnitTester $tester
 */

class ShipmentPostSearchTest extends Unit
{
    public ShipmentPostSearch $search;

    public function _before(): void
    {
        $this->search = new ShipmentPostSearch();
    }
    public function _fixtures(): array
    {
        return [
            'shipment' => [
                'class' => ShipmentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment.php'
            ],
            'content' => [
                'class' => ShipmentContentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_content.php'
            ],
            'address' => [
                'class' => ShipmentAddressFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_address.php',
            ],
            'address_link' => [
                'class' => ShipmentAddressLinkFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_address_link.php',
            ],
            'user' => [
                'class' => UserFixture::class,
                'dataFile' => codecept_data_dir() . 'user.php'
            ],
        ];
    }

    public function testCreatorScenarioBlocksAssigment(): void
    {
        $this->search->scenario = $this->search::SCENARIO_CREATOR;

        $this->assertNull($this->search->creator_id);

        $this->search->creator_id = 123;
        $this->assertTrue($this->search->validate(['creator_id']));
    }

    public function testBasicFilter(): void
    {
        $shipment = $this->tester->grabFixture('shipment', 'shipment_in_PP');

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'direction' => $shipment->direction,
            'provider' => $shipment->provider,
            'number' => $shipment->number,
            'content' => $shipment->content,
        ]]);

        $this->tester->assertCount(1, $dataProvider->getModels());
        $this->tester->assertSame($shipment->id, $dataProvider->getModels()[0]->id);
    }

    public function testSenderNameFilter(): void
    {
        /**
         * @var ShipmentAddress $address
         */
        $address = $this->tester->grabFixture('address', 'sender');

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'senderName' => $address->getFullName()
        ]]);

        $senderId = $dataProvider->getModels()[0]->senderAddress->id;

        $this->tester->assertCount(1, $dataProvider->getModels());
        $this->tester->assertSame($address->id, $senderId);
    }

    public function testReceiverNameFilter(): void
    {
        /**
         * @var ShipmentAddress $address
         */
        $address = $this->tester->grabFixture('address', 'receiver');

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'receiverName' => $address->getFullName()
        ]]);

        $receiverId = $dataProvider->getModels()[0]->receiverAddress->id;

        $this->tester->assertCount(1, $dataProvider->getModels());
        $this->tester->assertSame($address->id, $receiverId);
    }

    public function testSenderAddressFilter(): void
    {
        /**
         * @var ShipmentAddress $address
         */
        $address = $this->tester->grabFixture('address', 'sender');

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'senderAddress' => $address->getFullInfo()
        ]]);

        $senderId = $dataProvider->getModels()[0]->senderAddress->id;

        $this->tester->assertCount(1, $dataProvider->getModels());
        $this->tester->assertSame($address->id, $senderId);
    }

    public function testReceiverAddressFilter(): void
    {
        /**
         * @var ShipmentAddress $address
         */
        $address = $this->tester->grabFixture('address', 'receiver');

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'receiverAddress' => $address->getFullInfo()
        ]]);

        $senderId = $dataProvider->getModels()[0]->receiverAddress->id;

        $this->tester->assertCount(1, $dataProvider->getModels());
        $this->tester->assertSame($address->id, $senderId);
    }

    public function testReceiverAndSenderNameFilter(): void
    {
        $sender = $this->tester->grabFixture('address', 'sender');
        $receiver = $this->tester->grabFixture('address', 'receiver');

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'receiverName' => $receiver->getFullName(),
            'senderName' => $sender->getFullName()
        ]]);

        $this->tester->assertCount(0, $dataProvider->getModels());
    }

    public function testNoJoinWhenNoCompositeFilters(): void
    {
        $shipment = $this->tester->grabFixture('shipment', 'shipment_in_PP');

        $dataProvider = $this->search->search(['ShipmentPostSearch' => [
            'provider' => $shipment->provider,
        ]]);

        $sql = $dataProvider->query->createCommand()->getRawSql();
        $this->tester->assertStringNotContainsString(' JOIN ', $sql);
    }

}