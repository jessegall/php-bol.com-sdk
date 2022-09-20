<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class SubscriptionsResponse extends Resource
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
    protected string $bolComResource = 'SubscriptionsResponse';


    /**
     * @return ResourceCollection<SubscriptionResponse>|null
     */
    public function getSubscriptions(): ?ResourceCollection
    {
        return $this->relation('subscriptions', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<SubscriptionResponse>|null $subscriptions
     * @return $this
     */
    public function setSubscriptions(ResourceCollection $subscriptions = null): static
    {
        return $this->set('subscriptions', $subscriptions);
    }

}
