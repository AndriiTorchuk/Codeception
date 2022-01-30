<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->wait(1); 
        $I->click(['link' => 'Карьера']);
        $I->wait(1); 
        $I->switchToNextTab(1);
        $I->amOnUrl('https://career.netpeak.group/');
        $I->wait(5);
        $I->click(['link' => 'Я хочу работать в Netpeak']);
        $I->wait(1); 
        $I->attachFile('input[type=file]', 'a.png');
        $I->wait(3);
        $I->fillField('name', 'name');
        $I->fillField('lastname', 'lastname');
        $I->fillField('hiringe', '12345@gmail.com');
        $I->fillField('phone', '123456789');
        $I->selectOption('by','2000');
        $I->selectOption('bm','января');
        $I->selectOption('bd','1');
        $I->wait(1); 
        $I->click('Отправить анкету');
        $I->wait(5); 
        $I->click(['link' => 'Интернатура']);
        $I->wait(3); 
        
        

    }
}
