<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class ReturnsResponse extends Resource
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
    protected string $bolComResource = 'ReturnsResponse';


    /**
     * @return ResourceCollection<ReducedReturn>|null
     */
    public function getReturns(): ?ResourceCollection
    {
        return $this->relation('returns', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<ReducedReturn>|null $returns
     * @return $this
     */
    public function setReturns(ResourceCollection $returns = null): static
    {
        return $this->set('returns', $returns);
    }

}
