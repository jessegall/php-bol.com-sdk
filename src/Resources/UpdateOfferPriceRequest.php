<?php

namespace JesseGall\BolComSDK\Resources;

class UpdateOfferPriceRequest extends Resource
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
    protected string $bolComResource = 'UpdateOfferPriceRequest';


    /**
     * @return Pricing|null
     */
    public function getPricing(): ?Pricing
    {
        return $this->relation('pricing', Pricing::class);
    }

    /**
     * @param Pricing|null $pricing
     * @return $this
     */
    public function setPricing(Pricing $pricing = null): static
    {
        return $this->set('pricing', $pricing);
    }

}
