<?php
namespace OnixComponents;

use SimpleXMLElement;

class CountriesExcluded
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeCountriesExcluded)
    {
        $this->contents = (string) ($nodeCountriesExcluded);
    }
}

