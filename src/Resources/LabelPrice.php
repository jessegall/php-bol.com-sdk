<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class LabelPrice 
*/
class LabelPrice extends Resource
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
    protected string $bolComResource = 'LabelPrice';

    
    /**
    * The price that is charged for this delivery option, excluding VAT. 
*
    * @return float|null
    */
    public function getTotalPrice(): ?float 
    {
        return $this->get('totalPrice');
    }

    /**
     * @param float|null $totalPrice
     * @return $this
     */
    public function setTotalPrice(float $totalPrice = null): static 
    {
        return $this->set('totalPrice', $totalPrice);
    }

}
