<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Class Store
 */
class Store extends Resource
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
    protected string $bolComResource = 'Store';


    /**
     * The product title for the product associated with this offer.
     *
     * @return string|null
     */
    public function getProductTitle(): ?string
    {
        return $this->get('productTitle');
    }

    /**
     * @param string|null $productTitle
     * @return $this
     */
    public function setProductTitle(string $productTitle = null): static
    {
        return $this->set('productTitle', $productTitle);
    }

    /**
     * @return ResourceCollection<CountryCode>|null
     */
    public function getVisible(): ?ResourceCollection
    {
        return $this->relation('visible', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<CountryCode>|null $visible
     * @return $this
     */
    public function setVisible(ResourceCollection $visible = null): static
    {
        return $this->set('visible', $visible);
    }

}
