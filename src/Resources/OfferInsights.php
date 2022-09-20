<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class OfferInsights extends Resource
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