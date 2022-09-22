<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Class PerformanceIndicators
 */
class PerformanceIndicators extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/insights/performance/indicator';

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'PerformanceIndicators';


    /**
     * @return ResourceCollection<PerformanceIndicator>|null
     */
    public function getPerformanceIndicators(): ?ResourceCollection
    {
        return $this->relation('performanceIndicators', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<PerformanceIndicator>|null $performanceIndicators
     * @return $this
     */
    public function setPerformanceIndicators(ResourceCollection $performanceIndicators = null): static
    {
        return $this->set('performanceIndicators', $performanceIndicators);
    }

}
