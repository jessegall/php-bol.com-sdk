<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class ReturnProcessingResult 
*/
class ReturnProcessingResult extends Resource
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
    protected string $bolComResource = 'ReturnProcessingResult';

    
    /**
    * The processed quantity. 
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

    /**
    * The processing result of the return. 
*
    * @return string|null
    */
    public function getProcessingResult(): ?string 
    {
        return $this->get('processingResult');
    }

    /**
     * @param string|null $processingResult
     * @return $this
     */
    public function setProcessingResult(string $processingResult = null): static 
    {
        return $this->set('processingResult', $processingResult);
    }

    /**
    * The handling result requested by the retailer. 
*
    * @return string|null
    */
    public function getHandlingResult(): ?string 
    {
        return $this->get('handlingResult');
    }

    /**
     * @param string|null $handlingResult
     * @return $this
     */
    public function setHandlingResult(string $handlingResult = null): static 
    {
        return $this->set('handlingResult', $handlingResult);
    }

    /**
    * The date and time in ISO 8601 format when the return was processed. 
*
    * @return string|null
    */
    public function getProcessingDateTime(): ?string 
    {
        return $this->get('processingDateTime');
    }

    /**
     * @param string|null $processingDateTime
     * @return $this
     */
    public function setProcessingDateTime(string $processingDateTime = null): static 
    {
        return $this->set('processingDateTime', $processingDateTime);
    }

}
