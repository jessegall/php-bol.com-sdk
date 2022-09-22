<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Response;
use JesseGall\Resources\ResourceCollection;

/**
 * Class ReturnsResponse
 */
class ReturnsResponse extends Resource implements Response
{

    /**
     * The bol.com resource this class represents
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
