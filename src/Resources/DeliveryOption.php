<?php

namespace JesseGall\BolComSDK\Resources;

use JesseGall\BolComSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

/**
* Class DeliveryOption 
* A delivery option shows how and the costs of a transport for a shippable configuration
*/
class DeliveryOption extends Resource
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
    protected string $bolComResource = 'DeliveryOption';

    
    /**
    * Unique identifier for the shipping label offer. 
*
    * @return string|null
    */
    public function getShippingLabelOfferId(): ?string 
    {
        return $this->get('shippingLabelOfferId');
    }

    /**
     * @param string|null $shippingLabelOfferId
     * @return $this
     */
    public function setShippingLabelOfferId(string $shippingLabelOfferId = null): static 
    {
        return $this->set('shippingLabelOfferId', $shippingLabelOfferId);
    }

    /**
    * Indicates whether this delivery option is recommended to be the best option to ship your order item(s) with. 
*
    * @return bool|null
    */
    public function getRecommended(): ?bool 
    {
        return $this->get('recommended');
    }

    /**
     * @param bool|null $recommended
     * @return $this
     */
    public function setRecommended(bool $recommended): static 
    {
        return $this->set('recommended', $recommended);
    }

    /**
    * The date until the delivery option (incl total price) is valid. 
*
    * @return string|null
    */
    public function getValidUntilDate(): ?string 
    {
        return $this->get('validUntilDate');
    }

    /**
     * @param string|null $validUntilDate
     * @return $this
     */
    public function setValidUntilDate(string $validUntilDate = null): static 
    {
        return $this->set('validUntilDate', $validUntilDate);
    }

    /**
    * A code representing the transporter which is being used for transportation. 
*
    * @return string|null
    */
    public function getTransporterCode(): ?string 
    {
        return $this->get('transporterCode');
    }

    /**
     * @param string|null $transporterCode
     * @return $this
     */
    public function setTransporterCode(string $transporterCode = null): static 
    {
        return $this->set('transporterCode', $transporterCode);
    }

    /**
    * The type of the label, representing the way an item is being transported. MAILBOX is a mailbox package with delivery scan. MAILBOX_LIGHT is a mailbox package without delivery scan. PARCEL is a normal package. 
*
    * @return string|null
    */
    public function getLabelType(): ?string 
    {
        return $this->get('labelType');
    }

    /**
     * @param string|null $labelType
     * @return $this
     */
    public function setLabelType(string $labelType = null): static 
    {
        return $this->set('labelType', $labelType);
    }

    /**
    * The display name of the shipping label. 
*
    * @return string|null
    */
    public function getLabelDisplayName(): ?string 
    {
        return $this->get('labelDisplayName');
    }

    /**
     * @param string|null $labelDisplayName
     * @return $this
     */
    public function setLabelDisplayName(string $labelDisplayName = null): static 
    {
        return $this->set('labelDisplayName', $labelDisplayName);
    }

    /**
    
    * @return LabelPrice|null
    */
    public function getLabelPrice(): ?LabelPrice 
    {
        return $this->relation('labelPrice', LabelPrice::class);
    }

    /**
     * @param LabelPrice|null $labelPrice
     * @return $this
     */
    public function setLabelPrice(LabelPrice $labelPrice = null): static 
    {
        return $this->set('labelPrice', $labelPrice);
    }

    /**
    
    * @return PackageRestrictions|null
    */
    public function getPackageRestrictions(): ?PackageRestrictions 
    {
        return $this->relation('packageRestrictions', PackageRestrictions::class);
    }

    /**
     * @param PackageRestrictions|null $packageRestrictions
     * @return $this
     */
    public function setPackageRestrictions(PackageRestrictions $packageRestrictions = null): static 
    {
        return $this->set('packageRestrictions', $packageRestrictions);
    }

    /**
    
    * @return HandoverDetails|null
    */
    public function getHandoverDetails(): ?HandoverDetails 
    {
        return $this->relation('handoverDetails', HandoverDetails::class);
    }

    /**
     * @param HandoverDetails|null $handoverDetails
     * @return $this
     */
    public function setHandoverDetails(HandoverDetails $handoverDetails = null): static 
    {
        return $this->set('handoverDetails', $handoverDetails);
    }

}
