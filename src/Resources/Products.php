<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class Products 
* Container for multiple products.
*/
class Products extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/promotions/{promotion-id}/products';

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'Products';

    
    /**
    
    * @return ResourceCollection<Product>|null
    */
    public function getProducts(): ?ResourceCollection 
    {
        return $this->relation('products', ResourceCollection::class,true);
    }

    /**
     * @param ResourceCollection<Product>|null $products
     * @return $this
     */
    public function setProducts(ResourceCollection $products = null): static 
    {
        return $this->set('products', $products);
    }

}
