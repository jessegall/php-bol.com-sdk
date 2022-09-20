<?php

namespace JesseGall\BolComSDK\Resources;

class CreateSubscriptionRequest extends Resource
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
    protected string $bolComResource = 'CreateSubscriptionRequest';


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
