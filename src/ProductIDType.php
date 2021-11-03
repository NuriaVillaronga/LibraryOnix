<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductIDType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeProductIDType)
    {
        $this->contents = (string) ($nodeProductIDType);
    }
}

