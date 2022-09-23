<?php

namespace JesseGall\BolComSDK;

use JesseGall\ContainsData\ContainsData;
use Psr\Http\Message\ResponseInterface;

class Response
{
    use ContainsData {
        ContainsData::set as private __set;
        ContainsData::get as private __get;
    }

    protected ResponseInterface $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function successful(): bool
    {
        $status = $this->response->getStatusCode();

        return $status >= 200 && $status < 300;
    }

    public function failed(): bool
    {
        return ! $this->successful();
    }

    public function json(string $key = null, mixed $default = null)
    {
        if (empty($this->__container)) {
            $this->__container = json_decode($this->response->getBody(), true);
        }

        return $key ? $this->get($key, $default) : $this->container();
    }

    public function headers(): array
    {
        return $this->response->getHeaders();
    }

    protected function get(string $key, mixed $default = null): mixed
    {
        return $this->__get($key, $default);
    }

    protected function set(string $key, mixed $value = null): array
    {
        return $this->__set($key, $value);
    }

}