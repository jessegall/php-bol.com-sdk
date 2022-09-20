<?php

namespace JesseGall\BolComSDK\Resources;

class CreateDeliveryInfo extends Resource
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
    protected string $bolComResource = 'CreateDeliveryInfo';


    /**
     * The expected delivery date of the shipment at the bol.com warehouse. In ISO 8601 format.
     *
     * @return string|null
     */
    public function getExpectedDeliveryDate(): ?string
    {
        return $this->get('expectedDeliveryDate');
    }

    /**
     * @param string|null $expectedDeliveryDate
     * @return $this
     */
    public function setExpectedDeliveryDate(string $expectedDeliveryDate = null): static
    {
        return $this->set('expectedDeliveryDate', $expectedDeliveryDate);
    }

    /**
     * The transporter code that correlates to the transport used for this replenishment.
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

}
