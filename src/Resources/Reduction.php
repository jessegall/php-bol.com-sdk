<?php

namespace JesseGall\BolComSDK\Resources;

class Reduction extends Resource
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
    protected string $bolComResource = 'Reduction';


    /**
     * Maximum offer price that can be used to benefit from a commission reduction, including VAT.
     *
     * @return int|null
     */
    public function getMaximumPrice(): ?int
    {
        return $this->get('maximumPrice');
    }

    /**
     * @param int|null $maximumPrice
     * @return $this
     */
    public function setMaximumPrice(int $maximumPrice = null): static
    {
        return $this->set('maximumPrice', $maximumPrice);
    }

    /**
     * A reduction to the commission if the maximum price criteria is met, including VAT.
     *
     * @return float|null
     */
    public function getCostReduction(): ?float
    {
        return $this->get('costReduction');
    }

    /**
     * @param float|null $costReduction
     * @return $this
     */
    public function setCostReduction(float $costReduction = null): static
    {
        return $this->set('costReduction', $costReduction);
    }

    /**
     * The start date from which the commission reduction is valid, in ISO 8601 format.
     *
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->get('startDate');
    }

    /**
     * @param string|null $startDate
     * @return $this
     */
    public function setStartDate(string $startDate = null): static
    {
        return $this->set('startDate', $startDate);
    }

    /**
     * The end date from which the commission reduction is not valid anymore, in ISO 8601 format.
     *
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->get('endDate');
    }

    /**
     * @param string|null $endDate
     * @return $this
     */
    public function setEndDate(string $endDate = null): static
    {
        return $this->set('endDate', $endDate);
    }

}
