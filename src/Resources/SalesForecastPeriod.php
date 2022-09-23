<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Class SalesForecastPeriod
 */
class SalesForecastPeriod extends Resource
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
    protected string $bolComResource = 'SalesForecastPeriod';


    /**
     * The number of weeks into the future, starting from today.
     *
     * @return int|null
     */
    public function getWeeksAhead(): ?int
    {
        return $this->get('weeksAhead');
    }

    /**
     * @param int|null $weeksAhead
     * @return $this
     */
    public function setWeeksAhead(int $weeksAhead = null): static
    {
        return $this->set('weeksAhead', $weeksAhead);
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

}
