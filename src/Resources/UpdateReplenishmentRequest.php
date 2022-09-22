<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Request;
use JesseGall\Resources\ResourceCollection;

/**
 * Class UpdateReplenishmentRequest
 */
class UpdateReplenishmentRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string
     */
    protected string $endpoint = '/retailer/replenishments/{replenishment-id}';

    /**
     * The endpoint method.
     *
     * @var string
     */
    protected string $endpointMethod = 'put';

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'UpdateReplenishmentRequest';


    /**
     * Update the state of the replenishment to cancel the replenishment.
     *
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->get('state');
    }

    /**
     * @param string|null $state
     * @return $this
     */
    public function setState(string $state = null): static
    {
        return $this->set('state', $state);
    }

    /**
     * @return UpdateDeliveryInfo|null
     */
    public function getDeliveryInfo(): ?UpdateDeliveryInfo
    {
        return $this->relation('deliveryInfo', UpdateDeliveryInfo::class);
    }

    /**
     * @param UpdateDeliveryInfo|null $deliveryInfo
     * @return $this
     */
    public function setDeliveryInfo(UpdateDeliveryInfo $deliveryInfo = null): static
    {
        return $this->set('deliveryInfo', $deliveryInfo);
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
     * @return ResourceCollection<UpdateLoadCarrier>|null
     */
    public function getLoadCarriers(): ?ResourceCollection
    {
        return $this->relation('loadCarriers', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<UpdateLoadCarrier>|null $loadCarriers
     * @return $this
     */
    public function setLoadCarriers(ResourceCollection $loadCarriers = null): static
    {
        return $this->set('loadCarriers', $loadCarriers);
    }

}
