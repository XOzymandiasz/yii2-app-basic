<?php

namespace functional\postal\forms;

use app\modules\postal\models\ShipmentDirectionInterface;
use app\modules\postal\models\ShipmentProviderInterface;
use FunctionalTester;

class ShipmentCreateOutCest
{
    public const ROUTE_CREATE = 'postal/shipment/create-out';

    public function _before(FunctionalTester $I): void
    {
        $I->amOnRoute(static::ROUTE_CREATE);
    }

    public function checkPage(FunctionalTester $I): void
    {
        $I->seeInTitle('Create Postal Shipment');
        $I->seeElement('input[name="ShipmentForm[number]"]');
        $I->seeElement('select[name="ShipmentForm[provider]"]');
        $I->seeElement('select[name="ShipmentForm[content_id]"]');
        $I->seeElement('select[name="ShipmentForm[sender_id]"]');
        $I->seeElement('select[name="ShipmentForm[receiver_id]"]');
        $I->seeElement('a[href*="shipment-address/create?direction=' .
            ShipmentDirectionInterface::DIRECTION_OUT . '"]');
        $I->seeElement('a[href*="shipment-address/create?direction=' .
            ShipmentDirectionInterface::DIRECTION_IN . '"]');
        $I->see('Save', 'button');
    }

    public function checkSendShipmentWithEmptyForm(FunctionalTester $I): void
    {
        $I->submitForm('#w0', [
            'ShipmentForm[number]' => '',
            'ShipmentForm[provider]' => '',
            'ShipmentForm[content_id]' => 0,
            'ShipmentForm[sender_id]' => 0,
            'ShipmentForm[receiver_id]' => 0,
        ]);

        $I->seeInSource('Provider cannot be blank');
        $I->seeInSource('Content ID cannot be blank.');
        $I->seeInSource('Sender ID cannot be blank.');
        $I->seeInSource('Receiver ID cannot be blank.');
    }

    public function checkSendCorrectShipmentForm(FunctionalTester $I): void
    {
        $I->submitForm('#w0', [
            'ShipmentForm[number]' => '19292309412304',
            'ShipmentForm[provider]' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
            'ShipmentForm[content_id]' => 1,
            'ShipmentForm[sender_id]' => 1,
            'ShipmentForm[receiver_id]' => 1,
        ]);
    }


}