<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;
use JesseGall\BolComSDK\Resources\Contracts\Request;

/**
* Class ProductLabelsRequest 
*/
class ProductLabelsRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string
     */
    protected string $endpoint = '/retailer/replenishments/product-labels';

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
    protected string|null $response = null;

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'ProductLabelsRequest';

    
    /**
    * The printer format to create labels for. 
*
    * @return string|null
    */
    public function getLabelFormat(): ?string 
    {
        return $this->get('labelFormat');
    }

    /**
     * @param string|null $labelFormat
     * @return $this
     */
    public function setLabelFormat(string $labelFormat = null): static 
    {
        return $this->set('labelFormat', $labelFormat);
    }

    /**
    
    * @return ResourceCollection<ProductLabelsProduct>|null
    */
    public function getProducts(): ?ResourceCollection 
    {
        return $this->relation('products', ResourceCollection::class,true);
    }

    /**
     * @param ResourceCollection<ProductLabelsProduct>|null $products
     * @return $this
     */
    public function setProducts(ResourceCollection $products = null): static 
    {
        return $this->set('products', $products);
    }

}
