<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Problem extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = 'endpoint';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'Problem';


    /**
     * Type URI for this problem. Fixed value: https://api.bol.com/problems.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->get('type');
    }

    /**
     * @param string|null $type
     * @return $this
     */
    public function setType(string $type = null): static
    {
        return $this->set('type', $type);
    }

    /**
     * Title describing the nature of the problem.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->get('title');
    }

    /**
     * @param string|null $title
     * @return $this
     */
    public function setTitle(string $title = null): static
    {
        return $this->set('title', $title);
    }

    /**
     * HTTP status returned from the endpoint causing the problem.
     *
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->get('status');
    }

    /**
     * @param int|null $status
     * @return $this
     */
    public function setStatus(int $status = null): static
    {
        return $this->set('status', $status);
    }

    /**
     * Detailed error message describing in additional detail what caused the service to return this problem.
     *
     * @return string|null
     */
    public function getDetail(): ?string
    {
        return $this->get('detail');
    }

    /**
     * @param string|null $detail
     * @return $this
     */
    public function setDetail(string $detail = null): static
    {
        return $this->set('detail', $detail);
    }

    /**
     * Host identifier describing the server instance that reported the problem.
     *
     * @return string|null
     */
    public function getHost(): ?string
    {
        return $this->get('host');
    }

    /**
     * @param string|null $host
     * @return $this
     */
    public function setHost(string $host = null): static
    {
        return $this->set('host', $host);
    }

    /**
     * Full URI path of the resource that reported the problem.
     *
     * @return string|null
     */
    public function getInstance(): ?string
    {
        return $this->get('instance');
    }

    /**
     * @param string|null $instance
     * @return $this
     */
    public function setInstance(string $instance = null): static
    {
        return $this->set('instance', $instance);
    }

    /**
     * @return ResourceCollection<Violation>|null
     */
    public function getViolations(): ?ResourceCollection
    {
        return $this->relation('violations', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<Violation>|null $violations
     * @return $this
     */
    public function setViolations(ResourceCollection $violations = null): static
    {
        return $this->set('violations', $violations);
    }

}
