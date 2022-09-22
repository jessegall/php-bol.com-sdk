<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class Inventory
 */
class Inventory extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string|null
     */
    protected string|null $endpoint = '/retailer/inventory';

    /**
     * The bol.com resource this class represents
     *
     * @var string
     */
    protected string $bolComResource = 'Inventory';


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
     * The BSKU number associated with this product.
     *
     * @return string|null
     */
    public function getBsku(): ?string
    {
        return $this->get('bsku');
    }

    /**
     * @param string|null $bsku
     * @return $this
     */
    public function setBsku(string $bsku = null): static
    {
        return $this->set('bsku', $bsku);
    }

    /**
     * The stock that is not available for sale anymore.
     *
     * @return int|null
     */
    public function getGradedStock(): ?int
    {
        return $this->get('gradedStock');
    }

    /**
     * @param int|null $gradedStock
     * @return $this
     */
    public function setGradedStock(int $gradedStock = null): static
    {
        return $this->set('gradedStock', $gradedStock);
    }

    /**
     * The stock that is available for sale.
     *
     * @return int|null
     */
    public function getRegularStock(): ?int
    {
        return $this->get('regularStock');
    }

    /**
     * @param int|null $regularStock
     * @return $this
     */
    public function setRegularStock(int $regularStock = null): static
    {
        return $this->set('regularStock', $regularStock);
    }

    /**
     * The product title.
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
