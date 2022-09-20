<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Container for the order items that have to be cancelled . extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected
    string $endpoint = 'endpoint';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'Container for the order items that have to be cancelled.';

    
    /**
     * List of order items to cancel. Order item id's must belong to the same order.
     *
     * @return ResourceCollection<OrderItemCancellation>|null
     */
    public function getOrderItems(): ?ResourceCollection
{
    return $this->relation('orderItems', ResourceCollection::class, true);
}

    /**
     * @param ResourceCollection<OrderItemCancellation>|null $orderItems
     * @return $this
     */
    public function setOrderItems(ResourceCollection $orderItems = null): static
{
    return $this->set('orderItems', $orderItems);
}

}
