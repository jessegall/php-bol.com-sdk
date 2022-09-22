<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;
use JesseGall\BolComSDK\Resources\Contracts\Request;

/**
* Class ChangeTransportRequest 
*/
class ChangeTransportRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string
     */
    protected string $endpoint = '/retailer/transports/{transport-id}';

    /**
     * The available endpoint methods.
     *
     * @var array
     */
    protected array $endpointMethods = ['put'];

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
    protected string $bolComResource = 'ChangeTransportRequest';

    
    /**
    
    * @return string|null
    */
    public function getTransporterCode(): ?string 
    {
        return $this->get('transporterCode');
    }

    /**
     * @param string|null $transporterCode
     * @return $this
     */
    public function setTransporterCode(string $transporterCode = null): static 
    {
        return $this->set('transporterCode', $transporterCode);
    }

    /**
    * The track and trace code that is associated with this transport. 
*
    * @return string|null
    */
    public function getTrackAndTrace(): ?string 
    {
        return $this->get('trackAndTrace');
    }

    /**
     * @param string|null $trackAndTrace
     * @return $this
     */
    public function setTrackAndTrace(string $trackAndTrace = null): static 
    {
        return $this->set('trackAndTrace', $trackAndTrace);
    }

}
