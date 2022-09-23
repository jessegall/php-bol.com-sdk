<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Request;
use JesseGall\Resources\ResourceCollection;

/**
 * Class ProductLabelsRequest
 */
class ProductLabelsRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/replenishments/product-labels';

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
        return $this->relation('products', ResourceCollection::class, true);
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
