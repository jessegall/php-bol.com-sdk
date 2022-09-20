<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class PickupTimeSlotsResponse extends Resource
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
    protected string $bolComResource = 'PickupTimeSlotsResponse';


    /**
     * @return ResourceCollection<PickupTimeSlot>|null
     */
    public function getTimeSlots(): ?ResourceCollection
    {
        return $this->relation('timeSlots', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<PickupTimeSlot>|null $timeSlots
     * @return $this
     */
    public function setTimeSlots(ResourceCollection $timeSlots = null): static
    {
        return $this->set('timeSlots', $timeSlots);
    }

}
