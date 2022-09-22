<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class Product 
* A single product.
*/
class Product extends Resource
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
    protected string $bolComResource = 'Product';

    
    /**
    * The EAN number associated with this product. 
*
    * @return string|null
    */
    public function getEan(): ?string 
    {
        return $this->get('ean');
    }

    /**
     * @param string|null $ean
     * @return $this
     */
    public function setEan(string $ean = null): static 
    {
        return $this->set('ean', $ean);
    }

    /**
    
    * @return ResourceCollection<RelevanceScore>|null
    */
    public function getRelevanceScores(): ?ResourceCollection 
    {
        return $this->relation('relevanceScores', ResourceCollection::class,true);
    }

    /**
     * @param ResourceCollection<RelevanceScore>|null $relevanceScores
     * @return $this
     */
    public function setRelevanceScores(ResourceCollection $relevanceScores = null): static 
    {
        return $this->set('relevanceScores', $relevanceScores);
    }

    /**
    * The maximum price a product can have in order to be part of the promotion. 
*
    * @return float|null
    */
    public function getMaximumPrice(): ?float 
    {
        return $this->get('maximumPrice');
    }

    /**
     * @param float|null $maximumPrice
     * @return $this
     */
    public function setMaximumPrice(float $maximumPrice = null): static 
    {
        return $this->set('maximumPrice', $maximumPrice);
    }

}
