<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Class Promotions
 * Container for multiple promotions.
 */
class Promotions extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/promotions';

    /**
     * The bol.com resource this class represents
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
