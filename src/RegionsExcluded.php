<?php
namespace OnixComponents;

use SimpleXMLElement;

class RegionsExcluded
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeRegionsExcluded)
    {
        $this->contents = (string) ($nodeRegionsExcluded); 
    }
}