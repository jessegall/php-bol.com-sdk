<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Class OrderOrderItem
 * Order item details from an order.
 */
class OrderOrderItem extends Resource
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
    protected string $bolComResource = 'OrderOrderItem';


    /**
     * The id for the order item. One order can have multiple order items, but the list can only take one item.
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
     * Indicates whether the order was cancelled on request of the customer before the retailer has shipped it.
     *
     * @return bool|null
     */
    public function getCancellationRequest(): ?bool
    {
        return $this->get('cancellationRequest');
    }

    /**
     * @param bool|null $cancellationRequest
     * @return $this
     */
    public function setCancellationRequest(bool $cancellationRequest): static
    {
        return $this->set('cancellationRequest', $cancellationRequest);
    }

    /**
     * @return OrderFulfilment|null
     */
    public function getFulfilment(): ?OrderFulfilment
    {
        return $this->relation('fulfilment', OrderFulfilment::class);
    }

    /**
     * @param OrderFulfilment|null $fulfilment
     * @return $this
     */
    public function setFulfilment(OrderFulfilment $fulfilment = null): static
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
     * Amount of ordered products for this order item id.
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
     * Amount of shipped products for this order item id.
     *
     * @return int|null
     */
    public function getQuantityShipped(): ?int
    {
        return $this->get('quantityShipped');
    }

    /**
     * @param int|null $quantityShipped
     * @return $this
     */
    public function setQuantityShipped(int $quantityShipped = null): static
    {
        return $this->set('quantityShipped', $quantityShipped);
    }

    /**
     * Amount of cancelled products for this order item id.
     *
     * @return int|null
     */
    public function getQuantityCancelled(): ?int
    {
        return $this->get('quantityCancelled');
    }

    /**
     * @param int|null $quantityCancelled
     * @return $this
     */
    public function setQuantityCancelled(int $quantityCancelled = null): static
    {
        return $this->set('quantityCancelled', $quantityCancelled);
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
     * The commission for all quantities of this order item.
     *
     * @return float|null
     */
    public function getCommission(): ?float
    {
        return $this->get('commission');
    }

    /**
     * @param float|null $commission
     * @return $this
     */
    public function setCommission(float $commission = null): static
    {
        return $this->set('commission', $commission);
    }

    /**
     * @return ResourceCollection<AdditionalService>|null
     */
    public function getAdditionalServices(): ?ResourceCollection
    {
        return $this->relation('additionalServices', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<AdditionalService>|null $additionalServices
     * @return $this
     */
    public function setAdditionalServices(ResourceCollection $additionalServices = null): static
    {
        return $this->set('additionalServices', $additionalServices);
    }

}
