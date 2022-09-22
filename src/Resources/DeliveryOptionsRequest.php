<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;
use JesseGall\BolComSDK\Resources\Contracts\Request;

/**
* Class DeliveryOptionsRequest 
* The configuration of order items to get delivery options for.
*/
class DeliveryOptionsRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string
     */
    protected string $endpoint = '/retailer/shipping-labels/delivery-options';

    /**
     * The available endpoint methods.
     *
     * @var array
     */
    protected array $endpointMethods = ['post'];

   /**
     * The api response of the request.
     *
     * @var string|null
     */
    protected string|null $response = DeliveryOptionsResponse::class;

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'DeliveryOptionsRequest';

    
    /**
    * Order items for which the delivery options are requested. 
*
    * @return ResourceCollection<OrderItem>|null
    */
    public function getOrderItems(): ?ResourceCollection 
    {
        return $this->relation('orderItems', ResourceCollection::class,true);
    }

    /**
     * @param ResourceCollection<OrderItem>|null $orderItems
     * @return $this
     */
    public function setOrderItems(ResourceCollection $orderItems = null): static 
    {
        return $this->set('orderItems', $orderItems);
    }

}
