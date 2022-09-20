<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class BulkCommissionResponse extends Resource
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
    protected string $bolComResource = 'BulkCommissionResponse';


    /**
     * @return ResourceCollection<Commission>|null
     */
    public function getCommissions(): ?ResourceCollection
    {
        return $this->relation('commissions', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<Commission>|null $commissions
     * @return $this
     */
    public function setCommissions(ResourceCollection $commissions = null): static
    {
        return $this->set('commissions', $commissions);
    }

}
