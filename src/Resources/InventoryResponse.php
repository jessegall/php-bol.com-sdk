<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Response;
use JesseGall\Resources\ResourceCollection;

/**
 * Class InventoryResponse
 */
class InventoryResponse extends Resource implements Response
{

    /**
     * The bol.com resource this class represents
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
