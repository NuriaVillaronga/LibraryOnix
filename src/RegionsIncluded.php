<?php
namespace OnixComponents;

use SimpleXMLElement;

class RegionsIncluded
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeRegionsIncluded)
    {
        $this->contents = (string) ($nodeRegionsIncluded);
    }
}

