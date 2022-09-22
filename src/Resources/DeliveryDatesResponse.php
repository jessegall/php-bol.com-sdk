<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Response;

/**
 * Class DeliveryDatesResponse
 */
class DeliveryDatesResponse extends Resource implements Response
{

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'DeliveryDatesResponse';


    /**
     * Allowed delivery dates for shipments to the bol.com warehouse in ISO 8601 format.
     *
     * @return array|null
     */
    public function getDeliveryDates(): ?array
    {
        return $this->get('deliveryDates');
    }

    /**
     * @param array|null $deliveryDates
     * @return $this
     */
    public function setDeliveryDates(array $deliveryDates = null): static
    {
        return $this->set('deliveryDates', $deliveryDates);
    }

}
