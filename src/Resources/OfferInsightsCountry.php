<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class OfferInsightsCountry
 */
class OfferInsightsCountry extends Resource
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
    protected string $bolComResource = 'OfferInsightsCountry';


    /**
     * Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format.
     *
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->get('countryCode');
    }

    /**
     * @param string|null $countryCode
     * @return $this
     */
    public function setCountryCode(string $countryCode = null): static
    {
        return $this->set('countryCode', $countryCode);
    }

    /**
     * The total value of offer insight.
     *
     * @return int|null
     */
    public function getValue(): ?int
    {
        return $this->get('value');
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function setValue(int $value = null): static
    {
        return $this->set('value', $value);
    }

}
