<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class RelatedSearchTerm
 */
class RelatedSearchTerm extends Resource
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
    protected string $bolComResource = 'RelatedSearchTerm';


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

}
