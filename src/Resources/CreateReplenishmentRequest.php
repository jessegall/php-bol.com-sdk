<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Request;
use JesseGall\Resources\ResourceCollection;

/**
 * Class CreateReplenishmentRequest
 */
class CreateReplenishmentRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string
     */
    protected string $endpoint = '/retailer/replenishments';

    /**
     * The endpoint method.
     *
     * @var string
     */
    protected string $endpointMethod = 'post';

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'CreateReplenishmentRequest';


    /**
     * Custom user reference for this replenishment. Must contain at least 1 digit and only upper case characters allowed.
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->get('reference');
    }

    /**
     * @param string|null $reference
     * @return $this
     */
    public function setReference(string $reference = null): static
    {
        return $this->set('reference', $reference);
    }

    /**
     * @return CreateDeliveryInfo|null
     */
    public function getDeliveryInfo(): ?CreateDeliveryInfo
    {
        return $this->relation('deliveryInfo', CreateDeliveryInfo::class);
    }

    /**
     * @param CreateDeliveryInfo|null $deliveryInfo
     * @return $this
     */
    public function setDeliveryInfo(CreateDeliveryInfo $deliveryInfo = null): static
    {
        return $this->set('deliveryInfo', $deliveryInfo);
    }

    /**
     * Indicates whether the replenishment will be labeled by bol.com.
     *
     * @return bool|null
     */
    public function getLabelingByBol(): ?bool
    {
        return $this->get('labelingByBol');
    }

    /**
     * @param bool|null $labelingByBol
     * @return $this
     */
    public function setLabelingByBol(bool $labelingByBol): static
    {
        return $this->set('labelingByBol', $labelingByBol);
    }

    /**
     * The number of parcels in this replenishment. Note: if you are using the bol.com pickup service, the maximum number is 20.
     *
     * @return int|null
     */
    public function getNumberOfLoadCarriers(): ?int
    {
        return $this->get('numberOfLoadCarriers');
    }

    /**
     * @param int|null $numberOfLoadCarriers
     * @return $this
     */
    public function setNumberOfLoadCarriers(int $numberOfLoadCarriers = null): static
    {
        return $this->set('numberOfLoadCarriers', $numberOfLoadCarriers);
    }

    /**
     * @return CreatePickupAppointment|null
     */
    public function getPickupAppointment(): ?CreatePickupAppointment
    {
        return $this->relation('pickupAppointment', CreatePickupAppointment::class);
    }

    /**
     * @param CreatePickupAppointment|null $pickupAppointment
     * @return $this
     */
    public function setPickupAppointment(CreatePickupAppointment $pickupAppointment = null): static
    {
        return $this->set('pickupAppointment', $pickupAppointment);
    }

    /**
     * @return ResourceCollection<CreateReplenishmentLine>|null
     */
    public function getLines(): ?ResourceCollection
    {
        return $this->relation('lines', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<CreateReplenishmentLine>|null $lines
     * @return $this
     */
    public function setLines(ResourceCollection $lines = null): static
    {
        return $this->set('lines', $lines);
    }

}
