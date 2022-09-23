<?php

namespace JesseGall\BolComSDK\Tests;

use JesseGall\BolComSDK\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();

        Api::setDemo(true);
    }

    public function test_can_get_order_from_api()
    {
        $response = Api::get('/orders/1042823870');

        $this->assertTrue($response->successful());
    }

    public function test_can_get_products()
    {
        $response = Api::get('/offers/13722de8-8182-d161-5422-4a0a1caab5c8');

        $this->assertTrue($response->successful());
    }

}