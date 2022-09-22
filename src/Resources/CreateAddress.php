<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class CreateAddress 
*/
class CreateAddress extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = null;

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'CreateAddress';

    
    /**
    * The street name of the pickup address. 
*
    * @return string|null
    */
    public function getStreetName(): ?string 
    {
        return $this->get('streetName');
    }

    /**
     * @param string|null $streetName
     * @return $this
     */
    public function setStreetName(string $streetName = null): static 
    {
        return $this->set('streetName', $streetName);
    }

    /**
    * The house number of the pickup address. 
*
    * @return string|null
    */
    public function getHouseNumber(): ?string 
    {
        return $this->get('houseNumber');
    }

    /**
     * @param string|null $houseNumber
     * @return $this
     */
    public function setHouseNumber(string $houseNumber = null): static 
    {
        return $this->set('houseNumber', $houseNumber);
    }

    /**
    * The zip code in '1234AB' format for NL and '0000' for BE addresses. 
*
    * @return string|null
    */
    public function getZipCode(): ?string 
    {
        return $this->get('zipCode');
    }

    /**
     * @param string|null $zipCode
     * @return $this
     */
    public function setZipCode(string $zipCode = null): static 
    {
        return $this->set('zipCode', $zipCode);
    }

    /**
    * The extension of the house number. 
*
    * @return string|null
    */
    public function getHouseNumberExtension(): ?string 
    {
        return $this->get('houseNumberExtension');
    }

    /**
     * @param string|null $houseNumberExtension
     * @return $this
     */
    public function setHouseNumberExtension(string $houseNumberExtension = null): static 
    {
        return $this->set('houseNumberExtension', $houseNumberExtension);
    }

    /**
    * The city of the pickup address. 
*
    * @return string|null
    */
    public function getCity(): ?string 
    {
        return $this->get('city');
    }

    /**
     * @param string|null $city
     * @return $this
     */
    public function setCity(string $city = null): static 
    {
        return $this->set('city', $city);
    }

    /**
    * The ISO 3166-2 country code. 
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
    * Name of the person responsible for this replenishment. 
*
    * @return string|null
    */
    public function getAttentionOf(): ?string 
    {
        return $this->get('attentionOf');
    }

    /**
     * @param string|null $attentionOf
     * @return $this
     */
    public function setAttentionOf(string $attentionOf = null): static 
    {
        return $this->set('attentionOf', $attentionOf);
    }

}
