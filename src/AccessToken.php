<?php

namespace JesseGall\BolComSDK;

use JesseGall\ContainsData\ContainsData;

class AccessToken
{
    use ContainsData;

    const ACCESS_TOKEN_FILE_PATH = __DIR__ . '/../.access-token';

    public function __construct()
    {
        $this->__container = [
            'access_token' => null,
            'expires_at' => null,
        ];
    }

    public function init(): void
    {
        if (! file_exists(self::ACCESS_TOKEN_FILE_PATH)) {
            $this->write();
        } else {
            $this->read();
        }
    }

    public function hydrate(array $data): void
    {
        $this->set('access_token', $data['access_token']);

        $this->set('expires_at', time() + $data['expires_in']);

        $this->write();
    }

    public function getAccessToken(): ?string
    {
        return $this->get('access_token');
    }

    public function getExpiresAt(): ?int
    {
        return $this->get('expires_at');
    }

    public function isExpired(): bool
    {
        $expiresAt = $this->getExpiresAt();

        return ! $expiresAt || time() > $expiresAt;
    }

    protected function write(): void
    {
        file_put_contents(self::ACCESS_TOKEN_FILE_PATH, json_encode($this->__container));
    }

    protected function read(): void
    {
        $this->__container = json_decode(file_get_contents(self::ACCESS_TOKEN_FILE_PATH), true);
    }

}