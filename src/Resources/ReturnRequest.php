<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;
use JesseGall\BolComSDK\Resources\Contracts\Request;

/**
* Class ReturnRequest 
*/
class ReturnRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string
     */
    protected string $endpoint = '/retailer/returns/{rma-id}';

    /**
     * The endpoint method.
     *
     * @var string
     */
    protected string $endpointMethod = 'put';

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'ReturnRequest';

    
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

}
