<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class Fulfilment
 */
class Fulfilment extends Resource
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
    protected string $bolComResource = 'Fulfilment';


    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     *
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->get('method');
    }

    /**
     * @param string|null $method
     * @return $this
     */
    public function setMethod(string $method = null): static
    {
        return $this->set('method', $method);
    }

    /**
     * The delivery promise that applies to this offer. This value will only be used in combination with fulfilmentMethod 'FBR'.
     *
     * @return string|null
     */
    public function getDeliveryCode(): ?string
    {
        return $this->get('deliveryCode');
    }

    /**
     * @param string|null $deliveryCode
     * @return $this
     */
    public function setDeliveryCode(string $deliveryCode = null): static
    {
        return $this->set('deliveryCode', $deliveryCode);
    }

}
