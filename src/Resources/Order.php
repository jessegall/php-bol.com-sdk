<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Class Order
 * An order.
 */
class Order extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/orders/{order-id}';

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'Order';


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
     * Indicates whether this order is shipped to a Pick Up Point.
     *
     * @return bool|null
     */
    public function getPickupPoint(): ?bool
    {
        return $this->get('pickupPoint');
    }

    /**
     * @param bool|null $pickupPoint
     * @return $this
     */
    public function setPickupPoint(bool $pickupPoint): static
    {
        return $this->set('pickupPoint', $pickupPoint);
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
     * @return ShipmentDetails|null
     */
    public function getShipmentDetails(): ?ShipmentDetails
    {
        return $this->relation('shipmentDetails', ShipmentDetails::class);
    }

    /**
     * @param ShipmentDetails|null $shipmentDetails
     * @return $this
     */
    public function setShipmentDetails(ShipmentDetails $shipmentDetails = null): static
    {
        return $this->set('shipmentDetails', $shipmentDetails);
    }

    /**
     * @return BillingDetails|null
     */
    public function getBillingDetails(): ?BillingDetails
    {
        return $this->relation('billingDetails', BillingDetails::class);
    }

    /**
     * @param BillingDetails|null $billingDetails
     * @return $this
     */
    public function setBillingDetails(BillingDetails $billingDetails = null): static
    {
        return $this->set('billingDetails', $billingDetails);
    }

    /**
     * @return ResourceCollection<OrderOrderItem>|null
     */
    public function getOrderItems(): ?ResourceCollection
    {
        return $this->relation('orderItems', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<OrderOrderItem>|null $orderItems
     * @return $this
     */
    public function setOrderItems(ResourceCollection $orderItems = null): static
    {
        return $this->set('orderItems', $orderItems);
    }

}
