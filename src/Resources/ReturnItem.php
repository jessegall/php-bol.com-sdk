<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class ReturnItem extends Resource
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
    protected string $bolComResource = 'ReturnItem';


    /**
     * The RMA (Return Merchandise Authorization) identifier of the return.
     *
     * @return string|null
     */
    public function getRmaId(): ?string
    {
        return $this->get('rmaId');
    }

    /**
     * @param string|null $rmaId
     * @return $this
     */
    public function setRmaId(string $rmaId = null): static
    {
        return $this->set('rmaId', $rmaId);
    }

    /**
     * The id of the customer order this return item is in.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->get('orderId');
    }

    /**
     * @param string|null $orderId
     * @return $this
     */
    public function setOrderId(string $orderId = null): static
    {
        return $this->set('orderId', $orderId);
    }

    /**
     * The EAN number associated with this product.
     *
     * @return string|null
     */
    public function getEan(): ?string
    {
        return $this->get('ean');
    }

    /**
     * @param string|null $ean
     * @return $this
     */
    public function setEan(string $ean = null): static
    {
        return $this->set('ean', $ean);
    }

    /**
     * The product title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->get('title');
    }

    /**
     * @param string|null $title
     * @return $this
     */
    public function setTitle(string $title = null): static
    {
        return $this->set('title', $title);
    }

    /**
     * The quantity that is expected to be returned by the customer. Note: this can be greater than 1 in case the customer ordered a quantity greater than 1 of the same product in the same customer order.
     *
     * @return int|null
     */
    public function getExpectedQuantity(): ?int
    {
        return $this->get('expectedQuantity');
    }

    /**
     * @param int|null $expectedQuantity
     * @return $this
     */
    public function setExpectedQuantity(int $expectedQuantity = null): static
    {
        return $this->set('expectedQuantity', $expectedQuantity);
    }

    /**
     * @return ReturnReason|null
     */
    public function getReturnReason(): ?ReturnReason
    {
        return $this->relation('returnReason', ReturnReason::class);
    }

    /**
     * @param ReturnReason|null $returnReason
     * @return $this
     */
    public function setReturnReason(ReturnReason $returnReason = null): static
    {
        return $this->set('returnReason', $returnReason);
    }

    /**
     * The track and trace code that is associated with this transport.
     *
     * @return string|null
     */
    public function getTrackAndTrace(): ?string
    {
        return $this->get('trackAndTrace');
    }

    /**
     * @param string|null $trackAndTrace
     * @return $this
     */
    public function setTrackAndTrace(string $trackAndTrace = null): static
    {
        return $this->set('trackAndTrace', $trackAndTrace);
    }

    /**
     * The name of the transporter.
     *
     * @return string|null
     */
    public function getTransporterName(): ?string
    {
        return $this->get('transporterName');
    }

    /**
     * @param string|null $transporterName
     * @return $this
     */
    public function setTransporterName(string $transporterName = null): static
    {
        return $this->set('transporterName', $transporterName);
    }

    /**
     * Indicates if this return item has been handled (by the retailer).
     *
     * @return bool|null
     */
    public function getHandled(): ?bool
    {
        return $this->get('handled');
    }

    /**
     * @param bool|null $handled
     * @return $this
     */
    public function setHandled(bool $handled): static
    {
        return $this->set('handled', $handled);
    }

    /**
     * @return ResourceCollection<ReturnProcessingResult>|null
     */
    public function getProcessingResults(): ?ResourceCollection
    {
        return $this->relation('processingResults', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<ReturnProcessingResult>|null $processingResults
     * @return $this
     */
    public function setProcessingResults(ResourceCollection $processingResults = null): static
    {
        return $this->set('processingResults', $processingResults);
    }

    /**
     * @return CustomerDetails|null
     */
    public function getCustomerDetails(): ?CustomerDetails
    {
        return $this->relation('customerDetails', CustomerDetails::class);
    }

    /**
     * @param CustomerDetails|null $customerDetails
     * @return $this
     */
    public function setCustomerDetails(CustomerDetails $customerDetails = null): static
    {
        return $this->set('customerDetails', $customerDetails);
    }

}
