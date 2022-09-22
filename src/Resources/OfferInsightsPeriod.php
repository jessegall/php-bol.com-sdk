<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class OfferInsightsPeriod 
*/
class OfferInsightsPeriod extends Resource
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
    protected string $bolComResource = 'OfferInsightsPeriod';

    
    /**
    * Day of the month. 
*
    * @return int|null
    */
    public function getDay(): ?int 
    {
        return $this->get('day');
    }

    /**
     * @param int|null $day
     * @return $this
     */
    public function setDay(int $day = null): static 
    {
        return $this->set('day', $day);
    }

    /**
    * Week of the year. 
*
    * @return int|null
    */
    public function getWeek(): ?int 
    {
        return $this->get('week');
    }

    /**
     * @param int|null $week
     * @return $this
     */
    public function setWeek(int $week = null): static 
    {
        return $this->set('week', $week);
    }

    /**
    * Month of the year. 
*
    * @return int|null
    */
    public function getMonth(): ?int 
    {
        return $this->get('month');
    }

    /**
     * @param int|null $month
     * @return $this
     */
    public function setMonth(int $month = null): static 
    {
        return $this->set('month', $month);
    }

    /**
    * Year. 
*
    * @return int|null
    */
    public function getYear(): ?int 
    {
        return $this->get('year');
    }

    /**
     * @param int|null $year
     * @return $this
     */
    public function setYear(int $year = null): static 
    {
        return $this->set('year', $year);
    }

}
