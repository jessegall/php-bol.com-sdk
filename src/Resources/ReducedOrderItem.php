<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class ReducedOrderItem 
* An order item.
*/
class ReducedOrderItem extends Resource
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
    protected string $bolComResource = 'ReducedOrderItem';

    
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

}
