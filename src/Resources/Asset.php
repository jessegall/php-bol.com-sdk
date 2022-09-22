<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class Asset 
*/
class Asset extends Resource
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
    protected string $bolComResource = 'Asset';

    
    /**
    * The URL of the asset. 
*
    * @return string|null
    */
    public function getUrl(): ?string 
    {
        return $this->get('url');
    }

    /**
     * @param string|null $url
     * @return $this
     */
    public function setUrl(string $url = null): static 
    {
        return $this->set('url', $url);
    }

    /**
    * The label(s) of the asset. 
*
    * @return array|null
    */
    public function getLabels(): ?array 
    {
        return $this->get('labels');
    }

    /**
     * @param array|null $labels
     * @return $this
     */
    public function setLabels(array $labels = null): static 
    {
        return $this->set('labels', $labels);
    }

}
