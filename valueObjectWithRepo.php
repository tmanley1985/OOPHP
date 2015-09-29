<?php

final class Country
{
    private $countryCode;

    public function __construct($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    public function __toString()
    {
        return $this->countryCode;
    }
}

final class AvailableCountry
{
    private $country;
    private $name;

    public function __construct(Country $country, $name)
    {
        $this->country = $country;
        $this->name = $name;
    }

    /** @return Country */
    public function getCountry()
    {
        return $this->country;
    }

    public function getName()
    {
        return $this->name;
    }

}

final class AvailableCountryRepository
{
    /** @return AvailableCountry[] */
    public function findAll()
    {
        return [
            'BE' => new AvailableCountry(new Country('BE'), 'Belgium'),
            'FR' => new AvailableCountry(new Country('FR'), 'France')
           
        ];
    }

    /** @return AvailableCountry */
    public function findByCountry(Country $country)
    {
        return $this->findAll()[(string) $country];
    }
}

$Belgium = new Country('BE');

$AvailableCountry = new AvailableCountryRepository();

$arrayCountries = $AvailableCountry->findByCountry(new Country('FR'));

echo '<pre>';
var_dump($arrayCountries);
echo '</pre>';