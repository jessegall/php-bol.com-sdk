<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class Return 
*/
class Return extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/returns/{return-id}';

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'Return';

    
    /**
    * Unique identifier for a return. 
*
    * @return string|null
    */
    public function getReturnId(): ?string 
    {
        return $this->get('returnId');
    }

    /**
     * @param string|null $returnId
     * @return $this
     */
    public function setReturnId(string $returnId = null): static 
    {
        return $this->set('returnId', $returnId);
    }

    /**
    * The date and time in ISO 8601 format when this return was registered. 
*
    * @return string|null
    */
    public function getRegistrationDateTime(): ?string 
    {
        return $this->get('registrationDateTime');
    }

    /**
     * @param string|null $registrationDateTime
     * @return $this
     */
    public function setRegistrationDateTime(string $registrationDateTime = null): static 
    {
        return $this->set('registrationDateTime', $registrationDateTime);
    }

    /**
    * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). 
*
    * @return string|null
    */
    public function getFulfilmentMethod(): ?string 
    {
        return $this->get('fulfilmentMethod');
    }

    /**
     * @param string|null $fulfilmentMethod
     * @return $this
     */
    public function setFulfilmentMethod(string $fulfilmentMethod = null): static 
    {
        return $this->set('fulfilmentMethod', $fulfilmentMethod);
    }

    /**
    
    * @return ResourceCollection<ReturnItem>|null
    */
    public function getReturnItems(): ?ResourceCollection 
    {
        return $this->relation('returnItems', ResourceCollection::class,true);
    }

    /**
     * @param ResourceCollection<ReturnItem>|null $returnItems
     * @return $this
     */
    public function setReturnItems(ResourceCollection $returnItems = null): static 
    {
        return $this->set('returnItems', $returnItems);
    }

}
