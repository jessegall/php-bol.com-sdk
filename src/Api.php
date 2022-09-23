<?php

namespace JesseGall\BolComSDK;

/**
 * @method static Response post(string $url, array $data = []);
 * @method static Response get(string $url, array $params = []);
 * @method static Response delete(string $url);
 */
class Api
{

    protected static Api $instance;

    protected Client $client;

    protected function __construct()
    {
        $sdk = BolComSDK::getInstance();

        $this->client = new Client(
            $sdk->get('client.id'),
            $sdk->get('client.secret'),
        );
    }

    public static function instance(): Api
    {
        if (! isset(self::$instance)) {
            self::$instance = new Api();
        }

        return self::$instance;
    }

    public static function __callStatic(string $method, array $parameters): mixed
    {
        if (method_exists(Client::class, $method)) {
            return self::instance()->client()->{$method}(...$parameters);
        }

        return null;
    }

    public function client(): Client
    {
        return $this->client;
    }

    # --- Getters and Setters ---

    public static function isDemo(): bool
    {
        return self::instance()->client->isDemo();
    }

    public static function setDemo(bool $demo): void
    {
        self::instance()->client->setDemo($demo);
    }

}