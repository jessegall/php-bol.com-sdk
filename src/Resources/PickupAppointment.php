<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class PickupAppointment
 */
class PickupAppointment extends Resource
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
    protected string $bolComResource = 'PickupAppointment';


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

    /**
     * @return Address|null
     */
    public function getAddress(): ?Address
    {
        return $this->relation('address', Address::class);
    }

    /**
     * @param Address|null $address
     * @return $this
     */
    public function setAddress(Address $address = null): static
    {
        return $this->set('address', $address);
    }

    /**
     * @return ReplenishmentPickupTimeSlot|null
     */
    public function getPickupTimeSlot(): ?ReplenishmentPickupTimeSlot
    {
        return $this->relation('pickupTimeSlot', ReplenishmentPickupTimeSlot::class);
    }

    /**
     * @param ReplenishmentPickupTimeSlot|null $pickupTimeSlot
     * @return $this
     */
    public function setPickupTimeSlot(ReplenishmentPickupTimeSlot $pickupTimeSlot = null): static
    {
        return $this->set('pickupTimeSlot', $pickupTimeSlot);
    }

    /**
     * The date and time in ISO 8601 format when this replenishment was picked up by the transporter.
     *
     * @return string|null
     */
    public function getPickupDateTime(): ?string
    {
        return $this->get('pickupDateTime');
    }

    /**
     * @param string|null $pickupDateTime
     * @return $this
     */
    public function setPickupDateTime(string $pickupDateTime = null): static
    {
        return $this->set('pickupDateTime', $pickupDateTime);
    }

    /**
     * In case of a pickup cancellation this field indicates the reason for cancelling this pickup.
     *
     * @return string|null
     */
    public function getCancellationReason(): ?string
    {
        return $this->get('cancellationReason');
    }

    /**
     * @param string|null $cancellationReason
     * @return $this
     */
    public function setCancellationReason(string $cancellationReason = null): static
    {
        return $this->set('cancellationReason', $cancellationReason);
    }

}
