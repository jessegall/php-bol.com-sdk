<?php

namespace JesseGall\BolComSDK\Resources;

class Norm extends Resource
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
    protected string $bolComResource = 'Norm';


    /**
     * Condition norm for this indicator.
     *
     * @return string|null
     */
    public function getCondition(): ?string
    {
        return $this->get('condition');
    }

    /**
     * @param string|null $condition
     * @return $this
     */
    public function setCondition(string $condition = null): static
    {
        return $this->set('condition', $condition);
    }

    /**
     * Service norm for this indicator.
     *
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->get('value');
    }

    /**
     * @param float|null $value
     * @return $this
     */
    public function setValue(float $value = null): static
    {
        return $this->set('value', $value);
    }

}
