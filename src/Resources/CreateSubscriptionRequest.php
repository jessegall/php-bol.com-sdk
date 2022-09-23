<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Request;

/**
 * Class CreateSubscriptionRequest
 */
class CreateSubscriptionRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/subscriptions';

    /**
     * The endpoint method.
     *
     * @var string
     */
    protected string $endpointMethod = 'post';

    /**
     * The bol.com resource this class represents
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
