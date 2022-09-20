<?php

namespace JesseGall\BolComSDK\Resources;

class CreatePickupTimeSlot extends Resource
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
    protected string $bolComResource = 'CreatePickupTimeSlot';


    /**
     * The selected start date and time for the replenishment pickup appointment. In ISO 8601 format.
     *
     * @return string|null
     */
    public function getFromDateTime(): ?string
    {
        return $this->get('fromDateTime');
    }

    /**
     * @param string|null $fromDateTime
     * @return $this
     */
    public function setFromDateTime(string $fromDateTime = null): static
    {
        return $this->set('fromDateTime', $fromDateTime);
    }

    /**
     * The selected end date and time for the replenishment pickup appointment. In ISO 8601 format.
     *
     * @return string|null
     */
    public function getUntilDateTime(): ?string
    {
        return $this->get('untilDateTime');
    }

    /**
     * @param string|null $untilDateTime
     * @return $this
     */
    public function setUntilDateTime(string $untilDateTime = null): static
    {
        return $this->set('untilDateTime', $untilDateTime);
    }

}