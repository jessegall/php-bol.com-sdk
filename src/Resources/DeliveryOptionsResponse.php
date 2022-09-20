<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class DeliveryOptionsResponse extends Resource
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
    protected string $bolComResource = 'DeliveryOptionsResponse';


    /**
     * @return ResourceCollection<DeliveryOption>|null
     */
    public function getDeliveryOptions(): ?ResourceCollection
    {
        return $this->relation('deliveryOptions', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<DeliveryOption>|null $deliveryOptions
     * @return $this
     */
    public function setDeliveryOptions(ResourceCollection $deliveryOptions = null): static
    {
        return $this->set('deliveryOptions', $deliveryOptions);
    }

}
