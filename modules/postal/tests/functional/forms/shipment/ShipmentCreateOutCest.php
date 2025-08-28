<?php

namespace app\modules\postal\tests\functional\forms\shipment;

use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentAddressLink;
use app\modules\postal\models\ShipmentDirectionInterface;
use app\modules\postal\models\ShipmentProviderInterface;
use app\modules\postal\tests\fixtures\ShipmentAddressFixture;
use app\modules\postal\tests\fixtures\ShipmentContentFixture;
use app\modules\postal\tests\fixtures\UserFixture;
use Codeception\Util\HttpCode;
use FunctionalTester;

class ShipmentCreateOutCest
{
    public const ROUTE_CREATE_OUT = 'postal/shipment/create-out';
    public const ROUTE_AFTER_CREATE_IN = 'postal/poczta_polska/shipment/create-from-shipment';
    public const ROUTE_LOG_IN = 'site/login';
    public function _fixtures(): array
    {
        return [
            'content' => [
                'class' => ShipmentContentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_content.php'
            ],
            'address' => [
                'class' => ShipmentAddressFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_address.php'
            ],
            'user' => [
                'class' => UserFixture::class,
                'dataFile' => codecept_data_dir() . 'user.php'
            ],
        ];
    }

    public function checkRender(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);
        $I->amOnRoute(static::ROUTE_CREATE_OUT);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->see('Create Postal Shipment', 'h1');
        $I->seeElement('form');
        $I->seeElement('input', ['name' => 'ShipmentForm[number]']);
        $I->seeElement('select', ['name' => 'ShipmentForm[provider]']);
        $I->seeElement('select', ['name' => 'ShipmentForm[content_id]']);
        $I->seeElement('select', ['name' => 'ShipmentForm[sender_id]']);
        $I->seeElement('select', ['name' => 'ShipmentForm[receiver_id]']);
        $I->dontSeeElement('input[name="ShipmentForm[finished_at]"]');

        $I->seeLink('Create Content', '/postal/shipment-content/create');
        $I->seeLink('Create Receiver Address', '/postal/shipment-address/create?direction='
            . ShipmentDirectionInterface::DIRECTION_OUT);
        $I->seeLink('Create Sender Address', '/postal/shipment-address/create?direction='
            . ShipmentDirectionInterface::DIRECTION_IN);
        $I->seeElement('button', ['type' => 'submit']);
    }

    public function checkGuestCannotAccessCreate(FunctionalTester $I): void
    {
        $I->amOnRoute(static::ROUTE_CREATE_OUT);

        $I->seeResponseCodeIs(HttpCode::OK);

        $I->seeInCurrentUrl(static::ROUTE_LOG_IN);
    }

    public function checkCreate(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);
        $I->amOnRoute(static::ROUTE_CREATE_OUT);

        $content = $I->grabFixture('content', 'content_active');
        $senderAddress = $I->grabFixture('address', 'sender');
        $receiverAddress = $I->grabFixture('address', 'receiver');

        $I->submitForm('#shipment-form', [
            'ShipmentForm[provider]' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
            'ShipmentForm[content_id]'  => $content->id,
            'ShipmentForm[sender_id]'   => $senderAddress->id,
            'ShipmentForm[receiver_id]' => $receiverAddress->id,
        ]);

        $I->seeRecord(Shipment::class, [
            'provider' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
            'content_id' => $content->id,
        ]);

        $id = $I->grabRecord(Shipment::class, [
            'provider' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
            'content_id' => $content->id,
        ])->id;

        $I->seeRecord(ShipmentAddressLink::class, [
            'shipment_id' => $id,
            'address_id' => $senderAddress->id,
        ]);

        $I->seeRecord(ShipmentAddressLink::class, [
            'shipment_id' => $id,
            'address_id' => $receiverAddress->id,
        ]);

        $I->amOnRoute(static::ROUTE_AFTER_CREATE_IN . '?id=' . $id);
    }

    public function checkCreateEmpty(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);
        $I->amOnRoute(static::ROUTE_CREATE_OUT);

        $content = $I->grabFixture('content', 'content_active');
        $senderAddress = $I->grabFixture('address', 'sender');
        $receiverAddress = $I->grabFixture('address', 'receiver');


        $I->submitForm('#shipment-form', [
            'ShipmentForm[content_id]'  => $content->id,
            'ShipmentForm[sender_id]'   => $senderAddress->id,
            'ShipmentForm[receiver_id]' => $receiverAddress->id,
        ]);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeInCurrentUrl(static::ROUTE_CREATE_OUT);
        $I->see('Create Postal Shipment', 'h1');
        $I->see('Provider cannot be blank');
    }
}