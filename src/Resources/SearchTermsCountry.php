<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class SearchTermsCountry 
*/
class SearchTermsCountry extends Resource
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
    protected string $bolComResource = 'SearchTermsCountry';

    
    /**
    * Countries in which this offer is currently on sale in the webshop in ISO-3166-1 format. 
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
    * The number of customer visits on the search page. 
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
