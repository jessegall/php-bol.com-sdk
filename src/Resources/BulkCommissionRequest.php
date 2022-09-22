<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;
use JesseGall\BolComSDK\Resources\Contracts\Request;

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
     * The available endpoint methods.
     *
     * @var array
     */
    protected array $endpointMethods = ['post'];

   /**
     * The api response of the request.
     *
     * @var string|null
     */
    protected string|null $response = BulkCommissionResponse::class;

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
        return $this->relation('commissionQueries', ResourceCollection::class,true);
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
