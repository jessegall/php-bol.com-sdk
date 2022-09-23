<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class InvalidReplenishmentLine
 */
class InvalidReplenishmentLine extends Resource
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
    protected string $bolComResource = 'InvalidReplenishmentLine';


    /**
     * Type of invalid replenishment line, in case the BSKU and/or EAN cannot be determined for this replenishment line.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->get('type');
    }

    /**
     * @param string|null $type
     * @return $this
     */
    public function setType(string $type = null): static
    {
        return $this->set('type', $type);
    }

    /**
     * The amount of announced quantity for this replenishment line.
     *
     * @return int|null
     */
    public function getQuantityAnnounced(): ?int
    {
        return $this->get('quantityAnnounced');
    }

    /**
     * @param int|null $quantityAnnounced
     * @return $this
     */
    public function setQuantityAnnounced(int $quantityAnnounced = null): static
    {
        return $this->set('quantityAnnounced', $quantityAnnounced);
    }

    /**
     * The amount of received quantity for this replenishment line.
     *
     * @return int|null
     */
    public function getQuantityReceived(): ?int
    {
        return $this->get('quantityReceived');
    }

    /**
     * @param int|null $quantityReceived
     * @return $this
     */
    public function setQuantityReceived(int $quantityReceived = null): static
    {
        return $this->set('quantityReceived', $quantityReceived);
    }

    /**
     * The amount of quantity that is still in progress at the warehouse for this replenishment line.
     *
     * @return int|null
     */
    public function getQuantityInProgress(): ?int
    {
        return $this->get('quantityInProgress');
    }

    /**
     * @param int|null $quantityInProgress
     * @return $this
     */
    public function setQuantityInProgress(int $quantityInProgress = null): static
    {
        return $this->set('quantityInProgress', $quantityInProgress);
    }

    /**
     * The quantity within this shipment line that has a graded (unsalable) state.
     *
     * @return int|null
     */
    public function getQuantityWithGradedState(): ?int
    {
        return $this->get('quantityWithGradedState');
    }

    /**
     * @param int|null $quantityWithGradedState
     * @return $this
     */
    public function setQuantityWithGradedState(int $quantityWithGradedState = null): static
    {
        return $this->set('quantityWithGradedState', $quantityWithGradedState);
    }

    /**
     * The quantity within this shipment line that has a regular (salable) state.
     *
     * @return int|null
     */
    public function getQuantityWithRegularState(): ?int
    {
        return $this->get('quantityWithRegularState');
    }

    /**
     * @param int|null $quantityWithRegularState
     * @return $this
     */
    public function setQuantityWithRegularState(int $quantityWithRegularState = null): static
    {
        return $this->set('quantityWithRegularState', $quantityWithRegularState);
    }

}
