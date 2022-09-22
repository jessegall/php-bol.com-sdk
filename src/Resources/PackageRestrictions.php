<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class PackageRestrictions
 */
class PackageRestrictions extends Resource
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
    protected string $bolComResource = 'PackageRestrictions';


    /**
     * The weight of a package.
     *
     * @return string|null
     */
    public function getMaxWeight(): ?string
    {
        return $this->get('maxWeight');
    }

    /**
     * @param string|null $maxWeight
     * @return $this
     */
    public function setMaxWeight(string $maxWeight = null): static
    {
        return $this->set('maxWeight', $maxWeight);
    }

    /**
     * The dimensions of a package.
     *
     * @return string|null
     */
    public function getMaxDimensions(): ?string
    {
        return $this->get('maxDimensions');
    }

    /**
     * @param string|null $maxDimensions
     * @return $this
     */
    public function setMaxDimensions(string $maxDimensions = null): static
    {
        return $this->set('maxDimensions', $maxDimensions);
    }

}
