<?php

namespace JesseGall\BolComSDK\Resources;

class Campaign extends Resource
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
    protected string $bolComResource = 'Campaign';


    /**
     * The name of the campaign under which the promotion had been created.
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
     * The starting date and time of the campaign.
     *
     * @return string|null
     */
    public function getStartDateTime(): ?string
    {
        return $this->get('startDateTime');
    }

    /**
     * @param string|null $startDateTime
     * @return $this
     */
    public function setStartDateTime(string $startDateTime = null): static
    {
        return $this->set('startDateTime', $startDateTime);
    }

    /**
     * The ending date and time of the campaign.
     *
     * @return string|null
     */
    public function getEndDateTime(): ?string
    {
        return $this->get('endDateTime');
    }

    /**
     * @param string|null $endDateTime
     * @return $this
     */
    public function setEndDateTime(string $endDateTime = null): static
    {
        return $this->set('endDateTime', $endDateTime);
    }

}
