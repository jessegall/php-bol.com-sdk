<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class Periods 
*/
class Periods extends Resource
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
    protected string $bolComResource = 'Periods';

    
    /**
    
    * @return OfferInsightsPeriod|null
    */
    public function getPeriod(): ?OfferInsightsPeriod 
    {
        return $this->relation('period', OfferInsightsPeriod::class);
    }

    /**
     * @param OfferInsightsPeriod|null $period
     * @return $this
     */
    public function setPeriod(OfferInsightsPeriod $period = null): static 
    {
        return $this->set('period', $period);
    }

    /**
    * Total number of customer visits on the product page when the offer had the buy box over the requested period (excluding the current day). 
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
    
    * @return ResourceCollection<OfferInsightsCountry>|null
    */
    public function getCountries(): ?ResourceCollection 
    {
        return $this->relation('countries', ResourceCollection::class,true);
    }

    /**
     * @param ResourceCollection<OfferInsightsCountry>|null $countries
     * @return $this
     */
    public function setCountries(ResourceCollection $countries = null): static 
    {
        return $this->set('countries', $countries);
    }

}
