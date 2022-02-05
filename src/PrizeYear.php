<?php
namespace OnixComponents;

use SimpleXMLElement;

class PrizeYear 
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePrizeYear) 
    {
        $this->contents = (string) $nodePrizeYear;
    }
}