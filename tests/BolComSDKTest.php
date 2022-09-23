<?php

namespace JesseGall\BolComSDK\Tests;

use JesseGall\BolComSDK\BolComSDK;
use PHPUnit\Framework\TestCase;

class BolComSDKTest extends TestCase
{

    private BolComSDK $sdk;

    protected function setUp(): void
    {
        parent::setUp();

        $this->sdk = BolComSDK::getInstance();
    }

    public function test_lalal()
    {

    }

}