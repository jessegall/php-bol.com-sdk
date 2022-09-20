<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Promotions extends Resource
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
    protected string $bolComResource = 'Promotions';


    /**
     * @return ResourceCollection<ReducedPromotion>|null
     */
    public function getPromotions(): ?ResourceCollection
    {
        return $this->relation('promotions', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<ReducedPromotion>|null $promotions
     * @return $this
     */
    public function setPromotions(ResourceCollection $promotions = null): static
    {
        return $this->set('promotions', $promotions);
    }

}
