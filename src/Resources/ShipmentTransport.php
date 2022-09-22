<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Class ShipmentTransport
 */
class ShipmentTransport extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = null;

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'ShipmentTransport';


    /**
     * The transport id.
     *
     * @return string|null
     */
    public function getTransportId(): ?string
    {
        return $this->get('transportId');
    }

    /**
     * @param string|null $transportId
     * @return $this
     */
    public function setTransportId(string $transportId = null): static
    {
        return $this->set('transportId', $transportId);
    }

    /**
     * Specify the transporter that will carry out the shipment.
     *
     * @return string|null
     */
    public function getTransporterCode(): ?string
    {
        return $this->get('transporterCode');
    }

    /**
     * @param string|null $transporterCode
     * @return $this
     */
    public function setTransporterCode(string $transporterCode = null): static
    {
        return $this->set('transporterCode', $transporterCode);
    }

    /**
     * The track and trace code that is associated with this transport.
     *
     * @return string|null
     */
    public function getTrackAndTrace(): ?string
    {
        return $this->get('trackAndTrace');
    }

    /**
     * @param string|null $trackAndTrace
     * @return $this
     */
    public function setTrackAndTrace(string $trackAndTrace = null): static
    {
        return $this->set('trackAndTrace', $trackAndTrace);
    }

    /**
     * The shipping label id.
     *
     * @return string|null
     */
    public function getShippingLabelId(): ?string
    {
        return $this->get('shippingLabelId');
    }

    /**
     * @param string|null $shippingLabelId
     * @return $this
     */
    public function setShippingLabelId(string $shippingLabelId = null): static
    {
        return $this->set('shippingLabelId', $shippingLabelId);
    }

    /**
     * @return ResourceCollection<TransportEvent>|null
     */
    public function getTransportEvents(): ?ResourceCollection
    {
        return $this->relation('transportEvents', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<TransportEvent>|null $transportEvents
     * @return $this
     */
    public function setTransportEvents(ResourceCollection $transportEvents = null): static
    {
        return $this->set('transportEvents', $transportEvents);
    }

}
