<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class ReplenishmentsResponse extends Resource
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
    protected string $bolComResource = 'ReplenishmentsResponse';


    /**
     * @return ResourceCollection<ReducedReplenishment>|null
     */
    public function getReplenishments(): ?ResourceCollection
    {
        return $this->relation('replenishments', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<ReducedReplenishment>|null $replenishments
     * @return $this
     */
    public function setReplenishments(ResourceCollection $replenishments = null): static
    {
        return $this->set('replenishments', $replenishments);
    }

}
