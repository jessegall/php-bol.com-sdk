<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class SalesForecastResponse extends Resource
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
    protected string $bolComResource = 'SalesForecastResponse';


    /**
     * Indicator name.
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
     * @return Total|null
     */
    public function getTotal(): ?Total
    {
        return $this->relation('total', Total::class);
    }

    /**
     * @param Total|null $total
     * @return $this
     */
    public function setTotal(Total $total = null): static
    {
        return $this->set('total', $total);
    }

    /**
     * @return ResourceCollection<Countries>|null
     */
    public function getCountries(): ?ResourceCollection
    {
        return $this->relation('countries', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<Countries>|null $countries
     * @return $this
     */
    public function setCountries(ResourceCollection $countries = null): static
    {
        return $this->set('countries', $countries);
    }

    /**
     * @return ResourceCollection<SalesForecastPeriod>|null
     */
    public function getPeriods(): ?ResourceCollection
    {
        return $this->relation('periods', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<SalesForecastPeriod>|null $periods
     * @return $this
     */
    public function setPeriods(ResourceCollection $periods = null): static
    {
        return $this->set('periods', $periods);
    }

}
