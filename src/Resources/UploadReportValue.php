<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class UploadReportValue 
*/
class UploadReportValue extends Resource
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
    protected string $bolComResource = 'UploadReportValue';

    
    /**
    * The value of the attribute. 
*
    * @return string|null
    */
    public function getValue(): ?string 
    {
        return $this->get('value');
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setValue(string $value = null): static 
    {
        return $this->set('value', $value);
    }

    /**
    * The unit identifier of the attribute. 
*
    * @return string|null
    */
    public function getUnitId(): ?string 
    {
        return $this->get('unitId');
    }

    /**
     * @param string|null $unitId
     * @return $this
     */
    public function setUnitId(string $unitId = null): static 
    {
        return $this->set('unitId', $unitId);
    }

}
