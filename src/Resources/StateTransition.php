<?php

namespace JesseGall\BolComSDK\Resources;

class StateTransition extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = 'endpoint';

    /**
     * The lightspeed resource this class represents
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
