<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class StateTransition 
*/
class StateTransition extends Resource
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
    protected string $bolComResource = 'StateTransition';

    
    /**
    * Indicates the state of this replenishment order. 
*
    * @return string|null
    */
    public function getState(): ?string 
    {
        return $this->get('state');
    }

    /**
     * @param string|null $state
     * @return $this
     */
    public function setState(string $state = null): static 
    {
        return $this->set('state', $state);
    }

    /**
    * The date and time in ISO 8601 format that indicates when this states was updated for this replenishment. 
*
    * @return string|null
    */
    public function getStateDateTime(): ?string 
    {
        return $this->get('stateDateTime');
    }

    /**
     * @param string|null $stateDateTime
     * @return $this
     */
    public function setStateDateTime(string $stateDateTime = null): static 
    {
        return $this->set('stateDateTime', $stateDateTime);
    }

}
