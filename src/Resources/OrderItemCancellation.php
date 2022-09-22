<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class OrderItemCancellation 
*/
class OrderItemCancellation extends Resource
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
    protected string $bolComResource = 'OrderItemCancellation';

    
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
    * The code representing the reason for cancellation of this item. 
*
    * @return string|null
    */
    public function getReasonCode(): ?string 
    {
        return $this->get('reasonCode');
    }

    /**
     * @param string|null $reasonCode
     * @return $this
     */
    public function setReasonCode(string $reasonCode = null): static 
    {
        return $this->set('reasonCode', $reasonCode);
    }

}
