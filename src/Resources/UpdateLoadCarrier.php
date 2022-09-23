<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class UpdateLoadCarrier
 */
class UpdateLoadCarrier extends Resource
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
