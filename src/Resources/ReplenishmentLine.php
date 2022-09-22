<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class ReplenishmentLine 
*/
class ReplenishmentLine extends Resource
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
    protected string $bolComResource = 'ReplenishmentLine';

    
    /**
    * The EAN number associated with this product. 
*
    * @return string|null
    */
    public function getEan(): ?string 
    {
        return $this->get('ean');
    }

    /**
     * @param string|null $ean
     * @return $this
     */
    public function setEan(string $ean = null): static 
    {
        return $this->set('ean', $ean);
    }

    /**
    * The state of the line indicating whether this line was announced within this replenishment. 
*
    * @return string|null
    */
    public function getLineState(): ?string 
    {
        return $this->get('lineState');
    }

    /**
     * @param string|null $lineState
     * @return $this
     */
    public function setLineState(string $lineState = null): static 
    {
        return $this->set('lineState', $lineState);
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
