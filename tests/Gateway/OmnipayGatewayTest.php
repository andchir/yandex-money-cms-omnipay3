<?php

namespace Omnipay\YandexMoney;

use Omnipay\Omnipay;
use Omnipay\Tests\TestCase;
use yandexmoney\YandexMoney\GatewayIndividual as YandexMoneyGateway;

class OmnipayGatewayTest extends TestCase
{
    public function testCreate()
    {
        $this->assertEquals(
            Omnipay::create('\\'.YandexMoneyGateway::class),
            new YandexMoneyGateway
        );
    }
}
