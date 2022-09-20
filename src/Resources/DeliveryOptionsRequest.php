<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class DeliveryOptionsRequest extends Resource
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
    protected string $bolComResource = 'DeliveryOptionsRequest';


    /**
     * Order items for which the delivery options are requested.
     *
     * @return ResourceCollection<OrderItem>|null
     */
    public function getOrderItems(): ?ResourceCollection
    {
        return $this->relation('orderItems', ResourceCollection::class, true);
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
