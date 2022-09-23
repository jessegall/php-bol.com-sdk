<?php

namespace JesseGall\BolComSDK;

use Dotenv\Dotenv;
use JesseGall\ContainsData\ContainsData;

class BolComSDK
{
    use ContainsData;

    protected static BolComSDK $instance;

    protected function __construct() { }

    public static function getInstance()
    {
        if (! isset(self::$instance)) {
            $instance = new static();

            $env = Dotenv::createMutable(__DIR__ . '/../')->load();

            $instance->set('client.id', $env['BOL_PUBLIC']);
            $instance->set('client.secret', $env['BOL_SECRET']);

            self::$instance = $instance;
        }

        return self::$instance;
    }

}