<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;
use JesseGall\BolComSDK\Resources\Contracts\Request;

/**
* Class PickupTimeSlotsRequest 
*/
class PickupTimeSlotsRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string
     */
    protected string $endpoint = '/retailer/replenishments/pickup-time-slots';

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
    protected string|null $response = PickupTimeSlotsResponse::class;

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'PickupTimeSlotsRequest';

    
    /**
    
    * @return PickupTimeSlotsAddress|null
    */
    public function getAddress(): ?PickupTimeSlotsAddress 
    {
        return $this->relation('address', PickupTimeSlotsAddress::class);
    }

    /**
     * @param PickupTimeSlotsAddress|null $address
     * @return $this
     */
    public function setAddress(PickupTimeSlotsAddress $address = null): static 
    {
        return $this->set('address', $address);
    }

    /**
    * The number of load carriers in this shipment. 
*
    * @return int|null
    */
    public function getNumberOfLoadCarriers(): ?int 
    {
        return $this->get('numberOfLoadCarriers');
    }

    /**
     * @param int|null $numberOfLoadCarriers
     * @return $this
     */
    public function setNumberOfLoadCarriers(int $numberOfLoadCarriers = null): static 
    {
        return $this->set('numberOfLoadCarriers', $numberOfLoadCarriers);
    }

}
