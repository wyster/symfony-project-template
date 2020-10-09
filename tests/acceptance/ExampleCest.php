<?php

declare(strict_types=1);

namespace Test;

class ExampleCest
{
    public function _before(AcceptanceTester $I): void
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I): void
    {
        $I->amOnPage('/');
        $I->seeResponseCodeIs(200);
    }
}
