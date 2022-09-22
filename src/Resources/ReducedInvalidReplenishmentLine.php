<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class ReducedInvalidReplenishmentLine
 */
class ReducedInvalidReplenishmentLine extends Resource
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
