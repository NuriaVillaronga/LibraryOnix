<?php
namespace OnixComponents;

use SimpleXMLElement;

class ImprintIDType 
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeImprintIDType)
    {
        $this->contents = (string) ($nodeImprintIDType);
    }
}