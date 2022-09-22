<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;
use JesseGall\BolComSDK\Resources\Contracts\Response;

/**
* Class PickupTimeSlotsResponse 
*/
class PickupTimeSlotsResponse extends Resource implements Response
{

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'PickupTimeSlotsResponse';

    
    /**
    
    * @return ResourceCollection<PickupTimeSlot>|null
    */
    public function getTimeSlots(): ?ResourceCollection 
    {
        return $this->relation('timeSlots', ResourceCollection::class,true);
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
