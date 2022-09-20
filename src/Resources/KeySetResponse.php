<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class KeySetResponse extends Resource
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
    protected string $bolComResource = 'KeySetResponse';


    /**
     * @return ResourceCollection<KeySet>|null
     */
    public function getSignatureKeys(): ?ResourceCollection
    {
        return $this->relation('signatureKeys', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<KeySet>|null $signatureKeys
     * @return $this
     */
    public function setSignatureKeys(ResourceCollection $signatureKeys = null): static
    {
        return $this->set('signatureKeys', $signatureKeys);
    }

}
