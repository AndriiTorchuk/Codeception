<?php

class KaryeraAnketaCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    // tests
    public function TryAnketa(AcceptanceTester $I)
    {
         
        $I->click(['link' => 'Карьера']);
        $I->switchToNextTab(1);
        $I->amOnUrl('https://career.netpeak.group/');
        $I->click(['link' => 'Я хочу работать в Netpeak']);
        $I->attachFile('input[type=file]', 'a.png');
        $I->fillField('name', 'name');
        $I->fillField('lastname', 'lastname');
        $I->fillField('hiringe', '12345@gmail.com');
        $I->fillField('phone', '123456789');
        $I->selectOption('by','2000');
        $I->selectOption('bm','января');
        $I->selectOption('bd','1');
        $I->click('Отправить анкету');
        $I->wait(3); 
        $I->click(['link' => 'Интернатура']);
        $I->wait(3); 
        
        

    }
}
