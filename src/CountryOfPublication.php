<?php
namespace OnixComponents;

use SimpleXMLElement;

class CountryOfPublication
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeCountryOfPublication)
    {
        $this->contents = (string) ($nodeCountryOfPublication);
    }
}

