<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Response;
use JesseGall\Resources\ResourceCollection;

/**
 * Class ShipmentsResponse
 */
class ShipmentsResponse extends Resource implements Response
{

    /**
     * The bol.com resource this class represents
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
