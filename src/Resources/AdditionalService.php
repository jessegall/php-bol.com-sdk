<?php

namespace JesseGall\BolComSDK\Resources;

class AdditionalService extends Resource
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
    protected string $bolComResource = 'AdditionalService';


    /**
     * An additional service type that the customer selected when purchasing this order item.
     *
     * @return string|null
     */
    public function getServiceType(): ?string
    {
        return $this->get('serviceType');
    }

    /**
     * @param string|null $serviceType
     * @return $this
     */
    public function setServiceType(string $serviceType = null): static
    {
        return $this->set('serviceType', $serviceType);
    }

}
