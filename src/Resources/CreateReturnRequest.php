<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;
use JesseGall\BolComSDK\Resources\Contracts\Request;

/**
* Class CreateReturnRequest 
*/
class CreateReturnRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string
     */
    protected string $endpoint = '/retailer/returns';

    /**
     * The endpoint method.
     *
     * @var string
     */
    protected string $endpointMethod = 'post';

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'CreateReturnRequest';

    
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
    * The quantity of items returned. 
*
    * @return int|null
    */
    public function getQuantityReturned(): ?int 
    {
        return $this->get('quantityReturned');
    }

    /**
     * @param int|null $quantityReturned
     * @return $this
     */
    public function setQuantityReturned(int $quantityReturned = null): static 
    {
        return $this->set('quantityReturned', $quantityReturned);
    }

    /**
    * The handling result requested by the retailer. 
*
    * @return string|null
    */
    public function getHandlingResult(): ?string 
    {
        return $this->get('handlingResult');
    }

    /**
     * @param string|null $handlingResult
     * @return $this
     */
    public function setHandlingResult(string $handlingResult = null): static 
    {
        return $this->set('handlingResult', $handlingResult);
    }

}
