<?php
namespace OnixComponents;

use SimpleXMLElement;

class CountryCode 
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeCountryCode) 
    {
        $this->contents = (string) $nodeCountryCode;
    }
}