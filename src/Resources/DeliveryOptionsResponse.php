<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Response;
use JesseGall\Resources\ResourceCollection;

/**
 * Class DeliveryOptionsResponse
 * The possible delivery options based on a shippable configuration
 */
class DeliveryOptionsResponse extends Resource implements Response
{

    /**
     * The bol.com resource this class represents
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
