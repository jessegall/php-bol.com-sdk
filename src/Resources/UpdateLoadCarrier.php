<?php

namespace JesseGall\BolComSDK\Resources;

class UpdateLoadCarrier extends Resource
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
    protected string $bolComResource = 'UpdateLoadCarrier';


    /**
     * The Serial Shipping Container Code (SSCC) for this load carrier.
     *
     * @return string|null
     */
    public function getSscc(): ?string
    {
        return $this->get('sscc');
    }

    /**
     * @param string|null $sscc
     * @return $this
     */
    public function setSscc(string $sscc = null): static
    {
        return $this->set('sscc', $sscc);
    }

}
