<?php
namespace OnixComponents;

use SimpleXMLElement;

class CountryOfManufacture
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeCountryOfManufacture)
    {
        $this->contents = (string) ($nodeCountryOfManufacture);
    }
}

