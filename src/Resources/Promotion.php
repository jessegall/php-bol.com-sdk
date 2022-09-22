<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class Promotion 
* A single promotion.
*/
class Promotion extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/promotions/{promotion-id}';

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'Promotion';

    
    /**
    * The identifier of the promotion. 
*
    * @return string|null
    */
    public function getPromotionId(): ?string 
    {
        return $this->get('promotionId');
    }

    /**
     * @param string|null $promotionId
     * @return $this
     */
    public function setPromotionId(string $promotionId = null): static 
    {
        return $this->set('promotionId', $promotionId);
    }

    /**
    * The title of the promotion. 
*
    * @return string|null
    */
    public function getTitle(): ?string 
    {
        return $this->get('title');
    }

    /**
     * @param string|null $title
     * @return $this
     */
    public function setTitle(string $title = null): static 
    {
        return $this->set('title', $title);
    }

    /**
    * The starting date and time of the promotion. 
*
    * @return string|null
    */
    public function getStartDateTime(): ?string 
    {
        return $this->get('startDateTime');
    }

    /**
     * @param string|null $startDateTime
     * @return $this
     */
    public function setStartDateTime(string $startDateTime = null): static 
    {
        return $this->set('startDateTime', $startDateTime);
    }

    /**
    * The ending date and time of the promotion. 
*
    * @return string|null
    */
    public function getEndDateTime(): ?string 
    {
        return $this->get('endDateTime');
    }

    /**
     * @param string|null $endDateTime
     * @return $this
     */
    public function setEndDateTime(string $endDateTime = null): static 
    {
        return $this->set('endDateTime', $endDateTime);
    }

    /**
    
    * @return ResourceCollection<CountryCode>|null
    */
    public function getCountries(): ?ResourceCollection 
    {
        return $this->relation('countries', ResourceCollection::class,true);
    }

    /**
     * @param ResourceCollection<CountryCode>|null $countries
     * @return $this
     */
    public function setCountries(ResourceCollection $countries = null): static 
    {
        return $this->set('countries', $countries);
    }

    /**
    * The type of the promotion. 
*
    * @return string|null
    */
    public function getPromotionType(): ?string 
    {
        return $this->get('promotionType');
    }

    /**
     * @param string|null $promotionType
     * @return $this
     */
    public function setPromotionType(string $promotionType = null): static 
    {
        return $this->set('promotionType', $promotionType);
    }

    /**
    * Indicates whether the promotion is retailer specific or open to the platform. 
*
    * @return bool|null
    */
    public function getRetailerSpecificPromotion(): ?bool 
    {
        return $this->get('retailerSpecificPromotion');
    }

    /**
     * @param bool|null $retailerSpecificPromotion
     * @return $this
     */
    public function setRetailerSpecificPromotion(bool $retailerSpecificPromotion): static 
    {
        return $this->set('retailerSpecificPromotion', $retailerSpecificPromotion);
    }

    /**
    
    * @return Campaign|null
    */
    public function getCampaign(): ?Campaign 
    {
        return $this->relation('campaign', Campaign::class);
    }

    /**
     * @param Campaign|null $campaign
     * @return $this
     */
    public function setCampaign(Campaign $campaign = null): static 
    {
        return $this->set('campaign', $campaign);
    }

}
