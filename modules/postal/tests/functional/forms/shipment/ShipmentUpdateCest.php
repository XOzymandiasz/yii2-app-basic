<?php

namespace app\modules\postal\tests\functional\forms\shipment;

use app\modules\postal\models\Shipment;
use app\modules\postal\models\ShipmentDirectionInterface;
use app\modules\postal\models\ShipmentProviderInterface;
use app\modules\postal\tests\fixtures\ShipmentAddressFixture;
use app\modules\postal\tests\fixtures\ShipmentContentFixture;
use app\modules\postal\tests\fixtures\ShipmentFixture;
use app\modules\postal\tests\fixtures\UserFixture;
use Codeception\Util\HttpCode;
use FunctionalTester;

class ShipmentUpdateCest
{
    public const ROUTE_UPDATE = 'postal/shipment/update';
    public const ROUTE_AFTER_UPDATE_IN = 'postal/poczta_polska/shipment/update';
    public const ROUTE_LOG_IN = 'site/login';


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
                'dataFile' => codecept_data_dir() . 'shipment_address.php'
            ],
            'user' => [
                'class' => UserFixture::class,
                'dataFile' => codecept_data_dir() . 'user.php'
            ],
        ];
    }

    public function checkRenderIN(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);

        $model = $I->grabFixture('shipment', 'shipment_in_PP');
        $I->amOnRoute(static::ROUTE_UPDATE, ['id' => $model->id]);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->see('Update Postal Shipment', 'h1');
        $I->seeElement('form');
        $I->seeElement('input',  ['name' => 'ShipmentForm[number]']);
        $I->seeInField('ShipmentForm[number]', $model->number);
        $I->seeElement('select', ['name' => 'ShipmentForm[provider]']);
        $I->seeInField('ShipmentForm[provider]', $model->provider);
        $I->seeElement('select', ['name' => 'ShipmentForm[content_id]']);
        $I->seeInField('ShipmentForm[content_id]', $model->content_id);
        $I->seeElement('select', ['name' => 'ShipmentForm[sender_id]']);
        $I->seeElement('select', ['name' => 'ShipmentForm[receiver_id]']);
        $I->seeElement('input[name="ShipmentForm[finished_at]"]');


        $I->seeLink('Create Content', '/postal/shipment-content/create');
        $I->seeLink('Create Receiver Address', '/postal/shipment-address/create?direction='
            . ShipmentDirectionInterface::DIRECTION_OUT);
        $I->seeLink('Create Sender Address', '/postal/shipment-address/create?direction='
            . ShipmentDirectionInterface::DIRECTION_IN);
        $I->seeElement('button', ['type' => 'submit']);
    }

    public function checkRenderOUT(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);

        $model = $I->grabFixture('shipment', 'shipment_out_PP');
        $I->amOnRoute(static::ROUTE_UPDATE, ['id' => $model->id]);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->see('Update Postal Shipment', 'h1');
        $I->seeElement('form');
        $I->seeElement('input',  ['name' => 'ShipmentForm[number]']);
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

    public function checkGuestCannotAccessUpdate(FunctionalTester $I): void
    {
        $model = $I->grabFixture('shipment', 'shipment_out_PP');
        $I->amOnRoute(static::ROUTE_UPDATE, ['id' => $model->id]);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeInCurrentUrl(static::ROUTE_LOG_IN);
    }

    public function checkUpdateOut(FunctionalTester $I): void #todo
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);


        $model = $I->grabFixture('shipment', 'shipment_out_PP');

        codecept_debug($model);

        $I->amOnRoute(static::ROUTE_UPDATE, ['id' => $model->id]);

        $senderAddress = $I->grabFixture('address', 'sender');
        $receiverAddress = $I->grabFixture('address', 'receiver');

        codecept_debug($model->buffer_id);

        $I->submitForm('#shipment-form', [
            'ShipmentForm[number]' => '141324',
            'ShipmentForm[content_id]'  => $model->content_id,
            'ShipmentForm[sender_id]'   => $receiverAddress->id,
            'ShipmentForm[receiver_id]' => $senderAddress->id,
            'ShipmentForm[provider]' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
        ]);


        $shipment = $I->grabRecord(Shipment::class, [
            'id' => $model->id
        ]);


        //$I->amOnRoute(static::ROUTE_AFTER_UPDATE_IN . '?bufferId=' . $model->buffer_id . '&guid=' . $model->guid);

    }


}