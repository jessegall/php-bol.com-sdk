<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class Link
 */
class Link extends Resource
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
    protected string $bolComResource = 'Link';


    /**
     * The link relation.
     *
     * @return string|null
     */
    public function getRel(): ?string
    {
        return $this->get('rel');
    }

    /**
     * @param string|null $rel
     * @return $this
     */
    public function setRel(string $rel = null): static
    {
        return $this->set('rel', $rel);
    }

    /**
     * The URI for the resource linked to.
     *
     * @return string|null
     */
    public function getHref(): ?string
    {
        return $this->get('href');
    }

    /**
     * @param string|null $href
     * @return $this
     */
    public function setHref(string $href = null): static
    {
        return $this->set('href', $href);
    }

    /**
     * The HTTP method to use when accessing the link.
     *
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->get('method');
    }

    /**
     * @param string|null $method
     * @return $this
     */
    public function setMethod(string $method = null): static
    {
        return $this->set('method', $method);
    }

}
