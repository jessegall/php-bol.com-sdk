<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class HandoverDetails 
*/
class HandoverDetails extends Resource
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
    protected string $bolComResource = 'HandoverDetails';

    
    /**
    * Indicates if you can use this label without receiving a strike if you handover before the latestHandoverDateTime. If this field is 'false' you can still buy and use this label but it will have negative consequences on your performance score because the order will be delivered too early or too late. 
*
    * @return bool|null
    */
    public function getMeetsCustomerExpectation(): ?bool 
    {
        return $this->get('meetsCustomerExpectation');
    }

    /**
     * @param bool|null $meetsCustomerExpectation
     * @return $this
     */
    public function setMeetsCustomerExpectation(bool $meetsCustomerExpectation): static 
    {
        return $this->set('meetsCustomerExpectation', $meetsCustomerExpectation);
    }

    /**
    * The date and time at which the parcel must ultimately be at the transporter to make sure your parcel is delivered on time. If you handover after this date you will receive a strike because you order will be delivered too late. 
*
    * @return string|null
    */
    public function getLatestHandoverDateTime(): ?string 
    {
        return $this->get('latestHandoverDateTime');
    }

    /**
     * @param string|null $latestHandoverDateTime
     * @return $this
     */
    public function setLatestHandoverDateTime(string $latestHandoverDateTime = null): static 
    {
        return $this->set('latestHandoverDateTime', $latestHandoverDateTime);
    }

    /**
    * The type of collection for this parcel. 
*
    * @return string|null
    */
    public function getCollectionMethod(): ?string 
    {
        return $this->get('collectionMethod');
    }

    /**
     * @param string|null $collectionMethod
     * @return $this
     */
    public function setCollectionMethod(string $collectionMethod = null): static 
    {
        return $this->set('collectionMethod', $collectionMethod);
    }

}
