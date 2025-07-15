<?php

namespace app\modules\postal\sender\Type;

class AddressType
{
    /**
     * @var null | string
     */
    private ?string $firstNameOrCompanyName = null;

    /**
     * @var null | string
     */
    private ?string $lastNameOrCompanyNameContinued = null;

    /**
     * @var null | string
     */
    private ?string $street = null;

    /**
     * @var null | string
     */
    private ?string $houseNumber = null;

    /**
     * @var null | string
     */
    private ?string $apartamentNumber = null;

    /**
     * @var null | string
     */
    private ?string $city = null;

    /**
     * @var null | string
     */
    private ?string $zipCode = null;

    /**
     * Code (ISO 3166) of the country.
     *
     * @var null | string
     */
    private ?string $countryCode = null;

    /**
     * @var null | string
     */
    private ?string $mobile = null;

    /**
     * @var null | string
     */
    private ?string $telephone = null;

    /**
     * @var null | string
     */
    private ?string $email = null;

    /**
     * @var null | string
     */
    private ?string $contactPerson = null;

    /**
     * @var null | string
     */
    private ?string $nip = null;

    /**
     * @return null | string
     */
    public function getFirstNameOrCompanyName() : ?string
    {
        return $this->firstNameOrCompanyName;
    }

    /**
     * @param null | string $firstNameOrCompanyName
     * @return static
     */
    public function withFirstNameOrCompanyName(?string $firstNameOrCompanyName) : static
    {
        $new = clone $this;
        $new->firstNameOrCompanyName = $firstNameOrCompanyName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLastNameOrCompanyNameContinued() : ?string
    {
        return $this->lastNameOrCompanyNameContinued;
    }

    /**
     * @param null | string $lastNameOrCompanyNameContinued
     * @return static
     */
    public function withLastNameOrCompanyNameContinued(?string $lastNameOrCompanyNameContinued) : static
    {
        $new = clone $this;
        $new->lastNameOrCompanyNameContinued = $lastNameOrCompanyNameContinued;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStreet() : ?string
    {
        return $this->street;
    }

    /**
     * @param null | string $street
     * @return static
     */
    public function withStreet(?string $street) : static
    {
        $new = clone $this;
        $new->street = $street;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getHouseNumber() : ?string
    {
        return $this->houseNumber;
    }

    /**
     * @param null | string $houseNumber
     * @return static
     */
    public function withHouseNumber(?string $houseNumber) : static
    {
        $new = clone $this;
        $new->houseNumber = $houseNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getApartamentNumber() : ?string
    {
        return $this->apartamentNumber;
    }

    /**
     * @param null | string $apartamentNumber
     * @return static
     */
    public function withApartamentNumber(?string $apartamentNumber) : static
    {
        $new = clone $this;
        $new->apartamentNumber = $apartamentNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCity() : ?string
    {
        return $this->city;
    }

    /**
     * @param null | string $city
     * @return static
     */
    public function withCity(?string $city) : static
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getZipCode() : ?string
    {
        return $this->zipCode;
    }

    /**
     * @param null | string $zipCode
     * @return static
     */
    public function withZipCode(?string $zipCode) : static
    {
        $new = clone $this;
        $new->zipCode = $zipCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }

    /**
     * @param null | string $countryCode
     * @return static
     */
    public function withCountryCode(?string $countryCode) : static
    {
        $new = clone $this;
        $new->countryCode = $countryCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMobile() : ?string
    {
        return $this->mobile;
    }

    /**
     * @param null | string $mobile
     * @return static
     */
    public function withMobile(?string $mobile) : static
    {
        $new = clone $this;
        $new->mobile = $mobile;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTelephone() : ?string
    {
        return $this->telephone;
    }

    /**
     * @param null | string $telephone
     * @return static
     */
    public function withTelephone(?string $telephone) : static
    {
        $new = clone $this;
        $new->telephone = $telephone;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }

    /**
     * @param null | string $email
     * @return static
     */
    public function withEmail(?string $email) : static
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getContactPerson() : ?string
    {
        return $this->contactPerson;
    }

    /**
     * @param null | string $contactPerson
     * @return static
     */
    public function withContactPerson(?string $contactPerson) : static
    {
        $new = clone $this;
        $new->contactPerson = $contactPerson;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNip() : ?string
    {
        return $this->nip;
    }

    /**
     * @param null | string $nip
     * @return static
     */
    public function withNip(?string $nip) : static
    {
        $new = clone $this;
        $new->nip = $nip;

        return $new;
    }
}

