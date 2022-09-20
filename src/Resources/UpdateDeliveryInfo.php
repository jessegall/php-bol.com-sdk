<?php

namespace JesseGall\BolComSDK\Resources;

class UpdateDeliveryInfo extends Resource
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
    protected string $bolComResource = 'UpdateDeliveryInfo';


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

}
