<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class TransportInstruction 
*/
class TransportInstruction extends Resource
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
    protected string $bolComResource = 'TransportInstruction';

    
    /**
    * Specify the transporter that will carry out the shipment. 
*
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
