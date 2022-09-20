<?php

namespace JesseGall\BolComSDK\Resources;

class SubscriptionResponse extends Resource
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
    protected string $bolComResource = 'SubscriptionResponse';


    /**
     * A unique identifier for the subscription.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->get('id');
    }

    /**
     * @param string|null $id
     * @return $this
     */
    public function setId(string $id = null): static
    {
        return $this->set('id', $id);
    }

    /**
     * Type of event.
     *
     * @return array|null
     */
    public function getResources(): ?array
    {
        return $this->get('resources');
    }

    /**
     * @param array|null $resources
     * @return $this
     */
    public function setResources(array $resources = null): static
    {
        return $this->set('resources', $resources);
    }

    /**
     * URL to receive this WebHook notification.
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->get('url');
    }

    /**
     * @param string|null $url
     * @return $this
     */
    public function setUrl(string $url = null): static
    {
        return $this->set('url', $url);
    }

}
