<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class DeliveryInformation 
*/
class DeliveryInformation extends Resource
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
    protected string $bolComResource = 'DeliveryInformation';

    
    /**
    * The expected delivery date of the shipment at the bol.com warehouse in ISO 8601 format. 
*
    * @return string|null
    */
    public function getExpectedDeliveryDate(): ?string 
    {
        return $this->get('expectedDeliveryDate');
    }

    /**
     * @param string|null $expectedDeliveryDate
     * @return $this
     */
    public function setExpectedDeliveryDate(string $expectedDeliveryDate = null): static 
    {
        return $this->set('expectedDeliveryDate', $expectedDeliveryDate);
    }

    /**
    * The transporter that will pickup this replenishment. 
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
    
    * @return DestinationWarehouse|null
    */
    public function getDestinationWarehouse(): ?DestinationWarehouse 
    {
        return $this->relation('destinationWarehouse', DestinationWarehouse::class);
    }

    /**
     * @param DestinationWarehouse|null $destinationWarehouse
     * @return $this
     */
    public function setDestinationWarehouse(DestinationWarehouse $destinationWarehouse = null): static 
    {
        return $this->set('destinationWarehouse', $destinationWarehouse);
    }

}
