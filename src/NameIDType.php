<?php
namespace OnixComponents;

use SimpleXMLElement;

class NameIDType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeNameIDType)
    {
        $this->contents = (string) ($nodeNameIDType);
    }
}

