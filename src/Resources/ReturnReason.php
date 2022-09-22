<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class ReturnReason 
* The reason why the customer returned this product.
*/
class ReturnReason extends Resource
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
    protected string $bolComResource = 'ReturnReason';

    
    /**
    * The main reason describing why the customer returned this product. 
*
    * @return string|null
    */
    public function getMainReason(): ?string 
    {
        return $this->get('mainReason');
    }

    /**
     * @param string|null $mainReason
     * @return $this
     */
    public function setMainReason(string $mainReason = null): static 
    {
        return $this->set('mainReason', $mainReason);
    }

    /**
    * The sub reason describing why the customer returned this product in more detail. 
*
    * @return string|null
    */
    public function getDetailedReason(): ?string 
    {
        return $this->get('detailedReason');
    }

    /**
     * @param string|null $detailedReason
     * @return $this
     */
    public function setDetailedReason(string $detailedReason = null): static 
    {
        return $this->set('detailedReason', $detailedReason);
    }

    /**
    * Additional details from the customer as to why this item was returned. 
*
    * @return string|null
    */
    public function getCustomerComments(): ?string 
    {
        return $this->get('customerComments');
    }

    /**
     * @param string|null $customerComments
     * @return $this
     */
    public function setCustomerComments(string $customerComments = null): static 
    {
        return $this->set('customerComments', $customerComments);
    }

}
