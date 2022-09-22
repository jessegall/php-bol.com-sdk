<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class CountryCode 
*/
class CountryCode extends Resource
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
    protected string $bolComResource = 'CountryCode';

    
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

}
