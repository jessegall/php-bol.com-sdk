<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class UploadReportAsset
 */
class UploadReportAsset extends Resource
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
    protected string $bolComResource = 'UploadReportAsset';


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

    /**
     * The processing state of the submitted asset.
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
