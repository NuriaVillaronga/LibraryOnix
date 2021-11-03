<?php
namespace OnixComponents;

use SimpleXMLElement;

class ReturnsCodeType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeReturnsCodeType)
    {
        $this->contents = (string) ($nodeReturnsCodeType);
    }
}

