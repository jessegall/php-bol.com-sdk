<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class CreatePickupAppointment
 */
class CreatePickupAppointment extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = null;

    /**
     * The unique identifier for the resource.
     *
     * @var string|null
     */
    protected string|null $identifier = null;

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'CreatePickupAppointment';


    /**
     * @return CreateAddress|null
     */
    public function getAddress(): ?CreateAddress
    {
        return $this->relation('address', CreateAddress::class);
    }

    /**
     * @param CreateAddress|null $address
     * @return $this
     */
    public function setAddress(CreateAddress $address = null): static
    {
        return $this->set('address', $address);
    }

    /**
     * @return CreatePickupTimeSlot|null
     */
    public function getPickupTimeSlot(): ?CreatePickupTimeSlot
    {
        return $this->relation('pickupTimeSlot', CreatePickupTimeSlot::class);
    }

    /**
     * @param CreatePickupTimeSlot|null $pickupTimeSlot
     * @return $this
     */
    public function setPickupTimeSlot(CreatePickupTimeSlot $pickupTimeSlot = null): static
    {
        return $this->set('pickupTimeSlot', $pickupTimeSlot);
    }

    /**
     * A comment to the transporter regarding the pickup appointment.
     *
     * @return string|null
     */
    public function getCommentToTransporter(): ?string
    {
        return $this->get('commentToTransporter');
    }

    /**
     * @param string|null $commentToTransporter
     * @return $this
     */
    public function setCommentToTransporter(string $commentToTransporter = null): static
    {
        return $this->set('commentToTransporter', $commentToTransporter);
    }

}
