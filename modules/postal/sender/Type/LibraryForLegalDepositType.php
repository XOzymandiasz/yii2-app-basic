<?php

namespace app\modules\postal\sender\Type;

class LibraryForLegalDepositType
{
    /**
     * Library ID to use for shipment data in the
     *  <idLibraryForLegalDeposit/> element
     *
     * @var string
     */
    private string $idLibraryForLegalDeposit;

    /**
     * @var string
     */
    private string $libraryName;

    /**
     * For a P.O. Box, this item includes a string
     *  &quot;skr. poczt.&quot; and box_number
     *
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
    private ?string $apartmentNumber = null;

    /**
     * @var null | string
     */
    private ?string $zipCode = null;

    /**
     * @var null | string
     */
    private ?string $city = null;

    /**
     * @return string
     */
    public function getIdLibraryForLegalDeposit() : string
    {
        return $this->idLibraryForLegalDeposit;
    }

    /**
     * @param string $idLibraryForLegalDeposit
     * @return static
     */
    public function withIdLibraryForLegalDeposit(string $idLibraryForLegalDeposit) : static
    {
        $new = clone $this;
        $new->idLibraryForLegalDeposit = $idLibraryForLegalDeposit;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibraryName() : string
    {
        return $this->libraryName;
    }

    /**
     * @param string $libraryName
     * @return static
     */
    public function withLibraryName(string $libraryName) : static
    {
        $new = clone $this;
        $new->libraryName = $libraryName;

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
    public function getApartmentNumber() : ?string
    {
        return $this->apartmentNumber;
    }

    /**
     * @param null | string $apartmentNumber
     * @return static
     */
    public function withApartmentNumber(?string $apartmentNumber) : static
    {
        $new = clone $this;
        $new->apartmentNumber = $apartmentNumber;

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
}

