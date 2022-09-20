<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class PerformanceIndicators extends Resource
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
