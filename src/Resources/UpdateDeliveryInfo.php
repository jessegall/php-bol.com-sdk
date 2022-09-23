<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class UpdateDeliveryInfo
 */
class UpdateDeliveryInfo extends Resource
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
