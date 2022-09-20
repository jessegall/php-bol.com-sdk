<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\Resources\ResourceCollection;

class UploadReportResponse extends Resource
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
    protected string $bolComResource = 'UploadReportResponse';


    /**
     * The identifier of the upload report.
     *
     * @return string|null
     */
    public function getUploadId(): ?string
    {
        return $this->get('uploadId');
    }

    /**
     * @param string|null $uploadId
     * @return $this
     */
    public function setUploadId(string $uploadId = null): static
    {
        return $this->set('uploadId', $uploadId);
    }

    /**
     * The language in which content is submitted.
     *
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->get('language');
    }

    /**
     * @param string|null $language
     * @return $this
     */
    public function setLanguage(string $language = null): static
    {
        return $this->set('language', $language);
    }

    /**
     * The current status of the upload report.
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
     * @return ResourceCollection<UploadReportAttribute>|null
     */
    public function getAttributes(): ?ResourceCollection
    {
        return $this->relation('attributes', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<UploadReportAttribute>|null $attributes
     * @return $this
     */
    public function setAttributes(ResourceCollection $attributes = null): static
    {
        return $this->set('attributes', $attributes);
    }

    /**
     * @return ResourceCollection<UploadReportAsset>|null
     */
    public function getAssets(): ?ResourceCollection
    {
        return $this->relation('assets', ResourceCollection::class, true);
    }

    /**
     * @param ResourceCollection<UploadReportAsset>|null $assets
     * @return $this
     */
    public function setAssets(ResourceCollection $assets = null): static
    {
        return $this->set('assets', $assets);
    }

}
