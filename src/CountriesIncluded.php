<?php
namespace OnixComponents;

use SimpleXMLElement;

class CountriesIncluded
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeCountriesIncluded)
    {
        $this->contents = (string) ($nodeCountriesIncluded);
    }
}

