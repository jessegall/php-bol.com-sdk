<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Request;

/**
 * Class UpdateOfferRequest
 */
class UpdateOfferRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/offers';

    /**
     * The endpoint method.
     *
     * @var string
     */
    protected string $endpointMethod = 'put';

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'UpdateOfferRequest';


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
