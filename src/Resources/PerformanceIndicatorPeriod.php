<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class PerformanceIndicatorPeriod
 */
class PerformanceIndicatorPeriod extends Resource
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
    protected string $bolComResource = 'PerformanceIndicatorPeriod';


    /**
     * Week number in the ISO-8601 standard.
     *
     * @return string|null
     */
    public function getWeek(): ?string
    {
        return $this->get('week');
    }

    /**
     * @param string|null $week
     * @return $this
     */
    public function setWeek(string $week = null): static
    {
        return $this->set('week', $week);
    }

    /**
     * Year number in the ISO-8601 standard.
     *
     * @return string|null
     */
    public function getYear(): ?string
    {
        return $this->get('year');
    }

    /**
     * @param string|null $year
     * @return $this
     */
    public function setYear(string $year = null): static
    {
        return $this->set('year', $year);
    }

}
