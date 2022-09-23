<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Class SearchTerm
 */
class SearchTerm extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = null;

    /**
     * The unique identifier for the resource.
     *
     * @var string|null
     */
    protected string|null $identifier = null;

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'SearchTerm';


    /**
     * The search term for which you requested the search volume.
     *
     * @return string|null
     */
    public function getSearchTerm(): ?string
    {
        return $this->get('searchTerm');
    }

    /**
     * @param string|null $searchTerm
     * @return $this
     */
    public function setSearchTerm(string $searchTerm = null): static
    {
        return $this->set('searchTerm', $searchTerm);
    }

    /**
     * Interpretation of the data that applies to this measurement.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->get('type');
    }

    /**
     * @param string|null $type
     * @return $this
     */
    public function setType(string $type = null): static
    {
        return $this->set('type', $type);
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
        return $this->relation('countries', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<SearchTermsCountry>|null $countries
     * @return $this
     */
    public function setCountries(ResourceCollection $countries = null): static
    {
        return $this->set('countries', $countries);
    }

    /**
     * @return ResourceCollection<TotalPeriod>|null
     */
    public function getPeriods(): ?ResourceCollection
    {
        return $this->relation('periods', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<TotalPeriod>|null $periods
     * @return $this
     */
    public function setPeriods(ResourceCollection $periods = null): static
    {
        return $this->set('periods', $periods);
    }

    /**
     * @return ResourceCollection<RelatedSearchTerm>|null
     */
    public function getRelatedSearchTerms(): ?ResourceCollection
    {
        return $this->relation('relatedSearchTerms', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<RelatedSearchTerm>|null $relatedSearchTerms
     * @return $this
     */
    public function setRelatedSearchTerms(ResourceCollection $relatedSearchTerms = null): static
    {
        return $this->set('relatedSearchTerms', $relatedSearchTerms);
    }

}
