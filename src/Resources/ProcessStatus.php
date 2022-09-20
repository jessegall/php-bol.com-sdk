<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class ProcessStatus extends Resource
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
    protected string $bolComResource = 'ProcessStatus';


    /**
     * The process status id.
     *
     * @return string|null
     */
    public function getProcessStatusId(): ?string
    {
        return $this->get('processStatusId');
    }

    /**
     * @param string|null $processStatusId
     * @return $this
     */
    public function setProcessStatusId(string $processStatusId = null): static
    {
        return $this->set('processStatusId', $processStatusId);
    }

    /**
     * The id of the object being processed. E.g. in case of a shipment process id, you will receive the id of the order item being processed.
     *
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->get('entityId');
    }

    /**
     * @param string|null $entityId
     * @return $this
     */
    public function setEntityId(string $entityId = null): static
    {
        return $this->set('entityId', $entityId);
    }

    /**
     * Name of the requested action that is being processed.
     *
     * @return string|null
     */
    public function getEventType(): ?string
    {
        return $this->get('eventType');
    }

    /**
     * @param string|null $eventType
     * @return $this
     */
    public function setEventType(string $eventType = null): static
    {
        return $this->set('eventType', $eventType);
    }

    /**
     * Describes the action that is being processed.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    /**
     * @param string|null $description
     * @return $this
     */
    public function setDescription(string $description = null): static
    {
        return $this->set('description', $description);
    }

    /**
     * Status of the action being processed.
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
     * Shows error message if applicable.
     *
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->get('errorMessage');
    }

    /**
     * @param string|null $errorMessage
     * @return $this
     */
    public function setErrorMessage(string $errorMessage = null): static
    {
        return $this->set('errorMessage', $errorMessage);
    }

    /**
     * Time of creation of the response.
     *
     * @return string|null
     */
    public function getCreateTimestamp(): ?string
    {
        return $this->get('createTimestamp');
    }

    /**
     * @param string|null $createTimestamp
     * @return $this
     */
    public function setCreateTimestamp(string $createTimestamp = null): static
    {
        return $this->set('createTimestamp', $createTimestamp);
    }

    /**
     * Lists available actions applicable to this endpoint.
     *
     * @return ResourceCollection<Link>|null
     */
    public function getLinks(): ?ResourceCollection
    {
        return $this->relation('links', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<Link>|null $links
     * @return $this
     */
    public function setLinks(ResourceCollection $links = null): static
    {
        return $this->set('links', $links);
    }

}
