<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class TotalPeriod 
*/
class TotalPeriod extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = null;

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'TotalPeriod';

    
    /**
    
    * @return SearchTermsPeriod|null
    */
    public function getPeriod(): ?SearchTermsPeriod 
    {
        return $this->relation('period', SearchTermsPeriod::class);
    }

    /**
     * @param SearchTermsPeriod|null $period
     * @return $this
     */
    public function setPeriod(SearchTermsPeriod $period = null): static 
    {
        return $this->set('period', $period);
    }

    /**
    * The number of customer visits on the search page. 
*
    * @return int|null
    */
    public function getTotal(): ?int 
    {
        return $this->get('total');
    }

    /**
     * @param int|null $total
     * @return $this
     */
    public function setTotal(int $total = null): static 
    {
        return $this->set('total', $total);
    }

    /**
    
    * @return ResourceCollection<SearchTermsCountry>|null
    */
    public function getCountries(): ?ResourceCollection 
    {
        return $this->relation('countries', ResourceCollection::class,true);
    }

    /**
     * @param ResourceCollection<SearchTermsCountry>|null $countries
     * @return $this
     */
    public function setCountries(ResourceCollection $countries = null): static 
    {
        return $this->set('countries', $countries);
    }

}
