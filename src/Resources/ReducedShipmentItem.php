<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class ReducedShipmentItem
 */
class ReducedShipmentItem extends Resource
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
    protected string $bolComResource = 'ReducedShipmentItem';


    /**
     * A unique identifier for the item of the order that was shipped in this shipment.
     *
     * @return string|null
     */
    public function getOrderItemId(): ?string
    {
        return $this->get('orderItemId');
    }

    /**
     * @param string|null $orderItemId
     * @return $this
     */
    public function setOrderItemId(string $orderItemId = null): static
    {
        return $this->set('orderItemId', $orderItemId);
    }

    /**
     * The EAN number associated with this product.
     *
     * @return string|null
     */
    public function getEan(): ?string
    {
        return $this->get('ean');
    }

    /**
     * @param string|null $ean
     * @return $this
     */
    public function setEan(string $ean = null): static
    {
        return $this->set('ean', $ean);
    }

}
