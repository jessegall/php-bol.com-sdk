<?php

namespace JesseGall\BolComSDK\Resources;

class ReducedInvalidReplenishmentLine extends Resource
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
    protected string $bolComResource = 'ReducedInvalidReplenishmentLine';


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

}
