<?php

namespace JesseGall\BolComSDK\Resources;

class Stock extends Resource
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
    protected string $bolComResource = 'Stock';


    /**
     * The amount of stock available for the specified product present in the retailers warehouse. Note: this should not be the FBB stock! Defaults to 0.
     *
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->get('amount');
    }

    /**
     * @param int|null $amount
     * @return $this
     */
    public function setAmount(int $amount = null): static
    {
        return $this->set('amount', $amount);
    }

    /**
     * The amount of order items in stock minus handled order items and minus open order items. As compared to the stock you sent us. When this reaches 0, your offer will not be for sale on the shop.
     *
     * @return int|null
     */
    public function getCorrectedStock(): ?int
    {
        return $this->get('correctedStock');
    }

    /**
     * @param int|null $correctedStock
     * @return $this
     */
    public function setCorrectedStock(int $correctedStock = null): static
    {
        return $this->set('correctedStock', $correctedStock);
    }

    /**
     * Configures whether the retailer manages the stock levels or that bol.com should calculate the corrected stock based on actual open orders. In case the configuration is set to 'false', all open orders are used to calculate the corrected stock. In case the configuration is set to 'true', only orders that are placed after the last offer update are taken into account.
     *
     * @return bool|null
     */
    public function getManagedByRetailer(): ?bool
    {
        return $this->get('managedByRetailer');
    }

    /**
     * @param bool|null $managedByRetailer
     * @return $this
     */
    public function setManagedByRetailer(bool $managedByRetailer): static
    {
        return $this->set('managedByRetailer', $managedByRetailer);
    }

}
