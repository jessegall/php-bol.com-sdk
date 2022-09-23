<?php

namespace JesseGall\BolComSDK;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;

class Client
{

    const LOGIN_URL = 'https://login.bol.com/token?grant_type=client_credentials';

    protected GuzzleClient $guzzle;

    protected string $clientId;
    protected string $clientSecret;

    protected bool $demo = false;
    protected AccessToken $accessToken;

    public function __construct(string $clientId, string $clientSecret)
    {
        $this->guzzle = new GuzzleClient([
            'base_uri' => 'https://api.bol.com'
        ]);
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->accessToken = new AccessToken();

        $this->init();
    }

    public function init(): void
    {
        $this->accessToken->init();

        if ($this->accessToken->isExpired()) {
            $response = $this->requestAccessToken();

            $this->accessToken->hydrate($response->json());
        }
    }

    public function requestAccessToken(): Response
    {
        $credentials = base64_encode("$this->clientId:$this->clientSecret");

        $response = $this->guzzle->post(self::LOGIN_URL, [
            'headers' => [
                'Authorization' => "Basic $credentials"
            ]
        ]);

        return new Response($response);
    }

    public function post(string $uri, array $data = []): Response
    {
        return $this->request('post', $uri, [
            'json' => $data
        ]);
    }

    public function get(string $uri, array $params = []): Response
    {
        return $this->request('get', $uri, [
            'query' => $params
        ]);
    }

    public function delete(string $uri): Response
    {
        return $this->request('delete', $uri);
    }

    protected function request(string $method, string $uri, array $options = []): Response
    {
        if ($this->demo) {
            $uri = $this->transformUrlToDemo($uri);
        }

        try {
            $response = $this->guzzle->request($method, $uri, [
                'headers' => [
                    'Accept' => 'application/vnd.retailer.v7+json',
                    'Content-Type' => 'application/vnd.retailer.v7+json',
                    'Authorization' => "Bearer {$this->accessToken->getAccessToken()}"
                ],
                ...$options,
            ]);
        } catch (GuzzleException $exception) {
            $response = $exception->getResponse();
        }

        return new Response($response);
    }

    protected function transformUrlToDemo(string $uri): string
    {
        [, $domain] = $uri = explode('/', $uri);

        $uri[1] = "$domain-demo";

        return implode('/', $uri);
    }

    # --- Getters and Setters ---

    public function isDemo(): bool
    {
        return $this->demo;
    }

    public function setDemo(bool $demo): void
    {
        $this->demo = $demo;
    }

}