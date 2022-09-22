<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Response;
use JesseGall\Resources\ResourceCollection;

/**
 * Class ReplenishmentsResponse
 */
class ReplenishmentsResponse extends Resource implements Response
{

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'ReplenishmentsResponse';


    /**
     * @return ResourceCollection<ReducedReplenishment>|null
     */
    public function getReplenishments(): ?ResourceCollection
    {
        return $this->relation('replenishments', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<ReducedReplenishment>|null $replenishments
     * @return $this
     */
    public function setReplenishments(ResourceCollection $replenishments = null): static
    {
        return $this->set('replenishments', $replenishments);
    }

}
