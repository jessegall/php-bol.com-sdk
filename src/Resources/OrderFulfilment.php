<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class OrderFulfilment
 */
class OrderFulfilment extends Resource
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
    protected string $bolComResource = 'OrderFulfilment';


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

    /**
     * The exact delivery date at which this order must be delivered at the customer's shipping address. This field is only filled when the customer chose an exact date for delivery. This field is empty in case the latestDeliveryDate is filled.
     *
     * @return string|null
     */
    public function getExactDeliveryDate(): ?string
    {
        return $this->get('exactDeliveryDate');
    }

    /**
     * @param string|null $exactDeliveryDate
     * @return $this
     */
    public function setExactDeliveryDate(string $exactDeliveryDate = null): static
    {
        return $this->set('exactDeliveryDate', $exactDeliveryDate);
    }

    /**
     * The date this order item will automatically expire and thereby cancelling this order item from the order.
     *
     * @return string|null
     */
    public function getExpiryDate(): ?string
    {
        return $this->get('expiryDate');
    }

    /**
     * @param string|null $expiryDate
     * @return $this
     */
    public function setExpiryDate(string $expiryDate = null): static
    {
        return $this->set('expiryDate', $expiryDate);
    }

    /**
     * Delivery option selected by the customer.
     *
     * @return string|null
     */
    public function getTimeFrameType(): ?string
    {
        return $this->get('timeFrameType');
    }

    /**
     * @param string|null $timeFrameType
     * @return $this
     */
    public function setTimeFrameType(string $timeFrameType = null): static
    {
        return $this->set('timeFrameType', $timeFrameType);
    }

}
