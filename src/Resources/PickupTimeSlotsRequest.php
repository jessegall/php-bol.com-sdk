<?php

namespace JesseGall\BolComSDK\Resources;

class PickupTimeSlotsRequest extends Resource
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
