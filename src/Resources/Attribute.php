<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class Attribute extends Resource
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
    protected string $bolComResource = 'Attribute';


    /**
     * The identifier of the attribute for which the value has changed.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->get('id');
    }

    /**
     * @param string|null $id
     * @return $this
     */
    public function setId(string $id = null): static
    {
        return $this->set('id', $id);
    }

    /**
     * @return ResourceCollection<AttributeValue>|null
     */
    public function getValues(): ?ResourceCollection
    {
        return $this->relation('values', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<AttributeValue>|null $values
     * @return $this
     */
    public function setValues(ResourceCollection $values = null): static
    {
        return $this->set('values', $values);
    }

}
