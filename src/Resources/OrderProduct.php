<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class OrderProduct
 */
class OrderProduct extends Resource
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
    protected string $bolComResource = 'OrderProduct';


    /**
     * The EAN number associated with this product.
     *
     * @return string|null
     */
    public function getEan(): ?string
    {
        return $this->get('ean');
    }

    /**
     * @param string|null $ean
     * @return $this
     */
    public function setEan(string $ean = null): static
    {
        return $this->set('ean', $ean);
    }

    /**
     * Title of the product as shown on the webshop.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->get('title');
    }

    /**
     * @param string|null $title
     * @return $this
     */
    public function setTitle(string $title = null): static
    {
        return $this->set('title', $title);
    }

}
