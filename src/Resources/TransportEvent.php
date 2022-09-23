<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class TransportEvent
 */
class TransportEvent extends Resource
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
    protected string $bolComResource = 'TransportEvent';


    /**
     * The transport event code indicates the location of the parcel within the distribution process.
     *
     * @return string|null
     */
    public function getEventCode(): ?string
    {
        return $this->get('eventCode');
    }

    /**
     * @param string|null $eventCode
     * @return $this
     */
    public function setEventCode(string $eventCode = null): static
    {
        return $this->set('eventCode', $eventCode);
    }

    /**
     * The date time of the transport event.
     *
     * @return string|null
     */
    public function getEventDateTime(): ?string
    {
        return $this->get('eventDateTime');
    }

    /**
     * @param string|null $eventDateTime
     * @return $this
     */
    public function setEventDateTime(string $eventDateTime = null): static
    {
        return $this->set('eventDateTime', $eventDateTime);
    }

}
