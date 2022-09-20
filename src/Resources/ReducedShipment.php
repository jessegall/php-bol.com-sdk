<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class ReducedShipment extends Resource
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
    protected string $bolComResource = 'ReducedShipment';


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
     * @return ReducedShipmentOrder|null
     */
    public function getOrder(): ?ReducedShipmentOrder
    {
        return $this->relation('order', ReducedShipmentOrder::class);
    }

    /**
     * @param ReducedShipmentOrder|null $order
     * @return $this
     */
    public function setOrder(ReducedShipmentOrder $order = null): static
    {
        return $this->set('order', $order);
    }

    /**
     * @return ResourceCollection<ReducedShipmentItem>|null
     */
    public function getShipmentItems(): ?ResourceCollection
    {
        return $this->relation('shipmentItems', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<ReducedShipmentItem>|null $shipmentItems
     * @return $this
     */
    public function setShipmentItems(ResourceCollection $shipmentItems = null): static
    {
        return $this->set('shipmentItems', $shipmentItems);
    }

    /**
     * @return ReducedTransport|null
     */
    public function getTransport(): ?ReducedTransport
    {
        return $this->relation('transport', ReducedTransport::class);
    }

    /**
     * @param ReducedTransport|null $transport
     * @return $this
     */
    public function setTransport(ReducedTransport $transport = null): static
    {
        return $this->set('transport', $transport);
    }

}
