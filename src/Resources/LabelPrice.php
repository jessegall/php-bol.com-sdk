<?php

namespace JesseGall\BolComSDK\Resources;

class LabelPrice extends Resource
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
    protected string $bolComResource = 'LabelPrice';


    /**
     * The price that is charged for this delivery option, excluding VAT.
     *
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->get('totalPrice');
    }

    /**
     * @param float|null $totalPrice
     * @return $this
     */
    public function setTotalPrice(float $totalPrice = null): static
    {
        return $this->set('totalPrice', $totalPrice);
    }

}
