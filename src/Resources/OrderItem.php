<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class OrderItem 
*/
class OrderItem extends Resource
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
    protected string $bolComResource = 'OrderItem';

    
    /**
    * The id for the order item (1 order can have multiple order items). 
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

}
