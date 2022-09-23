<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Class OfferInsights
 * Offer insights.
 */
class OfferInsights extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/insights/offer';

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
    protected string $bolComResource = 'OfferInsights';


    /**
     * @return ResourceCollection<OfferInsight>|null
     */
    public function getOfferInsights(): ?ResourceCollection
    {
        return $this->relation('offerInsights', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<OfferInsight>|null $offerInsights
     * @return $this
     */
    public function setOfferInsights(ResourceCollection $offerInsights = null): static
    {
        return $this->set('offerInsights', $offerInsights);
    }

}
