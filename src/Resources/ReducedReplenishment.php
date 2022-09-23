<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Class ReducedReplenishment
 */
class ReducedReplenishment extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = null;

    /**
     * The unique identifier for the resource.
     *
     * @var string|null
     */
    protected string|null $identifier = null;

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'ReducedReplenishment';


    /**
     * The unique identifier of the replenishment.
     *
     * @return string|null
     */
    public function getReplenishmentId(): ?string
    {
        return $this->get('replenishmentId');
    }

    /**
     * @param string|null $replenishmentId
     * @return $this
     */
    public function setReplenishmentId(string $replenishmentId = null): static
    {
        return $this->set('replenishmentId', $replenishmentId);
    }

    /**
     * Custom user defined reference to identify the replenishment.
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->get('reference');
    }

    /**
     * @param string|null $reference
     * @return $this
     */
    public function setReference(string $reference = null): static
    {
        return $this->set('reference', $reference);
    }

    /**
     * The date and time when this replenishment was created. In ISO 8601 format.
     *
     * @return string|null
     */
    public function getCreationDateTime(): ?string
    {
        return $this->get('creationDateTime');
    }

    /**
     * @param string|null $creationDateTime
     * @return $this
     */
    public function setCreationDateTime(string $creationDateTime = null): static
    {
        return $this->set('creationDateTime', $creationDateTime);
    }

    /**
     * @return ResourceCollection<ReducedReplenishmentLines>|null
     */
    public function getLines(): ?ResourceCollection
    {
        return $this->relation('lines', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<ReducedReplenishmentLines>|null $lines
     * @return $this
     */
    public function setLines(ResourceCollection $lines = null): static
    {
        return $this->set('lines', $lines);
    }

    /**
     * @return ResourceCollection<ReducedInvalidReplenishmentLine>|null
     */
    public function getInvalidLines(): ?ResourceCollection
    {
        return $this->relation('invalidLines', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<ReducedInvalidReplenishmentLine>|null $invalidLines
     * @return $this
     */
    public function setInvalidLines(ResourceCollection $invalidLines = null): static
    {
        return $this->set('invalidLines', $invalidLines);
    }

}
