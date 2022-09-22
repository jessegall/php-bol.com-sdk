<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;
use JesseGall\BolComSDK\Resources\Contracts\Response;

/**
* Class SubscriptionsResponse 
*/
class SubscriptionsResponse extends Resource implements Response
{

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'SubscriptionsResponse';

    
    /**
    
    * @return ResourceCollection<SubscriptionResponse>|null
    */
    public function getSubscriptions(): ?ResourceCollection 
    {
        return $this->relation('subscriptions', ResourceCollection::class,true);
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
