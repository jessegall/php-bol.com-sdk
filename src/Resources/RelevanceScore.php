<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class RelevanceScore
 * The relevance score of a product in a promotion.
 */
class RelevanceScore extends Resource
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
    protected string $bolComResource = 'RelevanceScore';


    /**
     * The country for which the relevance score has been calculated against.
     *
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->get('countryCode');
    }

    /**
     * @param string|null $countryCode
     * @return $this
     */
    public function setCountryCode(string $countryCode = null): static
    {
        return $this->set('countryCode', $countryCode);
    }

    /**
     * The calculated relevance score for the product.
     *
     * @return int|null
     */
    public function getRelevanceScore(): ?int
    {
        return $this->get('relevanceScore');
    }

    /**
     * @param int|null $relevanceScore
     * @return $this
     */
    public function setRelevanceScore(int $relevanceScore = null): static
    {
        return $this->set('relevanceScore', $relevanceScore);
    }

}
