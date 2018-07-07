<?php

namespace Omnipay\YandexMoney;

use Omnipay\Omnipay;
use Omnipay\Tests\TestCase;
use yandexmoney\YandexMoney\Gateway as YandexCheckoutGateway;

class OmnipayGatewayIndividualTest extends TestCase
{
    public function testCreate()
    {
        $this->assertEquals(
            Omnipay::create('\\'.YandexCheckoutGateway::class),
            new YandexCheckoutGateway
        );
    }
}
