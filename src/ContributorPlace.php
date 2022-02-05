<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContributorPlace 
{
    public ?CountryCode $countryCode; // (0,1) 

    public function __construct(SimpleXMLElement $nodeContributorPlace)
    {
        if (isset($nodeContributorPlace->CountryCode) == true) {
            $this->countryCode = new CountryCode($nodeContributorPlace->CountryCode);
        } else {
            $this->countryCode = null;
        }
    }
}

