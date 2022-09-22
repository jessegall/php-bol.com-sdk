<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Class Shipment
 */
class Shipment extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/shipments/{shipment-id}';

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'Shipment';


    /**
     * A unique identifier for this shipment.
     *
     * @return string|null
     */
    public function getShipmentId(): ?string
    {
        return $this->get('shipmentId');
    }

    /**
     * @param string|null $shipmentId
     * @return $this
     */
    public function setShipmentId(string $shipmentId = null): static
    {
        return $this->set('shipmentId', $shipmentId);
    }

    /**
     * The date and time in ISO 8601 format when the order item was shipped.
     *
     * @return string|null
     */
    public function getShipmentDateTime(): ?string
    {
        return $this->get('shipmentDateTime');
    }

    /**
     * @param string|null $shipmentDateTime
     * @return $this
     */
    public function setShipmentDateTime(string $shipmentDateTime = null): static
    {
        return $this->set('shipmentDateTime', $shipmentDateTime);
    }

    /**
     * Reference supplied by the user when this item was shipped.
     *
     * @return string|null
     */
    public function getShipmentReference(): ?string
    {
        return $this->get('shipmentReference');
    }

    /**
     * @param string|null $shipmentReference
     * @return $this
     */
    public function setShipmentReference(string $shipmentReference = null): static
    {
        return $this->set('shipmentReference', $shipmentReference);
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
     * @return ShipmentOrder|null
     */
    public function getOrder(): ?ShipmentOrder
    {
        return $this->relation('order', ShipmentOrder::class);
    }

    /**
     * @param ShipmentOrder|null $order
     * @return $this
     */
    public function setOrder(ShipmentOrder $order = null): static
    {
        return $this->set('order', $order);
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
     * @return ResourceCollection<ShipmentItem>|null
     */
    public function getShipmentItems(): ?ResourceCollection
    {
        return $this->relation('shipmentItems', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<ShipmentItem>|null $shipmentItems
     * @return $this
     */
    public function setShipmentItems(ResourceCollection $shipmentItems = null): static
    {
        return $this->set('shipmentItems', $shipmentItems);
    }

    /**
     * @return ShipmentTransport|null
     */
    public function getTransport(): ?ShipmentTransport
    {
        return $this->relation('transport', ShipmentTransport::class);
    }

    /**
     * @param ShipmentTransport|null $transport
     * @return $this
     */
    public function setTransport(ShipmentTransport $transport = null): static
    {
        return $this->set('transport', $transport);
    }

}
