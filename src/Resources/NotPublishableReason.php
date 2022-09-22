<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class NotPublishableReason 
*/
class NotPublishableReason extends Resource
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
    protected string $bolComResource = 'NotPublishableReason';

    
    /**
    * Error code signalling that the offer is invalid. 
*
    * @return string|null
    */
    public function getCode(): ?string 
    {
        return $this->get('code');
    }

    /**
     * @param string|null $code
     * @return $this
     */
    public function setCode(string $code = null): static 
    {
        return $this->set('code', $code);
    }

    /**
    * Error message describing the reason the offer is invalid. 
*
    * @return string|null
    */
    public function getDescription(): ?string 
    {
        return $this->get('description');
    }

    /**
     * @param string|null $description
     * @return $this
     */
    public function setDescription(string $description = null): static 
    {
        return $this->set('description', $description);
    }

}
