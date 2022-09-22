<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class Score
 * The score for this measurement. In case there are no scores for an indicator, this element is omitted from the response.
 */
class Score extends Resource
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
    protected string $bolComResource = 'Score';


    /**
     * Indicates whether the score conforms to the bol.com service norm or not.
     *
     * @return bool|null
     */
    public function getConforms(): ?bool
    {
        return $this->get('conforms');
    }

    /**
     * @param bool|null $conforms
     * @return $this
     */
    public function setConforms(bool $conforms): static
    {
        return $this->set('conforms', $conforms);
    }

    /**
     * The top part of the fraction (above the line). This usually is the smaller number compared to the denominator.
     *
     * @return int|null
     */
    public function getNumerator(): ?int
    {
        return $this->get('numerator');
    }

    /**
     * @param int|null $numerator
     * @return $this
     */
    public function setNumerator(int $numerator = null): static
    {
        return $this->set('numerator', $numerator);
    }

    /**
     * The lower part of the fraction (below the line). This usually is the larger number compared to the the numerator.
     *
     * @return int|null
     */
    public function getDenominator(): ?int
    {
        return $this->get('denominator');
    }

    /**
     * @param int|null $denominator
     * @return $this
     */
    public function setDenominator(int $denominator = null): static
    {
        return $this->set('denominator', $denominator);
    }

    /**
     * The score for this measurement (denominator divided by the numerator).
     *
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->get('value');
    }

    /**
     * @param float|null $value
     * @return $this
     */
    public function setValue(float $value = null): static
    {
        return $this->set('value', $value);
    }

    /**
     * The difference between the score and the bol.com service norm.
     *
     * @return float|null
     */
    public function getDistanceToNorm(): ?float
    {
        return $this->get('distanceToNorm');
    }

    /**
     * @param float|null $distanceToNorm
     * @return $this
     */
    public function setDistanceToNorm(float $distanceToNorm = null): static
    {
        return $this->set('distanceToNorm', $distanceToNorm);
    }

}
