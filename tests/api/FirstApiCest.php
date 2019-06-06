<?php 

class FirstApiCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendGET('/');
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
    }
}
