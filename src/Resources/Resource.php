<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Api;
use JesseGall\Resources\Resource as BaseResource;

abstract class Resource extends BaseResource
{

    /**
     * @var ProcessStatus[]
     */
    protected array $processStatuses = [];

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint;

    /**
     * The unique identifier for the resource.
     *
     * @var string|null
     */
    protected string|null $identifier;


    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource;

    public function refresh(): self
    {
        $response = Api::get($this->self());

        $this->merge($response->json());
    }

    public function self(): string
    {
        return "$this->endpoint/{$this->get($this->identifier)}";
    }

    public function store(): ProcessStatus
    {
        $response = Api::post($this->endpoint, $this->container());

        $status = new ProcessStatus($response->json());

        $this->process($status);

        return $status;
    }

    protected function process(ProcessStatus $status): void
    {
        $this->processStatuses[] = $status;
    }

    public function delete(): ProcessStatus
    {
        $response = Api::delete($this->self());

        $status = new ProcessStatus($response->json());

        $this->process($status);

        return $status;
    }

}