<?php

use app\modules\postal\controllers\PocztaPolskaShipmentController;

class PocztaPolskaCreateCest
{

    /**
     * @see PocztaPolskaShipmentController::actionCreate()
     */
    public const ROUTE_CREATE = 'postal/poczta-polska-shipment/create';

    public function _before(\FunctionalTester $I)
    {
        $I->amOnRoute(static::ROUTE_CREATE);
    }


    public function checkPage(FunctionalTester $I): void
    {
        $I->seeInTitle('Create Poczta Polska Shipment');
    }

    public function checkSentEmptyForm(FunctionalTester $I): void
    {
        $I->submitForm('#poczta-polska-shipment-check-shipment-form', []);
        $I->see('Number cannot be blank');
    }
}
