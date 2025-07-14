<?php

namespace functional\postal;

use FunctionalTester;
use yii\helpers\Url;

class PocztaPolskaMailViewCest
{
    /**
     * @see PocztaPolskaShipmentCheckController::actionCheckMail()
     */

    public const ROUTE_CHECK_MAIL = 'poczta-polska-shipment-check/check-mail';

    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute(static::ROUTE_CHECK_MAIL);
    }

    public function checkRendersWithPostInfo(FunctionalTester $I)
    {
        $I->amOnPage(Url::to([
            static::ROUTE_CHECK_MAIL,
            'number' => '00459007730895487721',
            'addPostInfo' => true,
        ]));

        $I->see('00459007730895487721');
    }




}