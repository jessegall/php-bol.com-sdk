<?php

namespace JesseGall\BolComSDK\Resources;

class ReturnRequest extends Resource
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
    protected string $bolComResource = 'ReturnRequest';


    /**
     * The handling result requested by the retailer.
     *
     * @return string|null
     */
    public function getHandlingResult(): ?string
    {
        return $this->get('handlingResult');
    }

    /**
     * @param string|null $handlingResult
     * @return $this
     */
    public function setHandlingResult(string $handlingResult = null): static
    {
        return $this->set('handlingResult', $handlingResult);
    }

    /**
     * The quantity of items returned.
     *
     * @return int|null
     */
    public function getQuantityReturned(): ?int
    {
        return $this->get('quantityReturned');
    }

    /**
     * @param int|null $quantityReturned
     * @return $this
     */
    public function setQuantityReturned(int $quantityReturned = null): static
    {
        return $this->set('quantityReturned', $quantityReturned);
    }

}
