<?php

namespace JesseGall\BolComSDK\Resources;

class CreateOfferExportRequest extends Resource
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
    protected string $bolComResource = 'CreateOfferExportRequest';


    /**
     * The file format in which to return the export.
     *
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->get('format');
    }

    /**
     * @param string|null $format
     * @return $this
     */
    public function setFormat(string $format = null): static
    {
        return $this->set('format', $format);
    }

}
