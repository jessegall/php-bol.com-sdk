<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Request;
use JesseGall\Resources\ResourceCollection;

/**
 * Class CreateProductContentSingleRequest
 */
class CreateProductContentSingleRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/content/products';

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
    protected string $bolComResource = 'CreateProductContentSingleRequest';


    /**
     * The language in which content is submitted.
     *
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->get('language');
    }

    /**
     * @param string|null $language
     * @return $this
     */
    public function setLanguage(string $language = null): static
    {
        return $this->set('language', $language);
    }

    /**
     * A list of attributes.
     *
     * @return ResourceCollection<Attribute>|null
     */
    public function getAttributes(): ?ResourceCollection
    {
        return $this->relation('attributes', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<Attribute>|null $attributes
     * @return $this
     */
    public function setAttributes(ResourceCollection $attributes = null): static
    {
        return $this->set('attributes', $attributes);
    }

    /**
     * @return ResourceCollection<Asset>|null
     */
    public function getAssets(): ?ResourceCollection
    {
        return $this->relation('assets', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<Asset>|null $assets
     * @return $this
     */
    public function setAssets(ResourceCollection $assets = null): static
    {
        return $this->set('assets', $assets);
    }

}
