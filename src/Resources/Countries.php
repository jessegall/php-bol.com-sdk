<?php

namespace JesseGall\BolComSDK\Resources;

class Countries extends Resource
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
    protected string $bolComResource = 'Countries';


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
     * Minimum number of estimated sales expectations on the bol.com platform.
     *
     * @return float|null
     */
    public function getMinimum(): ?float
    {
        return $this->get('minimum');
    }

    /**
     * @param float|null $minimum
     * @return $this
     */
    public function setMinimum(float $minimum = null): static
    {
        return $this->set('minimum', $minimum);
    }

    /**
     * Maximum number of estimated sales expectations on the bol.com platform.
     *
     * @return float|null
     */
    public function getMaximum(): ?float
    {
        return $this->get('maximum');
    }

    /**
     * @param float|null $maximum
     * @return $this
     */
    public function setMaximum(float $maximum = null): static
    {
        return $this->set('maximum', $maximum);
    }

}
