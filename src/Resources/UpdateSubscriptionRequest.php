<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;
use JesseGall\BolComSDK\Resources\Contracts\Request;

/**
* Class UpdateSubscriptionRequest 
*/
class UpdateSubscriptionRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string
     */
    protected string $endpoint = '/retailer/subscriptions/{subscription-id}';

    /**
     * The available endpoint methods.
     *
     * @var array
     */
    protected array $endpointMethods = ['get' , 'put' , 'delete'];

   /**
     * The api response of the request.
     *
     * @var string|null
     */
    protected string|null $response = null;

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'UpdateSubscriptionRequest';

    
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
