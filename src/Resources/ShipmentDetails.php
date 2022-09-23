<?php

namespace JesseGall\BolComSDK\Resources;

/**
 * Class ShipmentDetails
 * The address details where this order needs to be shipped to. This can be the customers' own address, a (company) business address or a Pick Up Point address.
 */
class ShipmentDetails extends Resource
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
    protected string $bolComResource = 'ShipmentDetails';


    /**
     * The name of Pick Up Point location this order needs to be shipped to.
     *
     * @return string|null
     */
    public function getPickupPointName(): ?string
    {
        return $this->get('pickupPointName');
    }

    /**
     * @param string|null $pickupPointName
     * @return $this
     */
    public function setPickupPointName(string $pickupPointName = null): static
    {
        return $this->set('pickupPointName', $pickupPointName);
    }

    /**
     * The salutation of the customer.
     *
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->get('salutation');
    }

    /**
     * @param string|null $salutation
     * @return $this
     */
    public function setSalutation(string $salutation = null): static
    {
        return $this->set('salutation', $salutation);
    }

    /**
     * The first name of the customer.
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->get('firstName');
    }

    /**
     * @param string|null $firstName
     * @return $this
     */
    public function setFirstName(string $firstName = null): static
    {
        return $this->set('firstName', $firstName);
    }

    /**
     * The surname of the customer.
     *
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->get('surname');
    }

    /**
     * @param string|null $surname
     * @return $this
     */
    public function setSurname(string $surname = null): static
    {
        return $this->set('surname', $surname);
    }

    /**
     * The street name.
     *
     * @return string|null
     */
    public function getStreetName(): ?string
    {
        return $this->get('streetName');
    }

    /**
     * @param string|null $streetName
     * @return $this
     */
    public function setStreetName(string $streetName = null): static
    {
        return $this->set('streetName', $streetName);
    }

    /**
     * The house number.
     *
     * @return string|null
     */
    public function getHouseNumber(): ?string
    {
        return $this->get('houseNumber');
    }

    /**
     * @param string|null $houseNumber
     * @return $this
     */
    public function setHouseNumber(string $houseNumber = null): static
    {
        return $this->set('houseNumber', $houseNumber);
    }

    /**
     * The extension on the house number.
     *
     * @return string|null
     */
    public function getHouseNumberExtension(): ?string
    {
        return $this->get('houseNumberExtension');
    }

    /**
     * @param string|null $houseNumberExtension
     * @return $this
     */
    public function setHouseNumberExtension(string $houseNumberExtension = null): static
    {
        return $this->set('houseNumberExtension', $houseNumberExtension);
    }

    /**
     * Additional information related to the address that helps in delivering the package.
     *
     * @return string|null
     */
    public function getExtraAddressInformation(): ?string
    {
        return $this->get('extraAddressInformation');
    }

    /**
     * @param string|null $extraAddressInformation
     * @return $this
     */
    public function setExtraAddressInformation(string $extraAddressInformation = null): static
    {
        return $this->set('extraAddressInformation', $extraAddressInformation);
    }

    /**
     * The ZIP code in '1234AB' format for NL orders and '0000' format for BE orders.
     *
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->get('zipCode');
    }

    /**
     * @param string|null $zipCode
     * @return $this
     */
    public function setZipCode(string $zipCode = null): static
    {
        return $this->set('zipCode', $zipCode);
    }

    /**
     * The name of the city.
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->get('city');
    }

    /**
     * @param string|null $city
     * @return $this
     */
    public function setCity(string $city = null): static
    {
        return $this->set('city', $city);
    }

    /**
     * The country code.
     *
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->get('countryCode');
    }

    /**
     * @param string|null $countryCode
     * @return $this
     */
    public function setCountryCode(string $countryCode = null): static
    {
        return $this->set('countryCode', $countryCode);
    }

    /**
     * A scrambled email address that can be used to contact the customer.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    /**
     * @param string|null $email
     * @return $this
     */
    public function setEmail(string $email = null): static
    {
        return $this->set('email', $email);
    }

    /**
     * The company name.
     *
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->get('company');
    }

    /**
     * @param string|null $company
     * @return $this
     */
    public function setCompany(string $company = null): static
    {
        return $this->set('company', $company);
    }

    /**
     * The delivery phone number of the customer. Filled in case the order requires an appointment for delivering the goods.
     *
     * @return string|null
     */
    public function getDeliveryPhoneNumber(): ?string
    {
        return $this->get('deliveryPhoneNumber');
    }

    /**
     * @param string|null $deliveryPhoneNumber
     * @return $this
     */
    public function setDeliveryPhoneNumber(string $deliveryPhoneNumber = null): static
    {
        return $this->set('deliveryPhoneNumber', $deliveryPhoneNumber);
    }

    /**
     * The language of the customer in case of contact.
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

}
