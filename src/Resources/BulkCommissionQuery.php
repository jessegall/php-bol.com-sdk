<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class BulkCommissionQuery
 */
class BulkCommissionQuery extends Resource
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
    protected string $bolComResource = 'BulkCommissionQuery';


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
     * The condition of the offer.
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
     * The price of the product with a period as a decimal separator. The price should always have two decimals precision.
     *
     * @return int|null
     */
    public function getUnitPrice(): ?int
    {
        return $this->get('unitPrice');
    }

    /**
     * @param int|null $unitPrice
     * @return $this
     */
    public function setUnitPrice(int $unitPrice = null): static
    {
        return $this->set('unitPrice', $unitPrice);
    }

}
