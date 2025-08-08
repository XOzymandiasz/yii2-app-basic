<?php

namespace functional\postal;

use app\modules\postal\modules\poczta_polska\controllers\PocztaPolskaShipmentCheckController;
use FunctionalTester;

class PocztaPolskaShipmentCheckCest
{
    /**
     * @see ShipmentCheckController::actionShipmentCheckForm()
     */
    public const ROUTE_SHIPMENT_CHECK = 'postal/poczta-polska-shipment-check/shipment-check-form';

    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute(static::ROUTE_SHIPMENT_CHECK);
    }

    public function checkRenders(FunctionalTester $I)
    {
        $I->see('Number');
        $I->seeElement('form');
    }

    public function checkValidFormRedirect(FunctionalTester $I)
    {
        $I->submitForm('form',
            [
            'PocztaPolskaShipmentCheckForm[number]' => '00459007730895487721',
            'PocztaPolskaShipmentCheckForm[withPostInfo]' => 1,
            ]
        );
        //$I->amOnPage(Url::to([
        //    static::ROUTE_SHIPMENT_CHECK,
        //    'number' => '00459007730895487721',
        //    'addPostInfo' => true,
        //]));

        $I->seeInCurrentUrl('postal/poczta-polska-shipment-check/check-mail?number=00459007730895487721&addPostInfo=1');
    }

    public function checkBlankForm(FunctionalTester $I)
    {
        $I->submitForm('form',
            [
                'PocztaPolskaShipmentCheckForm[number]' => '',
                'PocztaPolskaShipmentCheckForm[withPostInfo]' => 0,
            ]
        );
        $I->see('Shipment Number cannot be blank.');
    }

    public function checkMailReturns404(FunctionalTester $I)
    {
        $I->submitForm('form',
            [
                'PocztaPolskaShipmentCheckForm[number]' => 'I_AM_NOT_EXISTS',
                'PocztaPolskaShipmentCheckForm[withPostInfo]' => 0,
            ]
        );
        $I->seeResponseCodeIs(404);
    }


}