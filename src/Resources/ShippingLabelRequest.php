<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Request;
use JesseGall\Resources\ResourceCollection;

/**
 * Class ShippingLabelRequest
 * The configuration of order items to get delivery options for.
 */
class ShippingLabelRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/shipping-labels';

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
    protected string $bolComResource = 'ShippingLabelRequest';


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

    /**
     * Shipping label offer id for which you request a shipping label.
     *
     * @return string|null
     */
    public function getShippingLabelOfferId(): ?string
    {
        return $this->get('shippingLabelOfferId');
    }

    /**
     * @param string|null $shippingLabelOfferId
     * @return $this
     */
    public function setShippingLabelOfferId(string $shippingLabelOfferId = null): static
    {
        return $this->set('shippingLabelOfferId', $shippingLabelOfferId);
    }

}
