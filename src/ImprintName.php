<?php
namespace OnixComponents;

use SimpleXMLElement;

class ImprintName
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeImprintName)
    {
        $this->contents = (string) ($nodeImprintName);
    }
}

