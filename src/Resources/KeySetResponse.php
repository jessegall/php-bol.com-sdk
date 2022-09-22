<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Response;
use JesseGall\Resources\ResourceCollection;

/**
 * Class KeySetResponse
 */
class KeySetResponse extends Resource implements Response
{

    /**
     * The bol.com resource this class represents
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
