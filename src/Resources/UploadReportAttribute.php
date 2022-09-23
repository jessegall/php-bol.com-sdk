<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Class UploadReportAttribute
 */
class UploadReportAttribute extends Resource
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
    protected string $bolComResource = 'UploadReportAttribute';


    /**
     * The identifier of the attribute for which the value has changed.
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
     * @return ResourceCollection<UploadReportValue>|null
     */
    public function getValues(): ?ResourceCollection
    {
        return $this->relation('values', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<UploadReportValue>|null $values
     * @return $this
     */
    public function setValues(ResourceCollection $values = null): static
    {
        return $this->set('values', $values);
    }

    /**
     * The processing state of the submitted attribute.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    /**
     * @param string|null $status
     * @return $this
     */
    public function setStatus(string $status = null): static
    {
        return $this->set('status', $status);
    }

    /**
     * The reason code explaining why the value was rejected.
     *
     * @return string|null
     */
    public function getSubStatus(): ?string
    {
        return $this->get('subStatus');
    }

    /**
     * @param string|null $subStatus
     * @return $this
     */
    public function setSubStatus(string $subStatus = null): static
    {
        return $this->set('subStatus', $subStatus);
    }

    /**
     * The reason explaining why the value was rejected.
     *
     * @return string|null
     */
    public function getSubStatusDescription(): ?string
    {
        return $this->get('subStatusDescription');
    }

    /**
     * @param string|null $subStatusDescription
     * @return $this
     */
    public function setSubStatusDescription(string $subStatusDescription = null): static
    {
        return $this->set('subStatusDescription', $subStatusDescription);
    }

}
