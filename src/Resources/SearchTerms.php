<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class SearchTerms
 */
class SearchTerms extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/insights/search-terms';

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'SearchTerms';


    /**
     * @return SearchTerm|null
     */
    public function getSearchTerms(): ?SearchTerm
    {
        return $this->relation('searchTerms', SearchTerm::class);
    }

    /**
     * @param SearchTerm|null $searchTerms
     * @return $this
     */
    public function setSearchTerms(SearchTerm $searchTerms = null): static
    {
        return $this->set('searchTerms', $searchTerms);
    }

}
