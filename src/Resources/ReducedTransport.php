<?php

namespace JesseGall\BolComSDK\Resources;

class ReducedTransport extends Resource
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
