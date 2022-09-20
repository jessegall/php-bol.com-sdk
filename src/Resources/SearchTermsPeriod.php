<?php

namespace JesseGall\BolComSDK\Resources;

class SearchTermsPeriod extends Resource
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
    protected string $bolComResource = 'SearchTermsPeriod';


    /**
     * Day number in the ISO-8601 standard.
     *
     * @return string|null
     */
    public function getDay(): ?string
    {
        return $this->get('day');
    }

    /**
     * @param string|null $day
     * @return $this
     */
    public function setDay(string $day = null): static
    {
        return $this->set('day', $day);
    }

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
     * Month number in the ISO-8601 standard.
     *
     * @return string|null
     */
    public function getMonth(): ?string
    {
        return $this->get('month');
    }

    /**
     * @param string|null $month
     * @return $this
     */
    public function setMonth(string $month = null): static
    {
        return $this->set('month', $month);
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