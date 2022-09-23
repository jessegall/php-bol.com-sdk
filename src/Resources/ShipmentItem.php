<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class ShipmentItem
 */
class ShipmentItem extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = null;

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
    protected string $bolComResource = 'ShipmentItem';


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
     * @return ShipmentFulfilment|null
     */
    public function getFulfilment(): ?ShipmentFulfilment
    {
        return $this->relation('fulfilment', ShipmentFulfilment::class);
    }

    /**
     * @param ShipmentFulfilment|null $fulfilment
     * @return $this
     */
    public function setFulfilment(ShipmentFulfilment $fulfilment = null): static
    {
        return $this->set('fulfilment', $fulfilment);
    }

    /**
     * @return OrderOffer|null
     */
    public function getOffer(): ?OrderOffer
    {
        return $this->relation('offer', OrderOffer::class);
    }

    /**
     * @param OrderOffer|null $offer
     * @return $this
     */
    public function setOffer(OrderOffer $offer = null): static
    {
        return $this->set('offer', $offer);
    }

    /**
     * @return OrderProduct|null
     */
    public function getProduct(): ?OrderProduct
    {
        return $this->relation('product', OrderProduct::class);
    }

    /**
     * @param OrderProduct|null $product
     * @return $this
     */
    public function setProduct(OrderProduct $product = null): static
    {
        return $this->set('product', $product);
    }

    /**
     * Amount of the product being ordered.
     *
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->get('quantity');
    }

    /**
     * @param int|null $quantity
     * @return $this
     */
    public function setQuantity(int $quantity = null): static
    {
        return $this->set('quantity', $quantity);
    }

    /**
     * The selling price to the customer of a single unit including VAT.
     *
     * @return float|null
     */
    public function getUnitPrice(): ?float
    {
        return $this->get('unitPrice');
    }

    /**
     * @param float|null $unitPrice
     * @return $this
     */
    public function setUnitPrice(float $unitPrice = null): static
    {
        return $this->set('unitPrice', $unitPrice);
    }

    /**
     * The commission.
     *
     * @return int|null
     */
    public function getCommission(): ?int
    {
        return $this->get('commission');
    }

    /**
     * @param int|null $commission
     * @return $this
     */
    public function setCommission(int $commission = null): static
    {
        return $this->set('commission', $commission);
    }

}
