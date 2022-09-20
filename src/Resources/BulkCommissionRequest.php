<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class BulkCommissionRequest extends Resource
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
    protected string $bolComResource = 'BulkCommissionRequest';


    /**
     * @return ResourceCollection<BulkCommissionQuery>|null
     */
    public function getCommissionQueries(): ?ResourceCollection
    {
        return $this->relation('commissionQueries', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<BulkCommissionQuery>|null $commissionQueries
     * @return $this
     */
    public function setCommissionQueries(ResourceCollection $commissionQueries = null): static
    {
        return $this->set('commissionQueries', $commissionQueries);
    }

}
