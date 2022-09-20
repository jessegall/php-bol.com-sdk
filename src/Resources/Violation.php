<?php

namespace JesseGall\BolComSDK\Resources;

class Violation extends Resource
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
    protected string $bolComResource = 'Violation';


    /**
     * Describes the origin of the error, for instance a field or query parameter validation error.
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
     * Detailed description of the validation error that caused the problem.
     *
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->get('reason');
    }

    /**
     * @param string|null $reason
     * @return $this
     */
    public function setReason(string $reason = null): static
    {
        return $this->set('reason', $reason);
    }

}