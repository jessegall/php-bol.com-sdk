<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class PerformanceIndicator
 */
class PerformanceIndicator extends Resource
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
    protected string $bolComResource = 'PerformanceIndicator';


    /**
     * Indicator name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->get('name');
    }

    /**
     * @param string|null $name
     * @return $this
     */
    public function setName(string $name = null): static
    {
        return $this->set('name', $name);
    }

    /**
     * Interpretation of the data that applies to this measurement.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->get('type');
    }

    /**
     * @param string|null $type
     * @return $this
     */
    public function setType(string $type = null): static
    {
        return $this->set('type', $type);
    }

    /**
     * Details of the indicator.
     *
     * @return Details|null
     */
    public function getDetails(): ?Details
    {
        return $this->relation('details', Details::class);
    }

    /**
     * @param Details|null $details
     * @return $this
     */
    public function setDetails(Details $details = null): static
    {
        return $this->set('details', $details);
    }

}
