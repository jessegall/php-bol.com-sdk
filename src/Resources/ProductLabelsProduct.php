<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class ProductLabelsProduct
 */
class ProductLabelsProduct extends Resource
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
    protected string $bolComResource = 'ProductLabelsProduct';


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
     * The number of products to generate labels for.
     *
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->get('quantity');
    }

    /**
     * @param int|null $quantity
     * @return $this
     */
    public function setQuantity(int $quantity = null): static
    {
        return $this->set('quantity', $quantity);
    }

}
