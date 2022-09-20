<?php

namespace JesseGall\BolComSDK\Resources;

class Total extends Resource
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
    protected string $bolComResource = 'Total';


    /**
     * Minimum number of estimated sales expectations on the bol.com platform.
     *
     * @return float|null
     */
    public function getMinimum(): ?float
    {
        return $this->get('minimum');
    }

    /**
     * @param float|null $minimum
     * @return $this
     */
    public function setMinimum(float $minimum = null): static
    {
        return $this->set('minimum', $minimum);
    }

    /**
     * Maximum number of estimated sales expectations on the bol.com platform.
     *
     * @return float|null
     */
    public function getMaximum(): ?float
    {
        return $this->get('maximum');
    }

    /**
     * @param float|null $maximum
     * @return $this
     */
    public function setMaximum(float $maximum = null): static
    {
        return $this->set('maximum', $maximum);
    }

}
