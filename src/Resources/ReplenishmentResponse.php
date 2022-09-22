<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;
use JesseGall\BolComSDK\Resources\Contracts\Response;

/**
* Class ReplenishmentResponse 
*/
class ReplenishmentResponse extends Resource implements Response
{

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'ReplenishmentResponse';

    
    /**
    * The unique identifier of the replenishment. 
*
    * @return string|null
    */
    public function getReplenishmentId(): ?string 
    {
        return $this->get('replenishmentId');
    }

    /**
     * @param string|null $replenishmentId
     * @return $this
     */
    public function setReplenishmentId(string $replenishmentId = null): static 
    {
        return $this->set('replenishmentId', $replenishmentId);
    }

    /**
    * The date and time when this replenishment was created. In ISO 8601 format. 
*
    * @return string|null
    */
    public function getCreationDateTime(): ?string 
    {
        return $this->get('creationDateTime');
    }

    /**
     * @param string|null $creationDateTime
     * @return $this
     */
    public function setCreationDateTime(string $creationDateTime = null): static 
    {
        return $this->set('creationDateTime', $creationDateTime);
    }

    /**
    * Custom user defined reference to identify the replenishment. 
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
    * Indicates whether the replenishment will be labeled by bol.com or not. 
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
    * Indicates the state of this replenishment order. 
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
    
    * @return DeliveryInformation|null
    */
    public function getDeliveryInformation(): ?DeliveryInformation 
    {
        return $this->relation('deliveryInformation', DeliveryInformation::class);
    }

    /**
     * @param DeliveryInformation|null $deliveryInformation
     * @return $this
     */
    public function setDeliveryInformation(DeliveryInformation $deliveryInformation = null): static 
    {
        return $this->set('deliveryInformation', $deliveryInformation);
    }

    /**
    
    * @return PickupAppointment|null
    */
    public function getPickupAppointment(): ?PickupAppointment 
    {
        return $this->relation('pickupAppointment', PickupAppointment::class);
    }

    /**
     * @param PickupAppointment|null $pickupAppointment
     * @return $this
     */
    public function setPickupAppointment(PickupAppointment $pickupAppointment = null): static 
    {
        return $this->set('pickupAppointment', $pickupAppointment);
    }

    /**
    * The number of load carriers in this shipment. 
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
    
    * @return ResourceCollection<LoadCarrier>|null
    */
    public function getLoadCarriers(): ?ResourceCollection 
    {
        return $this->relation('loadCarriers', ResourceCollection::class,true);
    }

    /**
     * @param ResourceCollection<LoadCarrier>|null $loadCarriers
     * @return $this
     */
    public function setLoadCarriers(ResourceCollection $loadCarriers = null): static 
    {
        return $this->set('loadCarriers', $loadCarriers);
    }

    /**
    
    * @return ResourceCollection<ReplenishmentLine>|null
    */
    public function getLines(): ?ResourceCollection 
    {
        return $this->relation('lines', ResourceCollection::class,true);
    }

    /**
     * @param ResourceCollection<ReplenishmentLine>|null $lines
     * @return $this
     */
    public function setLines(ResourceCollection $lines = null): static 
    {
        return $this->set('lines', $lines);
    }

    /**
    
    * @return ResourceCollection<InvalidReplenishmentLine>|null
    */
    public function getInvalidLines(): ?ResourceCollection 
    {
        return $this->relation('invalidLines', ResourceCollection::class,true);
    }

    /**
     * @param ResourceCollection<InvalidReplenishmentLine>|null $invalidLines
     * @return $this
     */
    public function setInvalidLines(ResourceCollection $invalidLines = null): static 
    {
        return $this->set('invalidLines', $invalidLines);
    }

    /**
    
    * @return ResourceCollection<StateTransition>|null
    */
    public function getStateTransitions(): ?ResourceCollection 
    {
        return $this->relation('stateTransitions', ResourceCollection::class,true);
    }

    /**
     * @param ResourceCollection<StateTransition>|null $stateTransitions
     * @return $this
     */
    public function setStateTransitions(ResourceCollection $stateTransitions = null): static 
    {
        return $this->set('stateTransitions', $stateTransitions);
    }

}
