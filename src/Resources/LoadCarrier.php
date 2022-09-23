<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class LoadCarrier
 */
class LoadCarrier extends Resource
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
    protected string $bolComResource = 'LoadCarrier';


    /**
     * The Serial Shipping Container Code (SSCC) for this load carrier.
     *
     * @return string|null
     */
    public function getSscc(): ?string
    {
        return $this->get('sscc');
    }

    /**
     * @param string|null $sscc
     * @return $this
     */
    public function setSscc(string $sscc = null): static
    {
        return $this->set('sscc', $sscc);
    }

    /**
     * The track and trace code for this load carrier.
     *
     * @return string|null
     */
    public function getTransportLabelTrackAndTrace(): ?string
    {
        return $this->get('transportLabelTrackAndTrace');
    }

    /**
     * @param string|null $transportLabelTrackAndTrace
     * @return $this
     */
    public function setTransportLabelTrackAndTrace(string $transportLabelTrackAndTrace = null): static
    {
        return $this->set('transportLabelTrackAndTrace', $transportLabelTrackAndTrace);
    }

    /**
     * The current state of the transport for this load carrier.
     *
     * @return string|null
     */
    public function getTransportState(): ?string
    {
        return $this->get('transportState');
    }

    /**
     * @param string|null $transportState
     * @return $this
     */
    public function setTransportState(string $transportState = null): static
    {
        return $this->set('transportState', $transportState);
    }

    /**
     * The date and time in ISO 8601 format when the latest update for this transport was received.
     *
     * @return string|null
     */
    public function getTransportStateUpdateDateTime(): ?string
    {
        return $this->get('transportStateUpdateDateTime');
    }

    /**
     * @param string|null $transportStateUpdateDateTime
     * @return $this
     */
    public function setTransportStateUpdateDateTime(string $transportStateUpdateDateTime = null): static
    {
        return $this->set('transportStateUpdateDateTime', $transportStateUpdateDateTime);
    }

}
