<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Class ReducedOrders
 * Container for many orders.
 */
class ReducedOrders extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/orders';

    /**
     * The unique identifier for the resource.
     *
     * @var string|null
     */
    protected string|null $identifier = null;

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'ReducedOrders';


    /**
     * @return ResourceCollection<ReducedOrder>|null
     */
    public function getOrders(): ?ResourceCollection
    {
        return $this->relation('orders', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<ReducedOrder>|null $orders
     * @return $this
     */
    public function setOrders(ResourceCollection $orders = null): static
    {
        return $this->set('orders', $orders);
    }

}
