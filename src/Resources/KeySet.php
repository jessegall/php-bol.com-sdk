<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class KeySet
 */
class KeySet extends Resource
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
    protected string $bolComResource = 'KeySet';


    /**
     * Key identifier. Maps to the keyId value in the signature header of the push request.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->get('id');
    }

    /**
     * @param string|null $id
     * @return $this
     */
    public function setId(string $id = null): static
    {
        return $this->set('id', $id);
    }

    /**
     * Key encryption type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->get('type');
    }

    /**
     * @param string|null $type
     * @return $this
     */
    public function setType(string $type = null): static
    {
        return $this->set('type', $type);
    }

    /**
     * The Base64 encoded public key to use when verifying the signature.
     *
     * @return string|null
     */
    public function getPublicKey(): ?string
    {
        return $this->get('publicKey');
    }

    /**
     * @param string|null $publicKey
     * @return $this
     */
    public function setPublicKey(string $publicKey = null): static
    {
        return $this->set('publicKey', $publicKey);
    }

}
