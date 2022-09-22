<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class ReducedShipmentOrder
 */
class ReducedShipmentOrder extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = null;

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'ReducedShipmentOrder';


    /**
     * A unique identifier for the order this shipment is related to.
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

}
