<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Class Pricing
 */
class Pricing extends Resource
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
    protected string $bolComResource = 'Pricing';


    /**
     * A set of prices (containing a quantity and selling price) that apply to this offer.
     *
     * @return ResourceCollection<BundlePrice>|null
     */
    public function getBundlePrices(): ?ResourceCollection
    {
        return $this->relation('bundlePrices', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<BundlePrice>|null $bundlePrices
     * @return $this
     */
    public function setBundlePrices(ResourceCollection $bundlePrices = null): static
    {
        return $this->set('bundlePrices', $bundlePrices);
    }

}
