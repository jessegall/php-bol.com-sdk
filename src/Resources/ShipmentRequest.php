<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Request;
use JesseGall\Resources\ResourceCollection;

/**
 * Class ShipmentRequest
 */
class ShipmentRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/orders/shipment';

    /**
     * The endpoint method.
     *
     * @var string
     */
    protected string $endpointMethod = 'put';

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'ShipmentRequest';


    /**
     * Single element list with the order item to ship.
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
     * A user-defined reference that you can provide to add to the shipment. Can be used for own administration purposes. Only 'null' or non-empty strings accepted.
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
     * The identifier of the purchased shipping label.
     *
     * @return string|null
     */
    public function getShippingLabelId(): ?string
    {
        return $this->get('shippingLabelId');
    }

    /**
     * @param string|null $shippingLabelId
     * @return $this
     */
    public function setShippingLabelId(string $shippingLabelId = null): static
    {
        return $this->set('shippingLabelId', $shippingLabelId);
    }

    /**
     * @return TransportInstruction|null
     */
    public function getTransport(): ?TransportInstruction
    {
        return $this->relation('transport', TransportInstruction::class);
    }

    /**
     * @param TransportInstruction|null $transport
     * @return $this
     */
    public function setTransport(TransportInstruction $transport = null): static
    {
        return $this->set('transport', $transport);
    }

}
