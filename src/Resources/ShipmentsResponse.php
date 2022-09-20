<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class ShipmentsResponse extends Resource
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
    protected string $bolComResource = 'ShipmentsResponse';


    /**
     * @return ResourceCollection<ReducedShipment>|null
     */
    public function getShipments(): ?ResourceCollection
    {
        return $this->relation('shipments', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<ReducedShipment>|null $shipments
     * @return $this
     */
    public function setShipments(ResourceCollection $shipments = null): static
    {
        return $this->set('shipments', $shipments);
    }

}
