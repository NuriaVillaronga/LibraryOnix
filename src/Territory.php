<?php
namespace OnixComponents;

use SimpleXMLElement;

class Territory
{
    
    public ?CountriesExcluded $countriesExcluded; //(0,1)
    
    public ?CountriesIncluded $countriesIncluded; //(0,1)
    
    public ?RegionsIncluded $regionsIncluded; //(0,1)
    
    public function __construct(SimpleXMLElement $nodeTerritory)
    {
        if (isset($nodeTerritory->CountriesExcluded) == true) {
            $this->countriesExcluded = new CountriesExcluded($nodeTerritory->CountriesExcluded);
        } else {
            $this->countriesExcluded = null;
        }

        if (isset($nodeTerritory->CountriesIncluded) == true) {
            $this->countriesIncluded = new CountriesIncluded($nodeTerritory->CountriesIncluded);
        } else {
            $this->countriesIncluded = null;
        }

        if (isset($nodeTerritory->RegionsIncluded) == true) {
            $this->regionsIncluded = new RegionsIncluded($nodeTerritory->RegionsIncluded);
        } else {
            $this->regionsIncluded = null;
        }
    }
}

