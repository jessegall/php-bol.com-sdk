<?php

namespace JesseGall\BolComSDK\Tests;

use JesseGall\BolComSDK\Api;
use JesseGall\BolComSDK\Resources\RetailerOffer;
use PHPUnit\Framework\TestCase;

class OfferTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();

        Api::setDemo(true);
    }

    public function test_can_store_offer()
    {
        $offer = RetailerOffer::create([
            "ean" => "9780471117094",
            "condition" => [
                "name" => "NEW",
                "category" => "NEW"
            ],
            "reference" => "RefCode",
            "onHoldByRetailer" => true,
            "unknownProductTitle" => "Title",
            "pricing" => [
                "bundlePrices" => [[
                    "quantity" => 1,
                    "unitPrice" => 9.99
                ], [
                    "quantity" => 6,
                    "unitPrice" => 8.99
                ], [
                    "quantity" => 12,
                    "unitPrice" => 7.99
                ]]
            ],
            "stock" => [
                "amount" => 1,
                "managedByRetailer" => false
            ],
            "fulfilment" => [
                "method" => "FBR",
                "deliveryCode" => "VVB"
            ]
        ]);

        $processStatus = $offer->store();

        $this->assertEquals('PENDING', $processStatus->getStatus());
    }

    public function test_can_delete_offer()
    {
        $offer = RetailerOffer::create([
            'offerId' => '13722de8-8182-d161-5422-4a0a1caab5c8'
        ]);

        $processStatus = $offer->delete();

        dd($processStatus);
    }

}