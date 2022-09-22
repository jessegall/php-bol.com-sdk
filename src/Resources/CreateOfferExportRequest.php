<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;
use JesseGall\BolComSDK\Resources\Contracts\Request;

/**
* Class CreateOfferExportRequest 
*/
class CreateOfferExportRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string
     */
    protected string $endpoint = '/retailer/offers/export';

    /**
     * The available endpoint methods.
     *
     * @var array
     */
    protected array $endpointMethods = ['post'];

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
    protected string $bolComResource = 'CreateOfferExportRequest';

    
    /**
    * The file format in which to return the export. 
*
    * @return string|null
    */
    public function getFormat(): ?string 
    {
        return $this->get('format');
    }

    /**
     * @param string|null $format
     * @return $this
     */
    public function setFormat(string $format = null): static 
    {
        return $this->set('format', $format);
    }

}
