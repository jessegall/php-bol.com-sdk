<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Request;

/**
 * Class PickupTimeSlotsRequest
 */
class PickupTimeSlotsRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/replenishments/pickup-time-slots';

    /**
     * The endpoint method.
     *
     * @var string
     */
    protected string $endpointMethod = 'post';

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
