<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Commission extends Resource
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
    protected string $bolComResource = 'Commission';


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
     * The intended selling price per single unit up to 2 decimals precision, including VAT.
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

    /**
     * A fixed commission fee, including VAT.
     *
     * @return float|null
     */
    public function getFixedAmount(): ?float
    {
        return $this->get('fixedAmount');
    }

    /**
     * @param float|null $fixedAmount
     * @return $this
     */
    public function setFixedAmount(float $fixedAmount = null): static
    {
        return $this->set('fixedAmount', $fixedAmount);
    }

    /**
     * A percentage of commission, based on the intended selling price per unit, including VAT.
     *
     * @return int|null
     */
    public function getPercentage(): ?int
    {
        return $this->get('percentage');
    }

    /**
     * @param int|null $percentage
     * @return $this
     */
    public function setPercentage(int $percentage = null): static
    {
        return $this->set('percentage', $percentage);
    }

    /**
     * The total commission for selling this product at bol.com. The price includes VAT for Dutch sellers, and excludes VAT for Belgium sellers.
     *
     * @return float|null
     */
    public function getTotalCost(): ?float
    {
        return $this->get('totalCost');
    }

    /**
     * @param float|null $totalCost
     * @return $this
     */
    public function setTotalCost(float $totalCost = null): static
    {
        return $this->set('totalCost', $totalCost);
    }

    /**
     * The total commission for selling this product at bol.com without reductions including VAT.
     *
     * @return float|null
     */
    public function getTotalCostWithoutReduction(): ?float
    {
        return $this->get('totalCostWithoutReduction');
    }

    /**
     * @param float|null $totalCostWithoutReduction
     * @return $this
     */
    public function setTotalCostWithoutReduction(float $totalCostWithoutReduction = null): static
    {
        return $this->set('totalCostWithoutReduction', $totalCostWithoutReduction);
    }

    /**
     * @return ResourceCollection<Reduction>|null
     */
    public function getReductions(): ?ResourceCollection
    {
        return $this->relation('reductions', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<Reduction>|null $reductions
     * @return $this
     */
    public function setReductions(ResourceCollection $reductions = null): static
    {
        return $this->set('reductions', $reductions);
    }

}
