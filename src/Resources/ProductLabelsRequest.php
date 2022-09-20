<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class ProductLabelsRequest extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = 'endpoint';

    /**
     * The lightspeed resource this class represents
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
