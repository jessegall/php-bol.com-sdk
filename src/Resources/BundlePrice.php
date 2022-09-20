<?php

namespace JesseGall\BolComSDK\Resources;

class BundlePrice extends Resource
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
    protected string $bolComResource = 'BundlePrice';


    /**
     * The minimum quantity a customer must order in order to receive discount. The element with value 1 must at least be present. In case of using more elements, the respective quantities must be in increasing order.
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
     * The price per single unit including VAT in case the customer orders at least the quantity provided. When using more than 1 price, the respective prices must be in decreasing order using 2 decimal precision and dot separated.
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

}
