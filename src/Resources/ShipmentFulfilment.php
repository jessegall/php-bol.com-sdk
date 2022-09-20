<?php

namespace JesseGall\BolComSDK\Resources;

class ShipmentFulfilment extends Resource
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
    protected string $bolComResource = 'ShipmentFulfilment';


    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     *
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->get('method');
    }

    /**
     * @param string|null $method
     * @return $this
     */
    public function setMethod(string $method = null): static
    {
        return $this->set('method', $method);
    }

    /**
     * The party that manages the distribution, either bol.com or the retailer itself.
     *
     * @return string|null
     */
    public function getDistributionParty(): ?string
    {
        return $this->get('distributionParty');
    }

    /**
     * @param string|null $distributionParty
     * @return $this
     */
    public function setDistributionParty(string $distributionParty = null): static
    {
        return $this->set('distributionParty', $distributionParty);
    }

    /**
     * The ultimate delivery date at which this order must be delivered at the customer's shipping address. This field is empty in case the exactDeliveryDate is filled.
     *
     * @return string|null
     */
    public function getLatestDeliveryDate(): ?string
    {
        return $this->get('latestDeliveryDate');
    }

    /**
     * @param string|null $latestDeliveryDate
     * @return $this
     */
    public function setLatestDeliveryDate(string $latestDeliveryDate = null): static
    {
        return $this->set('latestDeliveryDate', $latestDeliveryDate);
    }

}
