<?php

namespace JesseGall\BolComSDK\Resources;

class Condition extends Resource
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
    protected string $bolComResource = 'Condition';


    /**
     * The condition of the offered product.
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
     * The category of the condition. If not given NEW or SECONDHAND is derived from NAME.
     *
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->get('category');
    }

    /**
     * @param string|null $category
     * @return $this
     */
    public function setCategory(string $category = null): static
    {
        return $this->set('category', $category);
    }

    /**
     * The description of the condition of the product. Only allowed if name is not NEW and may not contain e-mail addresses.
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->get('comment');
    }

    /**
     * @param string|null $comment
     * @return $this
     */
    public function setComment(string $comment = null): static
    {
        return $this->set('comment', $comment);
    }

}
