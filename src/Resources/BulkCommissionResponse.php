<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Response;
use JesseGall\Resources\ResourceCollection;

/**
 * Class BulkCommissionResponse
 */
class BulkCommissionResponse extends Resource implements Response
{

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'BulkCommissionResponse';


    /**
     * @return ResourceCollection<Commission>|null
     */
    public function getCommissions(): ?ResourceCollection
    {
        return $this->relation('commissions', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<Commission>|null $commissions
     * @return $this
     */
    public function setCommissions(ResourceCollection $commissions = null): static
    {
        return $this->set('commissions', $commissions);
    }

}
