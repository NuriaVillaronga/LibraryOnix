<?php
namespace OnixComponents;

use SimpleXMLElement;

class PrizeCountry 
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePrizeCountry) 
    {
        $this->contents = (string) $nodePrizeCountry;
    }
}