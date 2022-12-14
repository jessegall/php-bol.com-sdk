<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class OrderOffer
 */
class OrderOffer extends Resource
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
    protected string $bolComResource = 'OrderOffer';


    /**
     * Unique identifier for an offer.
     *
     * @return string|null
     */
    public function getOfferId(): ?string
    {
        return $this->get('offerId');
    }

    /**
     * @param string|null $offerId
     * @return $this
     */
    public function setOfferId(string $offerId = null): static
    {
        return $this->set('offerId', $offerId);
    }

    /**
     * A user-defined reference tied to the offer upon creating the offer.
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

}
