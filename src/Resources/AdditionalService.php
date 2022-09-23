<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class AdditionalService
 */
class AdditionalService extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = null;

    /**
     * The unique identifier for the resource.
     *
     * @var string|null
     */
    protected string|null $identifier = null;

    /**
     * The bol.com resource this class represents
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
