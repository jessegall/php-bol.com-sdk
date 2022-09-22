<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class Details 
*/
class Details extends Resource
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
    protected string $bolComResource = 'Details';

    
    /**
    * The period for which the performance is measured. 
*
    * @return PerformanceIndicatorPeriod|null
    */
    public function getPeriod(): ?PerformanceIndicatorPeriod 
    {
        return $this->relation('period', PerformanceIndicatorPeriod::class);
    }

    /**
     * @param PerformanceIndicatorPeriod|null $period
     * @return $this
     */
    public function setPeriod(PerformanceIndicatorPeriod $period = null): static 
    {
        return $this->set('period', $period);
    }

    /**
    * The score for this measurement. In case there are no scores for an indicator, this element is omitted from the response. 
*
    * @return Score|null
    */
    public function getScore(): ?Score 
    {
        return $this->relation('score', Score::class);
    }

    /**
     * @param Score|null $score
     * @return $this
     */
    public function setScore(Score $score = null): static 
    {
        return $this->set('score', $score);
    }

    /**
    * Service norm for this indicator. 
*
    * @return Norm|null
    */
    public function getNorm(): ?Norm 
    {
        return $this->relation('norm', Norm::class);
    }

    /**
     * @param Norm|null $norm
     * @return $this
     */
    public function setNorm(Norm $norm = null): static 
    {
        return $this->set('norm', $norm);
    }

}
