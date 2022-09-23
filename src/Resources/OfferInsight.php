<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Class OfferInsight
 */
class OfferInsight extends Resource
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
    protected string $bolComResource = 'OfferInsight';


    /**
     * The name of the requested offer insight.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->get('name');
    }

    /**
     * @param string|null $name
     * @return $this
     */
    public function setName(string $name = null): static
    {
        return $this->set('name', $name);
    }

    /**
     * Interpretation of the data that applies to this measurement.
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

    /**
     * Total number of customer visits on the product page when the offer had the buy box over the requested period (excluding the current day).
     *
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->get('total');
    }

    /**
     * @param int|null $total
     * @return $this
     */
    public function setTotal(int $total = null): static
    {
        return $this->set('total', $total);
    }

    /**
     * @return ResourceCollection<OfferInsightsCountry>|null
     */
    public function getCountries(): ?ResourceCollection
    {
        return $this->relation('countries', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<OfferInsightsCountry>|null $countries
     * @return $this
     */
    public function setCountries(ResourceCollection $countries = null): static
    {
        return $this->set('countries', $countries);
    }

    /**
     * @return ResourceCollection<Periods>|null
     */
    public function getPeriods(): ?ResourceCollection
    {
        return $this->relation('periods', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<Periods>|null $periods
     * @return $this
     */
    public function setPeriods(ResourceCollection $periods = null): static
    {
        return $this->set('periods', $periods);
    }

}
