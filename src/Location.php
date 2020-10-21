<?php

namespace geocoding;

class Location
{
    /**
     * @var string
     */
    private $country;
    /**
     * @var string
     */
    private $countryCode;
    /**
     * @var string
     */
    private $state;
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $district;
    /**
     * @var string
     */
    private $street;
    private $building;
    private $apartment;
    private $postcode;
    private $lat;
    private $lon;

    /**
     * Location constructor.
     * @param string $country
     * @param string $countryCode
     * @param string $state
     * @param string $city
     * @param string $district
     * @param string $street
     * @param $building
     * @param $apartment
     * @param $postcode
     * @param $lat
     * @param $lon
     */
    public function __construct(
        string $country,
        string $countryCode,
        string $state,
        string $city,
        string $district,
        string $street,
        $building,
        $apartment,
        $postcode,
        $lat,
        $lon
    )
    {
        $this->country = $country;
        $this->countryCode = $countryCode;
        $this->state = $state;
        $this->city = $city;
        $this->district = $district;
        $this->street = $street;
        $this->building = $building;
        $this->apartment = $apartment;
        $this->postcode = $postcode;
        $this->lat = $lat;
        $this->lon = $lon;
    }


    public function getCountry():?string
    {
        return null;
    }

    public function getState():?string
    {
        return null;
    }

    public function getCity():?string
    {
        return null;
    }
}