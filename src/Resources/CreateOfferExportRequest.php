<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Contracts\Request;

/**
 * Class CreateOfferExportRequest
 */
class CreateOfferExportRequest extends Resource implements Request
{
    /**
     * The api endpoint of the request.
     *
     * @var string
     */
    protected string $endpoint = '/retailer/offers/export';

    /**
     * The endpoint method.
     *
     * @var string
     */
    protected string $endpointMethod = 'post';

    /**
     * The bol.com resource this class represents
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
