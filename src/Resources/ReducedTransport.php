<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class ReducedTransport 
*/
class ReducedTransport extends Resource
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
    protected string $bolComResource = 'ReducedTransport';

    
    /**
    * The transport id. 
*
    * @return string|null
    */
    public function getTransportId(): ?string 
    {
        return $this->get('transportId');
    }

    /**
     * @param string|null $transportId
     * @return $this
     */
    public function setTransportId(string $transportId = null): static 
    {
        return $this->set('transportId', $transportId);
    }

}
