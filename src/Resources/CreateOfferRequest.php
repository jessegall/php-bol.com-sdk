<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;
use JesseGall\BolComSDK\Resources\Contracts\Request;

/**
* Class CreateOfferRequest 
*/
class CreateOfferRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string
     */
    protected string $endpoint = '/retailer/offers';

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
    protected string $bolComResource = 'CreateOfferRequest';

    
    /**
    * The EAN number associated with this product. Note: in case an ISBN is provided, the ISBN will be replaced with the actual EAN belonging to this ISBN. 
*
    * @return string|null
    */
    public function getEan(): ?string 
    {
        return $this->get('ean');
    }

    /**
     * @param string|null $ean
     * @return $this
     */
    public function setEan(string $ean = null): static 
    {
        return $this->set('ean', $ean);
    }

    /**
    
    * @return Condition|null
    */
    public function getCondition(): ?Condition 
    {
        return $this->relation('condition', Condition::class);
    }

    /**
     * @param Condition|null $condition
     * @return $this
     */
    public function setCondition(Condition $condition = null): static 
    {
        return $this->set('condition', $condition);
    }

    /**
    * A user-defined reference that helps you identify this particular offer when receiving data from us. This element can optionally be left empty and has a maximum amount of 20 characters. 
*
    * @return string|null
    */
    public function getReference(): ?string 
    {
        return $this->get('reference');
    }

    /**
     * @param string|null $reference
     * @return $this
     */
    public function setReference(string $reference = null): static 
    {
        return $this->set('reference', $reference);
    }

    /**
    * Indicates whether or not you want to put this offer for sale on the bol.com website. Defaults to false. 
*
    * @return bool|null
    */
    public function getOnHoldByRetailer(): ?bool 
    {
        return $this->get('onHoldByRetailer');
    }

    /**
     * @param bool|null $onHoldByRetailer
     * @return $this
     */
    public function setOnHoldByRetailer(bool $onHoldByRetailer): static 
    {
        return $this->set('onHoldByRetailer', $onHoldByRetailer);
    }

    /**
    * In case the item is not known to bol.com you can use this field to identify this particular product. Note: in case the product is known to bol.com, the unknown product title will not be stored. 
*
    * @return string|null
    */
    public function getUnknownProductTitle(): ?string 
    {
        return $this->get('unknownProductTitle');
    }

    /**
     * @param string|null $unknownProductTitle
     * @return $this
     */
    public function setUnknownProductTitle(string $unknownProductTitle = null): static 
    {
        return $this->set('unknownProductTitle', $unknownProductTitle);
    }

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

    /**
    
    * @return StockCreate|null
    */
    public function getStock(): ?StockCreate 
    {
        return $this->relation('stock', StockCreate::class);
    }

    /**
     * @param StockCreate|null $stock
     * @return $this
     */
    public function setStock(StockCreate $stock = null): static 
    {
        return $this->set('stock', $stock);
    }

    /**
    
    * @return Fulfilment|null
    */
    public function getFulfilment(): ?Fulfilment 
    {
        return $this->relation('fulfilment', Fulfilment::class);
    }

    /**
     * @param Fulfilment|null $fulfilment
     * @return $this
     */
    public function setFulfilment(Fulfilment $fulfilment = null): static 
    {
        return $this->set('fulfilment', $fulfilment);
    }

}
