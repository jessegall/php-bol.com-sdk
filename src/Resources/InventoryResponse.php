<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class InventoryResponse extends Resource
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
    protected string $bolComResource = 'InventoryResponse';


    /**
     * @return ResourceCollection<Inventory>|null
     */
    public function getInventory(): ?ResourceCollection
    {
        return $this->relation('inventory', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<Inventory>|null $inventory
     * @return $this
     */
    public function setInventory(ResourceCollection $inventory = null): static
    {
        return $this->set('inventory', $inventory);
    }

}
