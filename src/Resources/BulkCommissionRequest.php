<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Request;
use JesseGall\Resources\ResourceCollection;

/**
 * Class BulkCommissionRequest
 */
class BulkCommissionRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string
     */
    protected string $endpoint = '/retailer/commission';

    /**
     * The endpoint method.
     *
     * @var string
     */
    protected string $endpointMethod = 'post';

    /**
     * The bol.com resource this class represents
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
