<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;
use JesseGall\BolComSDK\Resources\Contracts\Request;

/**
* Class UpdateOfferPriceRequest 
*/
class UpdateOfferPriceRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string
     */
    protected string $endpoint = '/retailer/offers/{offer-id}/price';

    /**
     * The available endpoint methods.
     *
     * @var array
     */
    protected array $endpointMethods = ['put'];

   /**
     * The api response of the request.
     *
     * @var string|null
     */
    protected string|null $response = null;

    /**
     * The bol.com resource this class represents
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
