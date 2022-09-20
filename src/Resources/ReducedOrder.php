<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class ReducedOrder extends Resource
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
    protected string $bolComResource = 'ReducedOrder';


    /**
     * The identifier of the order.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->get('orderId');
    }

    /**
     * @param string|null $orderId
     * @return $this
     */
    public function setOrderId(string $orderId = null): static
    {
        return $this->set('orderId', $orderId);
    }

    /**
     * The date and time in ISO 8601 format when the order was placed.
     *
     * @return string|null
     */
    public function getOrderPlacedDateTime(): ?string
    {
        return $this->get('orderPlacedDateTime');
    }

    /**
     * @param string|null $orderPlacedDateTime
     * @return $this
     */
    public function setOrderPlacedDateTime(string $orderPlacedDateTime = null): static
    {
        return $this->set('orderPlacedDateTime', $orderPlacedDateTime);
    }

    /**
     * @return ResourceCollection<ReducedOrderItem>|null
     */
    public function getOrderItems(): ?ResourceCollection
    {
        return $this->relation('orderItems', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<ReducedOrderItem>|null $orderItems
     * @return $this
     */
    public function setOrderItems(ResourceCollection $orderItems = null): static
    {
        return $this->set('orderItems', $orderItems);
    }

}
