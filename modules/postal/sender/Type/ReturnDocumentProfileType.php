<?php

namespace app\modules\postal\sender\Type;

class ReturnDocumentProfileType
{
    /**
     * Required during updating profile. Returned
     *  during getting list of profiles.
     *
     * @var null | int
     */
    private ?int $idProfile = null;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var null | string
     */
    private ?string $name2 = null;

    /**
     * @var string
     */
    private string $friendlyName;

    /**
     * @var string
     */
    private string $street;

    /**
     * @var string
     */
    private string $houseNumber;

    /**
     * @var null | string
     */
    private ?string $premisesNumber = null;

    /**
     * @var string
     */
    private string $city;

    /**
     * @var string
     */
    private string $postalCode;

    /**
     * @var null | string
     */
    private ?string $mobile = null;

    /**
     * @var null | string
     */
    private ?string $phonenumber = null;

    /**
     * @var null | string
     */
    private ?string $email = null;

    /**
     * @var null | bool
     */
    private ?bool $default = null;

    /**
     * @return null | int
     */
    public function getIdProfile() : ?int
    {
        return $this->idProfile;
    }

    /**
     * @param null | int $idProfile
     * @return static
     */
    public function withIdProfile(?int $idProfile) : static
    {
        $new = clone $this;
        $new->idProfile = $idProfile;

        return $new;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return static
     */
    public function withName(string $name) : static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getName2() : ?string
    {
        return $this->name2;
    }

    /**
     * @param null | string $name2
     * @return static
     */
    public function withName2(?string $name2) : static
    {
        $new = clone $this;
        $new->name2 = $name2;

        return $new;
    }

    /**
     * @return string
     */
    public function getFriendlyName() : string
    {
        return $this->friendlyName;
    }

    /**
     * @param string $friendlyName
     * @return static
     */
    public function withFriendlyName(string $friendlyName) : static
    {
        $new = clone $this;
        $new->friendlyName = $friendlyName;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreet() : string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return static
     */
    public function withStreet(string $street) : static
    {
        $new = clone $this;
        $new->street = $street;

        return $new;
    }

    /**
     * @return string
     */
    public function getHouseNumber() : string
    {
        return $this->houseNumber;
    }

    /**
     * @param string $houseNumber
     * @return static
     */
    public function withHouseNumber(string $houseNumber) : static
    {
        $new = clone $this;
        $new->houseNumber = $houseNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPremisesNumber() : ?string
    {
        return $this->premisesNumber;
    }

    /**
     * @param null | string $premisesNumber
     * @return static
     */
    public function withPremisesNumber(?string $premisesNumber) : static
    {
        $new = clone $this;
        $new->premisesNumber = $premisesNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return static
     */
    public function withCity(string $city) : static
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return static
     */
    public function withPostalCode(string $postalCode) : static
    {
        $new = clone $this;
        $new->postalCode = $postalCode;

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
    public function getPhonenumber() : ?string
    {
        return $this->phonenumber;
    }

    /**
     * @param null | string $phonenumber
     * @return static
     */
    public function withPhonenumber(?string $phonenumber) : static
    {
        $new = clone $this;
        $new->phonenumber = $phonenumber;

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
     * @return null | bool
     */
    public function getDefault() : ?bool
    {
        return $this->default;
    }

    /**
     * @param null | bool $default
     * @return static
     */
    public function withDefault(?bool $default) : static
    {
        $new = clone $this;
        $new->default = $default;

        return $new;
    }
}

